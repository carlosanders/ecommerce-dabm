<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pi')->unique();
            $table->string('nome_item')->unique();
            $table->string('uf');
            $table->longText('description');
            $table->decimal('peso_unit', 11, 2);
            $table->integer('vol_unit');
            $table->decimal('preco', 11, 2);
            $table->decimal('desconto', 11, 2);
            $table->string('slug')->unique();
            $table->boolean('pg_init')->default(false);
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
        Schema::dropIfExists('products');
    }
}
