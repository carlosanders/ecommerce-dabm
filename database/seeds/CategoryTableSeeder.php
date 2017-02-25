<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        //exemplo criando com ref no Model
        $this->createWithModel();
        //exemplo com Facade DB
        $this->createWithDB();
    }

    /**
     * Cria categoria baseado no Model Criado
     */
    private function createWithModel()
    {
        $c = new Category();
        $c->name = 'Uniforme Branco';
        $c->active = true;
        $c->parent_id = null;
        $c->save();

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Category ref ao Model created');
    }

    private function createWithDB()
    {
        DB::table("categories")->insert(array(
            array(
                'active' => true,
                'name' => 'Uniforme Bege',
                'parent_id' => null,
            ),
            array(
                'active' => true,
                'name' => 'Uniforme Cinza',
                'parent_id' => null,
            ),
            array(
                'active' => true,
                'name' => 'TFM',
                'parent_id' => null,
            ),
            array(
                'active' => true,
                'name' => 'Camisas',
                'parent_id' => 1,
            ),
            array(
                'active' => true,
                'name' => 'Chapéu',
                'parent_id' => 1,
            ),
            array(
                'active' => true,
                'name' => 'Calças',
                'parent_id' => 2,
            ),
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Categories ref ao Facade DB created');
    }
}
