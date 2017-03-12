<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PDU extends Model
{
    //setando a table que o model vai usar
    //dessa forma jah elimina ter que ficar setando qual a tabela no controller
    protected $table = 'pdu';

    /*
     * quais o campos que serao passados para o model, ou seja, os campos que serao
     * usados da table e, questao. qualquer coisa alem disso sera ignorado pelo model
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
}
