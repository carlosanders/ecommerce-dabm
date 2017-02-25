<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->truncate();

        $this->createWithDB();
    }

    public function createWithDB()
    {
        DB::table("payments")->insert(array(
            [
                'order_id' => 1,
                'valor_total' => 100.04,
            ],
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "payments" ref Facade DB demo created');
    }
}
