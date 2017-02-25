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

        $this->createWithDB();

    }

    /**
     * Cria categoria baseado no Model Criado
     */
    private function createWithModel()
    {
        $p = new Product();
        $p->pi = '190000477';
        $p->tamanho = 'G';
        $p->uf = 'UN';
        $p->peso_unit = 0.13;
        $p->vol_unit = 1800;
        $p->preco = 25.00;
        $p->desconto = 0.1;
        $p->pg_init = true;
        $p->name_product_id = 1;

        $p->save();

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Product ref a class Model\Product.php created');
    }

    public function createWithDB()
    {
        DB::table("products")->insert(array(
            [
                'id' => 2,
                'pi' => '190000476',
                'tamanho' => 'GG',
                'uf' => 'UN',
                'peso_unit' => 0.13,
                'vol_unit' => 1800,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 1,
            ], //2
            [
                'id' => 3,
                'pi' => '190000475',
                'tamanho' => 'M',
                'uf' => 'UN',
                'peso_unit' => 0.13,
                'vol_unit' => 1800,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 1,
            ], //3
            [
                'id' => 4,
                'pi' => '190000474',
                'tamanho' => 'P',
                'uf' => 'UN',
                'peso_unit' => 0.13,
                'vol_unit' => 1800,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 1,
            ], //4
            //tfm PR
            [
                'id' => 5,
                'pi' => '190000469',
                'tamanho' => 'G',
                'uf' => 'UN',
                'peso_unit' => 0.13,
                'vol_unit' => 1800,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 2,
            ], //5
            [
                'id' => 6,
                'pi' => '190000470',
                'tamanho' => 'GG',
                'uf' => 'UN',
                'peso_unit' => 0.13,
                'vol_unit' => 1800,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 2,
            ], //6
            [
                'id' => 7,
                'pi' => '190000468',
                'tamanho' => 'M',
                'uf' => 'UN',
                'peso_unit' => 0.13,
                'vol_unit' => 1800,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 2,
            ], //7
            [
                'id' => 8,
                'pi' => '190000467',
                'tamanho' => 'P',
                'uf' => 'UN',
                'peso_unit' => 0.13,
                'vol_unit' => 1800,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 2,
            ], //8
            //blusa MM c/pass
            [
                'id' => 9,
                'pi' => '190012278',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 3,
            ], //9
            [
                'id' => 10,
                'pi' => '190012299',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 3,
            ], //10
            [
                'id' => 11,
                'pi' => '190012279',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 3,
            ], //11
            [
                'id' => 12,
                'pi' => '190012280',
                'tamanho' => '46',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 3,
            ], //12
            [
                'id' => 13,
                'pi' => '190012281',
                'tamanho' => '48',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 3,
            ], //13
            //blusa mm s/pass
            [
                'id' => 14,
                'pi' => '190012304',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 4,
            ], //14
            [
                'id' => 15,
                'pi' => '190012305',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 4,
            ], //15
            [
                'id' => 16,
                'pi' => '190012306',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 4,
            ], //16
            [
                'id' => 17,
                'pi' => '190012307',
                'tamanho' => '46',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 4,
            ], //17
            [
                'id' => 18,
                'pi' => '190012308',
                'tamanho' => '48',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 4,
            ], //18
            //BLUSA CINZA
            [
                'id' => 19,
                'pi' => '190012320',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 5,
            ], //19
            [
                'id' => 20,
                'pi' => '190012321',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 5,
            ], //20
            [
                'id' => 21,
                'pi' => '190012322',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 5,
            ], //21
            [
                'id' => 22,
                'pi' => '190012323',
                'tamanho' => '46',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 5,
            ], //22
            [
                'id' => 23,
                'pi' => '190012324',
                'tamanho' => '48',
                'uf' => 'UN',
                'peso_unit' => 0.31,
                'vol_unit' => 2871,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 5,
            ], //23

        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "orders" ref Facade DB demo created');
    }
}
