<?php

namespace app\Repositories;

use Closure;
use Exception;
use Illuminate\Container\Container as Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


abstract class BaseRepository
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

    //metodos publicos do repositori

    /**
     * Retrieve all data of repository
     *
     * @param array $columns
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
     *
     * @param array $columns
     *
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

    //----- methods auxiliar

    /**
     * Specify Model class name
     *
     * @return string
     */
    abstract public function model();

    /**
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
     *
     * @param \Closure $scope
     *
     * @return $this
     */
    public function scopeQuery(\Closure $scope)
    {
        $this->scopeQuery = $scope;
        return $this;
    }


    /**
     * Wrapper result data
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
