<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /*
     * setando a table que o model vai usar
     * dessa forma jah elimina ter que ficar setando qual a tabela no controller
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * The attributes that are mass assignable.
     * Os atributos que são atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * Get the orders for the status.
     * Obter os pedidos para o status.
     * Um Status no app pode ter um numero infinito de pedidos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
