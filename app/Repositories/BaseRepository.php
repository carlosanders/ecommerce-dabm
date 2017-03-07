<?php

namespace App\Repositories;

use Closure;
use Exception;
use Illuminate\Container\Container as Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Events\RepositoryEntityCreated;
use App\Repositories\Events\RepositoryEntityDeleted;
use App\Repositories\Events\RepositoryEntityUpdated;


abstract class BaseRepository implements RepositoryInterface
{

    /**
     * @var Application
     */
    protected $app;

    /**
     * Model class for repo.
     *
     * @var string
     */
    protected $model;

    /**
     * @var \Closure
     */
    protected $scopeQuery = null;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        //$this->criteria = new Collection();
        $this->makeModel();
        //$this->makePresenter();
        //$this->makeValidator();
        //$this->boot();
    }

    /**
     * Specify Model class name
     * Especificar a clsse do Model para o Repositorio
     *
     * @return string
     */
    abstract public function model();

    //metodos publicos do repositorio

    /**
     * Retrieve all data of repository
     * Recupera todos os dados do repositorio
     * Encontre todos os resultados no Repositorio
     *
     * @param array $columns
     *
     * @example $posts = $this->repository->all();
     *
     * @return mixed
     */
    public function all($columns = ['*'])
    {
        //$this->applyCriteria();
        $this->applyScope();
        if ($this->model instanceof Builder) {
            $results = $this->model->get($columns);
        } else {
            $results = $this->model->all($columns);
        }
        $this->resetModel();
        $this->resetScope();
        return $this->parserResult($results);
    }

    /**
     * Retrieve first data of repository
     * Recuperar os primeiros dados do repositório
     *
     * @param array $columns
     *
     * @example $this->repository->first($columns = array('*'))
     * @return mixed
     */
    public function first($columns = ['*'])
    {
        //$this->applyCriteria();
        $this->applyScope();
        $results = $this->model->first($columns);
        $this->resetModel();
        return $this->parserResult($results);
    }

    /**
     * Retrieve all data of repository, paginated
     * Recuperar todos os dados do repositório, paginados
     * Encontre todos os resultados em Repositório com paginação
     *
     * @param integer|null   $limit
     * @param array          $columns
     * @param string         $method
     *
     * @example $posts = $this->repository->paginate($limit = null, $columns = ['*']);
     *
     * @return mixed
     */
    public function paginate($limit = null, $columns = ['*'], $method = "paginate")
    {
        //$this->applyCriteria();
        $this->applyScope();
        $limit = is_null($limit) ? config('repository.pagination.limit', 15) : $limit;
        $results = $this->model->{$method}($limit, $columns);
        $results->appends(app('request')->query());
        $this->resetModel();
        return $this->parserResult($results);
    }

    /**
     * Retrieve all data of repository, simple paginated
     * Recuperar todos os dados do repositório, paginados simples
     *
     * @param null  $limit
     * @param array $columns
     *
     * @return mixed
     */
    public function simplePaginate($limit = null, $columns = ['*'])
    {
        return $this->paginate($limit, $columns, "simplePaginate");
    }

    /**
     * Find data by id
     * Recupera os dados passando um id
     *
     * @param       $id
     * @param array $columns
     *
     * @return mixed
     *
     * @example $posts = $this->repository->find($id, $columns = ['*'])
     */
    public function find($id, $columns = ['*'])
    {
        //$this->applyCriteria();
        $this->applyScope();
        $model = $this->model->findOrFail($id, $columns);
        $this->resetModel();
        return $this->parserResult($model);
    }

    /**
     * Find data by field and value
     * Busca dados por campo e valor
     * Localizar por resultado pelo nome do campo
     *
     * @param       $field
     * @param       $value
     * @param array $columns
     *
     * @return mixed
     * @example $posts = $this->repository->findByField('country_id','15');
     */
    public function findByField($field, $value = null, $columns = ['*'])
    {
        //$this->applyCriteria();
        $this->applyScope();
        $model = $this->model->where($field, '=', $value)->get($columns);
        $this->resetModel();
        return $this->parserResult($model);
    }

    /**
     * Find data by multiple fields
     * Busca o resultado por vários campos
     *
     * @param array $where
     * @param array $columns
     *
     * @return mixed
     * @example $posts = $this->repository->findWhere([
                    //Default Condition =
                    'state_id'=>'10',
                    'country_id'=>'15',
                    //Custom Condition
                    ['columnName','>','10']
                ]);
     */
    public function findWhere(array $where, $columns = ['*'])
    {
        //$this->applyCriteria();
        $this->applyScope();
        $this->applyConditions($where);
        $model = $this->model->get($columns);
        $this->resetModel();
        return $this->parserResult($model);
    }

    /**
     * Find data by multiple values in one field
     * Buscar dados por vários valores em um campo
     *
     * @param       $field
     * @param array $values
     * @param array $columns
     *
     * @return mixed
     * @example $posts = $this->repository->findWhereIn('id', [1,2,3,4,5]);
     */
    public function findWhereIn($field, array $values, $columns = ['*'])
    {
        //$this->applyCriteria();
        $model = $this->model->whereIn($field, $values)->get($columns);
        $this->resetModel();
        return $this->parserResult($model);
    }

    /**
     * Find data by excluding multiple values in one field
     * Buscar dados excluindo vários valores em um campo
     *
     * @param       $field
     * @param array $values
     * @param array $columns
     *
     * @return mixed
     * @example $posts = $this->repository->findWhereNotIn('id', [6,7,8,9,10]);
     */
    public function findWhereNotIn($field, array $values, $columns = ['*'])
    {
        //$this->applyCriteria();
        $model = $this->model->whereNotIn($field, $values)->get($columns);
        $this->resetModel();
        return $this->parserResult($model);
    }

    /**
     * Save a new entity in repository
     * Salvar uma nova entidade no repositório
     *
     * @throws ValidatorException
     *
     * @param array $attributes
     *
     * @return mixed
     * @example $post = $this->repository->create( Input::all() );
     */
    public function create(array $attributes)
    {
        $model = $this->model->newInstance($attributes);
        $model->save();
        $this->resetModel();
        event(new RepositoryEntityCreated($this, $model));
        return $this->parserResult($model);
    }

    /**
     * Update a entity in repository by id
     * Atualizar a entidade no repositorio por id
     *
     *
     * @param array $attributes
     * @param       $id
     *
     * @return mixed
     * @example $post = $this->repository->update( Input::all(), $id );
     */
    public function update(array $attributes, $id)
    {
        $this->applyScope();
        //$temporarySkipPresenter = $this->skipPresenter;
        //$this->skipPresenter(true);
        $model = $this->model->findOrFail($id);
        $model->fill($attributes);
        $model->save();
       // $this->skipPresenter($temporarySkipPresenter);
        $this->resetModel();
        event(new RepositoryEntityUpdated($this, $model));
        return $this->parserResult($model);
    }

    /**
     * Update or Create an entity in repository
     * Atualizar ou Criar uma entidade no repositório
     *
     * @param array $attributes
     * @param array $values
     *
     * @return mixed
     */
    public function updateOrCreate(array $attributes, array $values = [])
    {
        $this->applyScope();

        //$temporarySkipPresenter = $this->skipPresenter;
        //$this->skipPresenter(true);
        $model = $this->model->updateOrCreate($attributes, $values);
        //$this->skipPresenter($temporarySkipPresenter);
        $this->resetModel();
        event(new RepositoryEntityUpdated($this, $model));
        return $this->parserResult($model);
    }

    /**
     * Delete a entity in repository by id
     * Remove a entity em um repositorio por id
     *
     * @param $id
     *
     * @return int
     * @example $this->repository->delete($id)
     */
    public function delete($id)
    {
        $this->applyScope();
        //$temporarySkipPresenter = $this->skipPresenter;
        //$this->skipPresenter(true);
        $model = $this->find($id);
        $originalModel = clone $model;
        //$this->skipPresenter($temporarySkipPresenter);
        $this->resetModel();
        $deleted = $model->delete();
        event(new RepositoryEntityDeleted($this, $originalModel));
        return $deleted;
    }

    /**
     * Delete multiple entities by given criteria.
     *  Excluir várias entidades por critérios fornecidos.
     *
     * @param array $where
     *
     * @return int
     */
    public function deleteWhere(array $where)
    {
        $this->applyScope();
        //$temporarySkipPresenter = $this->skipPresenter;
        //$this->skipPresenter(true);
        $this->applyConditions($where);
        $deleted = $this->model->delete();
        event(new RepositoryEntityDeleted($this, $this->model->getModel()));
        //$this->skipPresenter($temporarySkipPresenter);
        $this->resetModel();
        return $deleted;
    }

    /**
     * Check if entity has relation
     * Verificar se a entidade tem relação
     *
     * @param string $relation
     *
     * @return $this
     */
    public function has($relation)
    {
        $this->model = $this->model->has($relation);
        return $this;
    }

    /**
     * Load relations
     * Carrega Relações do Model
     * Carregando as relações do modelo
     *
     * @param array|string $relations
     *
     * @return $this
     * @exmple $post = $this->repository->with(['state'])->find($id);
     */
    public function with($relations)
    {
        $this->model = $this->model->with($relations);
        return $this;
    }

    /**
     * Load relation with closure
     * Relação de carga com closure
     *
     * @param string $relation
     * @param closure $closure
     *
     * @return $this
     */
    function whereHas($relation, $closure)
    {
        $this->model = $this->model->whereHas($relation, $closure);
        return $this;
    }

    /**
     * Set hidden fields
     * Definir campos que se tornarao ocultos
     * Ocultando atributos do modelo
     *
     * @param array $fields
     *
     * @return $this
     * @example $post = $this->repository->hidden(['country_id'])->find($id);
     */
    public function hidden(array $fields)
    {
        $this->model->setHidden($fields);
        return $this;
    }

    /**
     * Set visible fields
     * Definir campos que serao visiveis
     * Mostrando apenas atributos específicos do modelo
     *
     * @param array $fields
     *
     * @return $this
     * @example $post = $this->repository->visible(['id', 'state_id'])->find($id);
     */
    public function visible(array $fields)
    {
        $this->model->setVisible($fields);

        return $this;
    }

    /**
     * Order collection by a given column
     * Ordena a Colecao por um determinda coluna
     *
     * @param $column
     * @param string $direction
     * @return $this
     * @example $posts = $this->repository->scopeQuery(function($query){
                    return $query->orderBy('sort_order','asc');
                })->all();
     */
    public function orderBy($column, $direction = 'asc')
    {
        $this->model = $this->model->orderBy($column, $direction);
        return $this;
    }

    //----- methods auxiliar

    /**
     * Applies the given where conditions to the model.
     * Aplica no dado a cláusula 'where' para o Model.
     *
     * @param array $where
     * @return void
     */
    protected function applyConditions(array $where)
    {
        foreach ($where as $field => $value) {
            if (is_array($value)) {
                list($field, $condition, $val) = $value;
                $this->model = $this->model->where($field, $condition, $val);
            } else {
                $this->model = $this->model->where($field, '=', $value);
            }
        }
    }

    /**
     *
     * @return Model
     * @throws RepositoryException
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());
        if (!$model instanceof Model) {
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        return $this->model = $model;
    }

    /**
     * Query Scope
     * Localizar tudo usando o escopo personalizado
     *
     * @param \Closure $scope
     *
     * @return $this
     * @example $posts = $this->repository->scopeQuery(function($query){
                        return $query->orderBy('sort_order','asc');
                })->all();
     */
    public function scopeQuery(\Closure $scope)
    {
        $this->scopeQuery = $scope;
        return $this;
    }

    /**
     * Get Searchable Fields
     * Obter campos pesquisáveis
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }


    /**
     * Wrapper result data
     * Dados do resultado do wrapper
     *
     * @param mixed $result
     *
     * @return mixed
     */
    public function parserResult($result)
    {
        //if ($this->presenter instanceof PresenterInterface) {
            if ($result instanceof Collection
                || $result instanceof LengthAwarePaginator) {
                $result->each(function ($model) {
//                    if ($model instanceof Presentable) {
//                        $model->setPresenter($this->presenter);
//                    }
                    //var_dump('ander');
                    return $model;
                });
            }
//            elseif ($result instanceof Presentable) {
//                $result = $result->setPresenter($this->presenter);
//            }
//            if (!$this->skipPresenter) {
//                return $this->presenter->present($result);
//            }
        //}
        return $result;
    }

    /**
     * @throws RepositoryException
     */
    public function resetModel()
    {
        $this->makeModel();
    }

    /**
     * Reset Query Scope
     * Redefinir o Query Scope
     *
     * @return $this
     */
    public function resetScope()
    {
        $this->scopeQuery = null;
        return $this;
    }
    /**
     * Apply scope in current Query
     * Aplicar escopo na Consulta atual
     *
     * @return $this
     */
    protected function applyScope()
    {
        if (isset($this->scopeQuery) && is_callable($this->scopeQuery)) {
            $callback = $this->scopeQuery;
            $this->model = $callback($this->model);
        }
        return $this;
    }

}
