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
            //cinto
            [
                'id' => 24,
                'pi' => '190017304',
                'tamanho' => 'Cortado',
                'uf' => 'UN',
                'peso_unit' => 0.07,
                'vol_unit' => 10.5,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 6,
            ], //24
            [
                'id' => 25,
                'pi' => '190017021',
                'tamanho' => 'Cortado',
                'uf' => 'UN',
                'peso_unit' => 0.07,
                'vol_unit' => 10.5,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 7,
            ], //25
            //CALCA BRANCA 6 itens
            [
                'id' => 26,
                'pi' => '190012435',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 8,
            ], //26
            [
                'id' => 27,
                'pi' => '190012436',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 8,
            ], //27
            [
                'id' => 28,
                'pi' => '190012437',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 8,
            ], //28
            [
                'id' => 29,
                'pi' => '190012438',
                'tamanho' => '46',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 8,
            ], //29
            [
                'id' => 30,
                'pi' => '190012439',
                'tamanho' => '48',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 8,
            ], //30
            [
                'id' => 31,
                'pi' => '190012440',
                'tamanho' => '50',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 8,
            ], //31
            // CALCA CINZA
            [
                'id' => 32,
                'pi' => '190018341',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 9,
            ], //32
            [
                'id' => 33,
                'pi' => '190018342',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 9,
            ], //33
            [
                'id' => 34,
                'pi' => '190018343',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 9,
            ], //34
            [
                'id' => 35,
                'pi' => '190018345',
                'tamanho' => '46',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 9,
            ], //35
            [
                'id' => 36,
                'pi' => '190018347',
                'tamanho' => '48',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 9,
            ], //36
            [
                'id' => 37,
                'pi' => '190018348',
                'tamanho' => '50',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 9,
            ], //37
            //CALCA FEM CINZA
            [
                'id' => 38,
                'pi' => '190020511',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 10,
            ], //38
            [
                'id' => 39,
                'pi' => '190012193',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 10,
            ], //39
            [
                'id' => 40,
                'pi' => '190012195',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 10,
            ], //40
            [
                'id' => 41,
                'pi' => '190012196',
                'tamanho' => '46',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 10,
            ], //41
            [
                'id' => 42,
                'pi' => '190012197',
                'tamanho' => '48',
                'uf' => 'UN',
                'peso_unit' => 0.484,
                'vol_unit' => 5752.8,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 10,
            ], //42
            //CALCAO AZUL OF
            [
                'id' => 43,
                'pi' => '190007984',
                'tamanho' => 'G',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 11,
            ], //43
            [
                'id' => 44,
                'pi' => '190007985',
                'tamanho' => 'GG',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 11,
            ], //44
            [
                'id' => 45,
                'pi' => '190007983',
                'tamanho' => 'M',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 11,
            ], //45
            [
                'id' => 46,
                'pi' => '190007982',
                'tamanho' => 'P',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 11,
            ], //46
            //CALCAO AZUL GINASTICA PRACA
            [
                'id' => 47,
                'pi' => '190007977',
                'tamanho' => 'G',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 12,
            ], //47
            [
                'id' => 48,
                'pi' => '190007976',
                'tamanho' => 'GG',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 12,
            ], //48
            [
                'id' => 49,
                'pi' => '190007978',
                'tamanho' => 'M',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 12,
            ], //49
            [
                'id' => 50,
                'pi' => '190007979',
                'tamanho' => 'P',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 12,
            ], //50
            //CALCAO NATACAO
            [
                'id' => 51,
                'pi' => '190011896',
                'tamanho' => 'G',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 13,
            ], //51
            [
                'id' => 52,
                'pi' => '190017046',
                'tamanho' => 'GG',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 13,
            ], //52
            [
                'id' => 53,
                'pi' => '190011897',
                'tamanho' => 'M',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 13,
            ], //53
            [
                'id' => 54,
                'pi' => '190011901',
                'tamanho' => 'P',
                'uf' => 'UN',
                'peso_unit' => 0.085,
                'vol_unit' => 1520,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 13,
            ], //54
            //CAMISA BRANCA M/M C/PASS
            [
                'id' => 55,
                'pi' => '190012283',
                'tamanho' => '1',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 14,
            ], //55
            [
                'id' => 56,
                'pi' => '190012284',
                'tamanho' => '2',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 14,
            ], //56
            [
                'id' => 57,
                'pi' => '190012285',
                'tamanho' => '3',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 14,
            ], //57
            [
                'id' => 58,
                'pi' => '190012286',
                'tamanho' => '4',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 14,
            ], //58

        ));

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "orders" ref Facade DB demo created');
    }
}
