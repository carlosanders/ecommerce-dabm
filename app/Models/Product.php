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
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nameProduct()
    {
        return $this->belongsTo('\App\Models\NameProduct');
    }

    /**
     * Get the images for the product.
     *
     * Relcionamento "one-to-many" usado para definir
     * que o Model Product possui qualquer qtd
     * do Model Images
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('\App\Models\Image');
    }

    /**
     * Get the stock record associated with the product.
     * Um model User pode estar associado a um model Stock
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function stock()
    {
        return $this->hasOne('App\Models\Stock');
    }

}
