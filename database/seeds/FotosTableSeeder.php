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
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "images" ref Facade DB demo created');
    }
}
