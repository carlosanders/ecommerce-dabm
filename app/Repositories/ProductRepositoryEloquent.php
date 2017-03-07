<?php

namespace App\Repositories;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepositoryEloquent extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return \App\Models\Product::class;
    }

    public function findAll($columns = ['*'])
    {
        return $this->all($columns);
    }

    public function getRandom(array $where, $random, $relations = null, $columns = ['*'])
    {
        $this->applyScope();
        $this->applyConditions($where);
        if (is_null($relations)) {
            $model = $this->model->get($columns)->random($random);
        }else{
            $stmt = $this->model->with($relations);
            $model = $stmt->get($columns)->random($random);
        }
        $this->resetModel();

        return $this->parserResult($model);

    }

//    function whereHasGet($relation, $closure)
//    {
//        $this->model = $this->model->whereHas($relation, $closure);
//
////        $this->applyScope();
////        $model = $this->model->where($field, '=', $value)->get($columns);
////        $this->resetModel();
////        return $this->parserResult($model);
//
//        //$this->applyScope();
//        //$model = $this->model->findOrFail($id, $columns);
//        $model = $this->model->get();
//        //$this->resetModel();
//        return $this->parserResult($model);
//    }

}
