<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagGruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pg_gru', function (Blueprint $table) {
            $table->increments('id');
            //ref pagamentos
            $table->integer('payment_id')->unsigned();
            $table->foreign('payment_id')
                ->references('id')
                ->on('payments');

            $table->string('codigo_favorecido');
            $table->string('gestao');
            $table->string('codigo_correlacao');
            $table->string('nome_favorecido');
            $table->string('codigo_recolhimento');
            $table->string('nome_recolhimento');
            $table->string('referencia');
            $table->string('valorPrincipal');
            $table->decimal('descontos', 10, 2);
            $table->decimal('deducoes', 10, 2);
            $table->decimal('multa', 10, 2);
            $table->decimal('juros', 10, 2);
            $table->decimal('acrescimos', 10, 2);
            $table->string('boleto');
            $table->string('impressao');
            $table->string('pagamento');
            $table->string('campo');
            $table->string('ind');
            $table->string('competencia');
            $table->date('vencimento');
            //pega do cliente
            $table->string('cnpj_cpf');
            //pega do cliente
            $table->string('nome_contribuinte');
            $table->string('valorTotal');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pg_gru');
    }
}
