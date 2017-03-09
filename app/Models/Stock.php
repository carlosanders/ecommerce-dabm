<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //quais o campos que serao passados para o model, ou seja, os campos que serao
    //usados da table e, questao. qualquer coisa alem disso sera ignorado pelo model
    protected $fillable = [
        'product_id',
        'qtd',

    ];

    /**
     * Get the product that owns the stock.
     * um relacionamento no model Stock que nos permitirá acessar
     * o produto que possui o stock.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
