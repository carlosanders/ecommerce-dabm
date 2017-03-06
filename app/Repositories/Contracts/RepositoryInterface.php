<?php
namespace App\Repositories\Contracts;

/**
 * Interface RepositoryInterface
 * @package Prettus\Repository\Contracts
 */
interface RepositoryInterface
{

    /**
     * Retrieve all data of repository
     * Encontre todos os resultados no Repositorio
     *
     * @param array $columns
     *
     * @return mixed
     */
    public function all($columns = ['*']);

    /**
     * Retrieve all data of repository, paginated
     * Encontre todos os resultados em Repositório com paginação
     *
     * @param null $limit
     * @param array $columns
     *
     * @return mixed
     */
    public function paginate($limit = null, $columns = ['*']);

    /**
     * Retrieve all data of repository, simple paginated
     * Recuperar todos os dados do repositório, paginados simples
     *
     * @param null $limit
     * @param array $columns
     *
     * @return mixed
     */
    public function simplePaginate($limit = null, $columns = ['*']);

    /**
     * Find data by id
     * Recupera os dados passando um id
     *
     * @param       $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find($id, $columns = ['*']);

    /**
     * Find data by field and value
     * Busca dados por campo e valor
     *
     * @param       $field
     * @param       $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findByField($field, $value, $columns = ['*']);

    /**
     * Find data by multiple fields
     * Busca o resultado por vários campos
     *
     * @param array $where
     * @param array $columns
     *
     * @return mixed
     */
    public function findWhere(array $where, $columns = ['*']);

    /**
     * Find data by multiple values in one field
     * Buscar dados por vários valores em um campo
     *
     * @param       $field
     * @param array $values
     * @param array $columns
     *
     * @return mixed
     */
    public function findWhereIn($field, array $values, $columns = ['*']);

    /**
     * Find data by excluding multiple values in one field
     * Buscar dados excluindo vários valores em um campo
     *
     * @param       $field
     * @param array $values
     * @param array $columns
     *
     * @return mixed
     */
    public function findWhereNotIn($field, array $values, $columns = ['*']);

    /**
     * Save a new entity in repository
     * Salvar uma nova entidade no repositório
     *
     * @param array $attributes
     *
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Update a entity in repository by id
     * Atualizar a entidade no repositorio por id
     *
     * @param array $attributes
     * @param       $id
     *
     * @return mixed
     */
    public function update(array $attributes, $id);

    /**
     * Update or Create an entity in repository
     * Atualizar ou Criar uma entidade no repositório
     *
     * @throws ValidatorException
     *
     * @param array $attributes
     * @param array $values
     *
     * @return mixed
     */
    public function updateOrCreate(array $attributes, array $values = []);

    /**
     * Delete a entity in repository by id
     * Remove a entity em um repositorio por id
     *
     * @param $id
     *
     * @return int
     */
    public function delete($id);

    /**
     * Order collection by a given column
     * Ordena a Colecao por um determinda coluna
     * @param string $column
     * @param string $direction
     *
     * @return $this
     */
    public function orderBy($column, $direction = 'asc');

    /**
     * Load relations
     * Carregando as relações do modelo
     *
     * @param $relations
     *
     * @return $this
     */
    public function with($relations);

    /**
     * Set hidden fields
     * Ocultando atributos do modelo
     *
     * @param array $fields
     *
     * @return $this
     */
    public function hidden(array $fields);

    /**
     * Set visible fields
     * Mostrando apenas atributos específicos do modelo
     *
     * @param array $fields
     *
     * @return $this
     */
    public function visible(array $fields);

    /**
     * Query Scope
     * Localizar tudo usando o escopo personalizado
     *
     * @param \Closure $scope
     *
     * @return $this
     */
    public function scopeQuery(\Closure $scope);

    /**
     * Reset Query Scope
     * Redefinir o Query Scope
     *
     * @return $this
     */
    public function resetScope();

    /**
     * Get Searchable Fields
     * Obter campos pesquisáveis
     *
     * @return array
     */
    public function getFieldsSearchable();

}
