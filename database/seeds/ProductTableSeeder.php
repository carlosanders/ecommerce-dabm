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

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/08/bigPhoto_0.jpg',
            'title' => 'Boné Branco Oficial Superior Feminino',
            'description' => 'Boné Branco Oficial Superior Feminino',
            'value' => 342.5,
            'qtd' => 50,
            'url' => 'url-1',
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/07/3_3.jpg',
            'title' => 'Camiseta Regata Branca',
            'description' => 'Camiseta Regata Branca',
            'value' => 17.5,
            'qtd' => 150,
            'url' => 'url-2',
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/07/DSC01494-800x1067.jpg',
            'title' => 'Calça Panamá Cinza',
            'description' => 'Calça Panamá Cinza',
            'value' => 89.05,
            'qtd' => 10,
            'url' => 'url-3',
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/07/short121289g.jpg',
            'title' => 'Calção de Ginástica – Oficial',
            'description' => 'Calção de Ginástica – Oficial',
            'value' => 23.5,
            'qtd' => 50,
            'url' => 'url-4',
        ]);
        $product->save();
    }
}
