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
        'image_path',
        'title',
        'description',
        'value',
        'qtd',
        'url',
    ];

    public function setUrlAttribute($value = '')
    {
        if ($value == '') {
            $value = $this->attributes['title'];
        }

        $this->attributes['url'] = str_slug($value);
    }
}
