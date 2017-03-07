<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagGruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pg_gru')->truncate();

        $this->createWithDB();
    }

    public function createWithDB()
    {
        DB::table("pg_gru")->insert(array(
            [
                'payment_id' => 1,
                'codigo_favorecido' => '673006',
                'gestao' => '00001',
                'codigo_correlacao' => '6403',
                'nome_favorecido' => 'DIRETORIA+de+FINAN%C7AS+da+MARINHA-FUNDO+NAVAL',
                'codigo_recolhimento' => '28886-1',
                'nome_recolhimento' => 'F.NAVAL-Serv Adm GERA',
                'referencia' => '6410003',
                'valorPrincipal' => '8,00',
                'descontos' => 0.00,
                'deducoes' => 0.00,
                'multa' => 0.00,
                'juros' => 0.00,
                'acrescimos' => 0.00,
                'boleto' => '3',
                'impressao' => 'S',
                'pagamento' => '0',
                'campo' => 'CR',
                'ind' => '0',
                'competencia' => '10',
                'vencimento' => '2017-02-24',
                'cnpj_cpf' => '08352908758',
                'nome_contribuinte' => 'ANGELO JOPPERT',
                'valorTotal' => '100,50',
            ],
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "pg_gru" ref Facade DB demo created');
    }
}
