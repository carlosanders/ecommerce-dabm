<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        //cria um produto com ref ao Model Product
        $this->createWithModel();

    }

    /**
     * Cria categoria baseado no Model Criado
     */
    private function createWithModel()
    {
        $product = new Product([
            'pi' => '190000477',
            'nome_item' => title_case('BERMUDA FEM AZUL-MARINHO OFICIAL'),
            'uf' => 'UN',
            'description' => '...',
            'peso_unit' => 0.13,
            'vol_unit' => 1800,
            'preco' => 25.00,
            'desconto' => 0.1,
            'slug' => str_slug('BERMUDA FEM AZUL-MARINHO'),
            'pg_init' => true,
        ]);
        $product->save();

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Product ref a class Model\Product.php created');
    }
}
