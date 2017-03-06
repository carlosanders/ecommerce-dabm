<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //setando a table que o model vai usar
    //dessa forma jah elimina ter que ficar setando qual a tabela no controller
    protected $table = 'products';

    //quais o campos que serao passados para o model, ou seja, os campos que serao
    //usados da table e, questao. qualquer coisa alem disso sera ignorado pelo model
    protected $fillable = [
        'pi',
        'tamanho',
        'uf',
        'peso_unit',
        'vol_unit',
        'preco',
        'desconto',
        'pg_init',
        'name_product_id',
    ];

    /**
     * Get the name product owns the product
     * One To Many (Inverse)
     * Permite que um produto acesse seu nome de produto
     */
    public function nameProduct()
    {
        return $this->belongsTo('\App\Models\NameProduct');
    }
}
