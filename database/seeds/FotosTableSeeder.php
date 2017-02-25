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
            ],
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "images" ref Facade DB demo created');
    }
}
