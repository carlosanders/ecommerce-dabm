<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // apaga a TB Status
        DB::table('status')->truncate();

        $this->createWithDB();
    }

    /**
     *
     */
    public function createWithDB()
    {
        DB::table("status")->insert(array(
            [
                'name' => 'Aguardando Confirmação Pagamento',
                'slug' => str_slug('AGU PAG'),
                'description' => 'Aguarda a confirmação do PG da GRU',
            ],
            [
                'name' => 'Processando Pedido no PDU',
                'slug' => str_slug('PROC PED'),
                'description' => 'Prepara o pedido no PEU',
            ],
            [
                'name' => 'Produto Entregue',
                'slug' => str_slug('Entregue'),
                'description' => 'Farda entregue no PEU selecionado',
            ],
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "status" ref Facade DB demo created');
    }
}
