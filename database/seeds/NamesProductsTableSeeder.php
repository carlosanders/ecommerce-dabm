<?php

use App\Models\NameProduct;
use Illuminate\Database\Seeder;

class NamesProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NameProduct::truncate();
        //
        $this->createWithModel();

        $this->createWithDB();
    }

    /**
     * Cria categoria baseado no Model Criado
     */
    private function createWithModel()
    {
        $name = new NameProduct();
        $name->nome_item = title_case('BERMUDA FEM AZUL-MARINHO OFICIAL');
        $name->slug = $name->setSlugAttribute();
        $name->description = '...';

        $name->save();

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('NameProduct ref a class Model\NameProduct.php created');
    }

    public function createWithDB()
    {
        DB::table("names_products")->insert(array(
            [
                'id' => 2,
                'nome_item' => title_case('BERMUDA FEM AZUL-MARINHO PRACA'),
                'slug' => str_slug('BERMUDA FEM AZUL-MARINHO PRACA'),
            ], //2
            [
                'id' => 3,
                'nome_item' => title_case('BLUSA BRANCA M/M C/PASS'),
                'slug' => str_slug('BLUSA BRANCA M/M C/PASS'),
            ], //3
            [
                'id' => 4,
                'nome_item' => title_case('BLUSA BRANCA M/M S/PASS'),
                'slug' => str_slug('BLUSA BRANCA M/M S/PASS'),
            ], //4
            [
                'id' => 5,
                'nome_item' => title_case('BLUSA CINZA M/M'),
                'slug' => str_slug('BLUSA CINZA M/M'),
            ], //5
        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "names_products" ref Facade DB demo created');
    }
}
