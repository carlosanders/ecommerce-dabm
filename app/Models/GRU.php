<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GRU extends Model
{
    /*
     * setando a table que o model vai usar
     * dessa forma jah elimina ter que ficar setando qual a tabela no controller
     */
    protected $table = 'pg_gru';

    /*
     * quais o campos que serao passados para o model, ou seja, os campos que serao
     * usados da table e, questao. qualquer coisa alem disso sera ignorado pelo model
     */
    protected $fillable = [
        'payment_id',
        'codigo_favorecido',
        'gestao',
        'nome_favorecido',
        'codigo_recolhimento',
        'nome_recolhimento',
        'referencia',
        'valorPrincipal',
        'descontos',
        'deducoes',
        'multa',
        'juros',
        'acrescimos',
        'boleto',
        'impressao',
        'pagamento',
        'campo',
        'ind',
        'competencia',
        'vencimento',
        'cnpj_cpf',

    ];

    /**
     * Get the payment that owns the GRU.
     * Obter o pagamento que possui o GRU.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo('App\Models\Payment');
    }

}
