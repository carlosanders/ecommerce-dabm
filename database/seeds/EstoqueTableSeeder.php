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
                'tamanho'=> 'G'
            ],
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "stocks" ref Facade DB demo created');
    }
}
