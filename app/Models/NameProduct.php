<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NameProduct extends Model
{
    //setando a table que o model vai usar
    //dessa forma jah elimina ter que ficar setando qual a tabela no controller
    protected $table = 'names_products';

    //quais o campos que serao passados para o model, ou seja, os campos que serao
    //usados da table e, questao. qualquer coisa alem disso sera ignorado pelo model
    protected $fillable = [
        'nome_item',
        'slug',
        'description',
    ];

    public function setSlugAttribute($value = '')
    {
        if ($value == '') {
            $value = $this->attributes['nome_item'];
        }

        $this->attributes['slug'] = str_slug($value);
    }

    /**
     * Get the products for the name product.
     *
     * Relcionamento "one-to-many" usdo para definir
     * que o Model NameProduct possui qualquer qtd
     * do Model Products
     */
    public function products()
    {
        return $this->hasMany('\App\Models\Product', 'name_product_id', 'id');
    }
}
