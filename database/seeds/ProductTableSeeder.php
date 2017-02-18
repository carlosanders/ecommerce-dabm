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
            'title' => 'Boné Branco Feminino',
            'description' => 'Boné Branco Oficial Superior Feminino',
            'value' => 342.5,
            'qtd' => 50,
            'slug' => str_slug('Boné Branco Feminino'),
            'pg_init' => false
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/07/3_3.jpg',
            'title' => 'Camiseta Regata Branca',
            'description' => 'Camiseta Regata Branca',
            'value' => 17.5,
            'qtd' => 150,
            'slug' => str_slug('Regata Branca'),
            'pg_init' => true
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/07/DSC01494-800x1067.jpg',
            'title' => 'Calça Panamá Cinza',
            'description' => 'Calça Panamá Cinza',
            'value' => 89.05,
            'qtd' => 10,
            'slug' => str_slug('Calça Panamá Cinza'),
            'pg_init' => false
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/07/short121289g.jpg',
            'title' => 'Calção TFM Of.',
            'description' => 'Calção de Ginástica – Oficial',
            'value' => 23.5,
            'qtd' => 50,
            'slug' => str_slug('Calção TFM Of'),
            'pg_init' => true
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/07/DSC01683-800x600.jpg',
            'title' => 'Camisa Branca 5.5',
            'description' => 'Camisa Branca Panamá Feminina',
            'value' => 82.0,
            'qtd' => 50,
            'slug' => str_slug('Camisa Branca 5.5'),
            'pg_init' => false
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/08/DSC01980-560x420.jpg',
            'title' => 'Boné Branco SG F',
            'description' => 'Boné Feminino Branco – Sargento',
            'value' => 160.0,
            'qtd' => 20,
            'slug' => str_slug('Boné Branco SG F'),
            'pg_init' => false
        ]);
        $product->save();

        $product = new Product([
            'image_path' => 'http://casadaarmada.com/wp-content/uploads/2015/08/1230096_216823005143278_620956694_n-560x747.jpg',
            'title' => 'Dólmã Completo',
            'description' => 'Dólmã Completo (Paleto,Calça e Botões)',
            'value' => 600.0,
            'qtd' => 20,
            'slug' => str_slug('Dólmã Completo'),
            'pg_init' => true
        ]);
        $product->save();

    }
}
