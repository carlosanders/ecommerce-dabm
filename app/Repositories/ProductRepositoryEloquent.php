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

}
