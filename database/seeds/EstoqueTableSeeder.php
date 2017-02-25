<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstoqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate();

        $this->createWithDB();
    }

    public function createWithDB()
    {
        DB::table("stocks")->insert(array(
            [
                'id' => 1,
                'product_id' => 1,
                'qtd' => 5,
            ], //1
            [
                'id' => 2,
                'product_id' => 2,
                'qtd' => 5,
            ], //2
            [
                'id' => 3,
                'product_id' => 3,
                'qtd' => 5,
            ], //3
            [
                'id' => 4,
                'product_id' => 4,
                'qtd' => 5,
            ], //4

            [
                'id' => 5,
                'product_id' => 5,
                'qtd' => 0,
            ], //5
            [
                'id' => 6,
                'product_id' => 6,
                'qtd' => 5,
            ], //6
            [
                'id' => 7,
                'product_id' => 7,
                'qtd' => 15,
            ], //7
            [
                'id' => 8,
                'product_id' => 8,
                'qtd' => 0,
            ], //8
            //blusa
            [
                'id' => 9,
                'product_id' => 9,
                'qtd' => 5,
            ], //9
            [
                'id' => 10,
                'product_id' => 10,
                'qtd' => 0,
            ], //10
            [
                'id' => 11,
                'product_id' => 11,
                'qtd' => 0,
            ], //11
            [
                'id' => 12,
                'product_id' => 12,
                'qtd' => 5,
            ], //12
            [
                'id' => 13,
                'product_id' => 13,
                'qtd' => 0,
            ], //13
            [
                'id' => 14,
                'product_id' => 14,
                'qtd' => 5,
            ], //14
            [
                'id' => 15,
                'product_id' => 15,
                'qtd' => 10,
            ], //15
            [
                'id' => 16,
                'product_id' => 16,
                'qtd' => 0,
            ], //16
            [
                'id' => 17,
                'product_id' => 17,
                'qtd' => 5,
            ], //17
            [
                'id' => 18,
                'product_id' => 18,
                'qtd' => 5,
            ], //18
            //BLUSA CINZA
            [
                'id' => 19,
                'product_id' => 19,
                'qtd' => 0,
            ], //19
            [
                'id' => 20,
                'product_id' => 20,
                'qtd' => 0,
            ], //20
            [
                'id' => 21,
                'product_id' => 21,
                'qtd' => 0,
            ], //21
            [
                'id' => 22,
                'product_id' => 22,
                'qtd' => 0,
            ], //22
            [
                'id' => 23,
                'product_id' => 23,
                'qtd' => 0,
            ], //23
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "stocks" ref Facade DB demo created');
    }
}
