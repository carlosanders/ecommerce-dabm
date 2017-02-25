<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            //ref user
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            //ref status orders
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')
                ->references('id')
                ->on('status');
            //ref in pdu
            $table->integer('pdu_id')->unsigned();
            $table->foreign('pdu_id')
                ->references('id')
                ->on('pdu');
            //data retirda
            $table->date('date_ship');

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
        Schema::dropIfExists('orders');
    }
}
