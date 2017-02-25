<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->truncate();

        $this->createWithDB();
    }

    public function createWithDB()
    {
        DB::table("images")->insert(array(
            [
                'product_id' => 1,
                'image_path' => '8.JPG',
            ], //1
            [
                'product_id' => 2,
                'image_path' => '8.JPG',
            ], //2
            [
                'product_id' => 3,
                'image_path' => '8.JPG',
            ], //3
            [
                'product_id' => 4,
                'image_path' => '8.JPG',
            ], //4
            //tfm praca
            [
                'product_id' => 5,
                'image_path' => '199.JPG',
            ], //5
            [
                'product_id' => 6,
                'image_path' => '199.JPG',
            ], //6
            [
                'product_id' => 7,
                'image_path' => '199.JPG',
            ], //7
            [
                'product_id' => 8,
                'image_path' => '199.JPG',
            ], //8
            //blusa
            [
                'product_id' => 9,
                'image_path' => '201.JPG',
            ], //9
            [
                'product_id' => 10,
                'image_path' => '201.JPG',
            ], //10
            [
                'product_id' => 11,
                'image_path' => '201.JPG',
            ], //11
            [
                'product_id' => 12,
                'image_path' => '201.JPG',
            ], //12
            [
                'product_id' => 13,
                'image_path' => '201.JPG',
            ], //13
            [
                'product_id' => 14,
                'image_path' => '201.JPG',
            ], //14
            [
                'product_id' => 15,
                'image_path' => '201.JPG',
            ], //15
            [
                'product_id' => 16,
                'image_path' => '201.JPG',
            ], //16
            [
                'product_id' => 17,
                'image_path' => '201.JPG',
            ], //17
            [
                'product_id' => 18,
                'image_path' => '201.JPG',
            ], //18
            //BLUSA CINZA
            [
                'product_id' => 19,
                'image_path' => '202.JPG',
            ], //19
            [
                'product_id' => 20,
                'image_path' => '202.JPG',
            ], //20
            [
                'product_id' => 21,
                'image_path' => '202.JPG',
            ], //21
            [
                'product_id' => 21,
                'image_path' => '202.JPG',
            ], //21
            [
                'product_id' => 22,
                'image_path' => '202.JPG',
            ], //22
            [
                'product_id' => 22,
                'image_path' => '202.JPG',
            ], //22
            [
                'product_id' => 23,
                'image_path' => '202.JPG',
            ], //23
            //cinto
            [
                'product_id' => 24,
                'image_path' => '51.JPG',
            ], //244
            [
                'product_id' => 23,
                'image_path' => '250.JPG',
            ], //23
            //CALCA BRANCA 6 itens
            [
                'product_id' => 24,
                'image_path' => '230.9.JPG',
            ], //24
            [
                'product_id' => 25,
                'image_path' => '231.JPG',
            ], //25
            [
                'product_id' => 26,
                'image_path' => '231.JPG',
            ], //26
            [
                'product_id' => 26,
                'image_path' => '231.JPG',
            ], //26
            [
                'product_id' => 27,
                'image_path' => '231.JPG',
            ], //27
            [
                'product_id' => 28,
                'image_path' => '231.JPG',
            ], //28
            [
                'product_id' => 29,
                'image_path' => '231.JPG',
            ], //29
            [
                'product_id' => 30,
                'image_path' => '231.JPG',
            ], //30
            [
                'product_id' => 31,
                'image_path' => '231.JPG',
            ], //31
            // CALCA CINZA
            [
                'product_id' => 32,
                'image_path' => '233.JPG',
            ], //32
            [
                'product_id' => 33,
                'image_path' => '233.JPG',
            ], //33
            [
                'product_id' => 34,
                'image_path' => '233.JPG',
            ], //34
            [
                'product_id' => 35,
                'image_path' => '233.JPG',
            ], //35
            [
                'product_id' => 36,
                'image_path' => '233.JPG',
            ], //36
            [
                'product_id' => 37,
                'image_path' => '233.JPG',
            ], //37
            //CALCA FEM CINZA
            [
                'product_id' => 38,
                'image_path' => '236.JPG',
            ], //38
            [
                'product_id' => 39,
                'image_path' => '236.JPG',
            ], //39
            [
                'product_id' => 40,
                'image_path' => '236.JPG',
            ], //40
            [
                'product_id' => 41,
                'image_path' => '236.JPG',
            ], //41
            [
                'product_id' => 42,
                'image_path' => '236.JPG',
            ], //42
            //CALCAO AZUL OF
            [
                'product_id' => 43,
                'image_path' => '32.JPG',
            ], //43
            [
                'product_id' => 44,
                'image_path' => '32.JPG',
            ], //44
            [
                'product_id' => 45,
                'image_path' => '32.JPG',
            ], //45
            [
                'product_id' => 46,
                'image_path' => '32.JPG',
            ], //46
            //CALCAO AZUL GINASTICA PRACA
            [
                'product_id' => 47,
                'image_path' => '241.JPG',
            ], //47
            [
                'product_id' => 48,
                'image_path' => '241.JPG',
            ], //48
            [
                'product_id' => 49,
                'image_path' => '241.JPG',
            ], //49
            [
                'product_id' => 50,
                'image_path' => '241.JPG',
            ], //50
            //CALCAO NATACAO
            [
                'product_id' => 51,
                'image_path' => '33.JPG',
            ], //51
            [
                'product_id' => 52,
                'image_path' => '33.JPG',
            ], //52
            [
                'product_id' => 53,
                'image_path' => '33.JPG',
            ], //53
            [
                'product_id' => 54,
                'image_path' => '33.JPG',
            ], //54
            //CAMISA BRANCA M/M C/PASS
            [
                'product_id' => 55,
                'image_path' => '245.JPG',
            ], //55
            [
                'product_id' => 56,
                'image_path' => '245.JPG',
            ], //56
            [
                'product_id' => 57,
                'image_path' => '245.JPG',
            ], //57
            [
                'product_id' => 58,
                'image_path' => '245.JPG',
            ], //58

        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "images" ref Facade DB demo created');
    }
}
