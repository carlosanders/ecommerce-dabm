<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //quais o campos que serao passados para o model, ou seja, os campos que serao
    //usados da table e, questao. qualquer coisa alem disso sera ignorado pelo model
    protected $fillable = [
        'product_id',
        'image_path',
    ];

    /**
     * Get the name image owns the product
     * One To Many (Inverse)
     * Permite que um image acesse seu nome de produto
     */
    public function product()
    {
        return $this->belongsTo('\App\Models\Product');
    }
}
