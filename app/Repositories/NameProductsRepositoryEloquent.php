<?php

namespace App\Repositories;


class NameProductsRepositoryEloquent extends BaseRepository
{

    /**
     * Specify Model class name
     * Especificar a clsse do Model para o Repositorio
     *
     * @return string
     */
    public function model()
    {
        //
        return \App\Models\NameProduct::class;
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
}
