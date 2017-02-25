<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Desabilitas as FKs para evitar erros
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Impede que seed seja executado em ambiente de produção
        if (!app()->environment('production')):
            $this->call(UsersTableSeeder::class);
            $this->call(CategoryTableSeeder::class);
            $this->call(StatusTableSeeder::class);
            $this->call(PDUTableSeeder::class);
            $this->call(NamesProductsTableSeeder::class);
            $this->call(ProductTableSeeder::class);
            $this->call(EstoqueTableSeeder::class);
            $this->call(FotosTableSeeder::class);
            $this->call(CategoriesProductTableSeeder::class);
            $this->call(PedidosTableSeeder::class);
            $this->call(PagamentosTableSeeder::class);
            $this->call(PagGruTableSeeder::class);
        endif;

        if(app()->environment('production')):
            // seeds especiais para o ambiente de produção
        endif;

        if(app()->environment('testing')):
            // seeds especiais para o ambiente de testes
        endif;

        // Habilitas as FKs
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
