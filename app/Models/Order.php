<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //quais o campos que serao passados para o model, ou seja, os campos que serao
    //usados da table e, questao. qualquer coisa alem disso sera ignorado pelo model
    protected $fillable = [
        'description',
        'user_id',
        'status_id',
        'pdu_id',
        'date_ship',

    ];

    /**
     * Get the user that owns the order.
     * Obter o usuario que possui o pedido.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the status that owns the order.
     * Obter o status que possui o pedido.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    /**
     * Get the PDU that owns the order.
     * Obter o PDU que possui o pedido.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pdu()
    {
        return $this->belongsTo('App\Models\PDU');
    }

    /**
     * Get the payments for the order.
     * Obter os pagamentos para o pedido.
     * Um Pedido no app pode ter um numero infinito de pagamentos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }
}
