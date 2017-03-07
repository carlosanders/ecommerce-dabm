<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_products')->truncate();

        $this->createWithDB();
    }

    public function createWithDB()
    {
        DB::table("categories_products")->insert(array(
            [
                'category_id' => 3,
                'product_id' => 1,
            ],
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "categories_products" ref Facade DB demo created');
    }
}
