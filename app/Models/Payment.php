<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //quais o campos que serao passados para o model, ou seja, os campos que serao
    //usados da table e, questao. qualquer coisa alem disso sera ignorado pelo model
    protected $fillable = [
        'order_id',
        'valor_total',

    ];

    /**
     * Get the order that owns the payment.
     * Obter o Pedido que possui o pagamento.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

    /**
     * Get the GRU for the payment.
     * Obter o GRU para o pagamento.
     * Um Pagamento no app pode ter um numero infinito de GRU.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gru()
    {
        return $this->hasMany('App\Models\GRU');
    }
}
