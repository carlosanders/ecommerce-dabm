<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->truncate();

        $this->createWithDB();
    }

    public function createWithDB()
    {
        DB::table("orders")->insert(array(
            [
                'description' => 'Pedido efetuado na loja virtual',
                'user_id' => 1,
                'status_id' => 1,
                'pdu_id' => 1,
                'date_ship' => '2017-02-24',
            ],
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "orders" ref Facade DB demo created');
    }
}
