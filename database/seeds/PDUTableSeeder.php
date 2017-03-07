<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PDUTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pdu')->truncate();

        $this->createWithDB();
    }

    public function createWithDB()
    {
        DB::table("pdu")->insert(array(
            [
                'name' => 'PDU do 1DN',
                'slug' => str_slug('PDU do 1DN'),
                'description' => 'PDU do Comando do Primeiro Distrito Naval',
            ],
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "pdu" ref Facade DB demo created');
    }
}
