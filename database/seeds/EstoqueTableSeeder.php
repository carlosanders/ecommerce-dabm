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
            //cinto
            [
                'id' => 24,
                'product_id' => 24,
                'qtd' => 50,
            ], //24
            [
                'id' => 25,
                'product_id' => 25,
                'qtd' => 100,
            ], //25
            //CALCA BRANCA 6 itens
            [
                'id' => 26,
                'product_id' => 26,
                'qtd' => 10,
            ], //26
            [
                'id' => 27,
                'product_id' => 27,
                'qtd' => 10,
            ], //27
            [
                'id' => 28,
                'product_id' => 28,
                'qtd' => 20,
            ], //28
            [
                'id' => 29,
                'product_id' => 29,
                'qtd' => 20,
            ], //29
            [
                'id' => 30,
                'product_id' => 30,
                'qtd' => 0,
            ], //30
            [
                'id' => 31,
                'product_id' => 31,
                'qtd' => 5,
            ], //31
            // CALCA CINZA
            [
                'id' => 32,
                'product_id' => 32,
                'qtd' => 10,
            ], //32
            [
                'id' => 33,
                'product_id' => 33,
                'qtd' => 20,
            ], //33
            [
                'id' => 34,
                'product_id' => 34,
                'qtd' => 30,
            ], //34
            [
                'id' => 35,
                'product_id' => 35,
                'qtd' => 30,
            ], //35
            [
                'id' => 36,
                'product_id' => 36,
                'qtd' => 10,
            ], //36
            [
                'id' => 37,
                'product_id' => 37,
                'qtd' => 5,
            ], //37
            //CALCA FEM CINZA
            [
                'id' => 38,
                'product_id' => 38,
                'qtd' => 5,
            ], //38
            [
                'id' => 39,
                'product_id' => 39,
                'qtd' => 5,
            ], //39
            [
                'id' => 40,
                'product_id' => 40,
                'qtd' => 5,
            ], //40
            [
                'id' => 41,
                'product_id' => 41,
                'qtd' => 5,
            ], //41
            [
                'id' => 42,
                'product_id' => 42,
                'qtd' => 0,
            ], //42
            //CALCAO AZUL OF
            [
                'id' => 43,
                'product_id' => 43,
                'qtd' => 10,
            ], //43
            [
                'id' => 44,
                'product_id' => 44,
                'qtd' => 5,
            ], //44
            [
                'id' => 45,
                'product_id' => 45,
                'qtd' => 10,
            ], //45
            [
                'id' => 46,
                'product_id' => 46,
                'qtd' => 5,
            ], //46
            //CALCAO AZUL GINASTICA PRACA
            [
                'id' => 47,
                'product_id' => 47,
                'qtd' => 20,
            ], //47
            [
                'id' => 48,
                'product_id' => 48,
                'qtd' => 10,
            ], //48
            [
                'id' => 49,
                'product_id' => 49,
                'qtd' => 20,
            ], //49
            [
                'id' => 50,
                'product_id' => 50,
                'qtd' => 15,
            ], //50
            //CALCAO NATACAO
            [
                'id' => 51,
                'product_id' => 51,
                'qtd' => 30,
            ], //51
            [
                'id' => 52,
                'product_id' => 52,
                'qtd' => 20,
            ], //52
            [
                'id' => 53,
                'product_id' => 53,
                'qtd' => 30,
            ], //53
            [
                'id' => 54,
                'product_id' => 54,
                'qtd' => 10,
            ], //54
            //CAMISA BRANCA M/M C/PASS
            [
                'id' => 55,
                'product_id' => 55,
                'qtd' => 10,
            ], //55
            [
                'id' => 56,
                'product_id' => 56,
                'qtd' => 10,
            ], //56
            [
                'id' => 57,
                'product_id' => 57,
                'qtd' => 10,
            ], //57
            [
                'id' => 58,
                'product_id' => 58,
                'qtd' => 5,
            ], //58

        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "stocks" ref Facade DB demo created');
    }
}
