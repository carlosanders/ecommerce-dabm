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
            $table->string('tamanho');
            $table->string('uf');
            $table->decimal('peso_unit', 11, 2);
            $table->decimal('vol_unit', 11, 2);
            $table->decimal('preco', 11, 2);
            $table->decimal('desconto', 11, 2);
            $table->boolean('pg_init')->default(false);
            // Cada PI pode ter o mesmo name_product
            $table->integer('name_product_id')->unsigned();
            $table->foreign('name_product_id')
                ->references('id')
                ->on('names_products');

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
