<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //limpando a tabela
        Category::truncate();

        $c = new Category();
        $c->name = 'Uniforme 5.5';
        $c->active = true;
        $c->parent_id = null;
        $c->save();

        \DB::table("categories")->insert(array(
            array(
                'active' => true,
                'name' => 'Uniforme 6.4',
                'parent_id' => null,
            ),
            array(
                'active' => true,
                'name' => 'Uniforme 5.4',
                'parent_id' => null,
            ),
            array(
                'active' => false,
                'name' => 'Camisa Social',
                'parent_id' => 1,
            ),
            array(
                'active' => true,
                'name' => 'Camisa M',
                'parent_id' => 2,
            ),
        ));
    }
}
