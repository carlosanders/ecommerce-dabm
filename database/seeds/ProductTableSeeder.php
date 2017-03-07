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
        $rs = DB::table("products")->insert(array(
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
            ],
            //2
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
            ],
            //3
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
            ],
            //4
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
            ],
            //5
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
            ],
            //6
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
            ],
            //7
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
            ],
            //8
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
            ],
            //9
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
            ],
            //10
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
            ],
            //11
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
            ],
            //12
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
            ],
            //13
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
            ],
            //14
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
            ],
            //15
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
            ],
            //16
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
            ],
            //17
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
            ],
            //18
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
            ],
            //19
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
            ],
            //20
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
            ],
            //21
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
            ],
            //22
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
            ],
            //23
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
            ],
            //24
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
            ],
            //25
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
            ],
            //26
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
            ],
            //27
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
            ],
            //28
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
            ],
            //29
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
            ],
            //30
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
            ],
            //31
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
            ],
            //32
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
            ],
            //33
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
            ],
            //34
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
            ],
            //35
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
            ],
            //36
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
            ],
            //37
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
            ],
            //38
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
            ],
            //39
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
            ],
            //40
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
            ],
            //41
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
            ],
            //42
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
            ],
            //43
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
            ],
            //44
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
            ],
            //45
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
            ],
            //46
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
            ],
            //47
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
            ],
            //48
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
            ],
            //49
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
            ],
            //50
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
            ],
            //51
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
            ],
            //52
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
            ],
            //53
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
            ],
            //54
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
            ],
            //55
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
            ],
            //56
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
            ],
            //57
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
            ],
            //58
            //###############################################################
            [
                'id' => 59,
                'pi' => '190012296',
                'tamanho' => '1',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 15,
            ],
            //59
            [
                'id' => 60,
                'pi' => '190012290',
                'tamanho' => '2',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 15,
            ],
            //59
            [
                'id' => 61,
                'pi' => '190012291',
                'tamanho' => '3',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 15,
            ],
            //61
            [
                'id' => 62,
                'pi' => '190012292',
                'tamanho' => '4',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 15,
            ],
            //62
            //###############################################################
            [
                'id' => 63,
                'pi' => '190012311',
                'tamanho' => '1',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 16,
            ],
            //63
            [
                'id' => 64,
                'pi' => '190012312',
                'tamanho' => '2',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 16,
            ],
            //64
            [
                'id' => 65,
                'pi' => '190012313',
                'tamanho' => '3',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 16,
            ],
            //65
            [
                'id' => 66,
                'pi' => '190012314',
                'tamanho' => '4',
                'uf' => 'UN',
                'peso_unit' => 0.29,
                'vol_unit' => 2835,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 16,
            ],
            //66
            //###############################################################
            [
                'id' => 67,
                'pi' => '190008033',
                'tamanho' => 'G',
                'uf' => 'UN',
                'peso_unit' => 0.14,
                'vol_unit' => 1863,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 17,
            ],
            //67
            [
                'id' => 68,
                'pi' => '190008032',
                'tamanho' => 'GG',
                'uf' => 'UN',
                'peso_unit' => 0.14,
                'vol_unit' => 1863,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 17,
            ],
            //68
            [
                'id' => 69,
                'pi' => '190008034',
                'tamanho' => 'M',
                'uf' => 'UN',
                'peso_unit' => 0.14,
                'vol_unit' => 1863,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 17,
            ],
            //69
            [
                'id' => 70,
                'pi' => '190005023',
                'tamanho' => 'P',
                'uf' => 'UN',
                'peso_unit' => 0.14,
                'vol_unit' => 1863,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 17,
            ],
            //70
            //###############################################################
            [
                'id' => 71,
                'pi' => '190007972',
                'tamanho' => 'G',
                'uf' => 'UN',
                'peso_unit' => 0.14,
                'vol_unit' => 1863,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 18,
            ],
            //71
            [
                'id' => 72,
                'pi' => '190007973',
                'tamanho' => 'GG',
                'uf' => 'UN',
                'peso_unit' => 0.14,
                'vol_unit' => 1863,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 18,
            ],
            //72
            [
                'id' => 73,
                'pi' => '190007974',
                'tamanho' => 'M',
                'uf' => 'UN',
                'peso_unit' => 0.14,
                'vol_unit' => 1863,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 18,
            ],
            //73
            [
                'id' => 74,
                'pi' => '190005020',
                'tamanho' => 'P',
                'uf' => 'UN',
                'peso_unit' => 0.14,
                'vol_unit' => 1863,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 18,
            ],
            //74
            //###############################################################
            [
                'id' => 75,
                'pi' => '190016676',
                'tamanho' => '',
                'uf' => 'UN',
                'peso_unit' => 0.02,
                'vol_unit' => 99,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 19,
            ],
            //75
            //###############################################################
            [
                'id' => 76,
                'pi' => '190017909',
                'tamanho' => '56',
                'uf' => 'UN',
                'peso_unit' => 0.07,
                'vol_unit' => 2304,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 20,
            ],
            //76
            [
                'id' => 77,
                'pi' => '190018335',
                'tamanho' => '57',
                'uf' => 'UN',
                'peso_unit' => 0.07,
                'vol_unit' => 2304,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 20,
            ],
            //77
            [
                'id' => 78,
                'pi' => '190017910',
                'tamanho' => '58',
                'uf' => 'UN',
                'peso_unit' => 0.07,
                'vol_unit' => 2304,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 20,
            ],
            //78
            [
                'id' => 79,
                'pi' => '190018336',
                'tamanho' => '59',
                'uf' => 'UN',
                'peso_unit' => 0.07,
                'vol_unit' => 2304,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 20,
            ],
            //79
            //###############################################################
            [
                'id' => 80,
                'pi' => '190011360',
                'tamanho' => 'G',
                'uf' => 'UN',
                'peso_unit' => 0.15,
                'vol_unit' => 1596,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 21,
            ],
            //80
            [
                'id' => 81,
                'pi' => '190011359',
                'tamanho' => 'M',
                'uf' => 'UN',
                'peso_unit' => 0.15,
                'vol_unit' => 1596,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 21,
            ],
            //81
            [
                'id' => 82,
                'pi' => '190011358',
                'tamanho' => 'P',
                'uf' => 'UN',
                'peso_unit' => 0.15,
                'vol_unit' => 1596,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 21,
            ],
            //82
            //###############################################################
            [
                'id' => 83,
                'pi' => '190005017',
                'tamanho' => '',
                'uf' => 'UN',
                'peso_unit' => 0.02,
                'vol_unit' => 286,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 22,
            ],
            //83
            //###############################################################
            [
                'id' => 84,
                'pi' => '190005019',
                'tamanho' => '',
                'uf' => 'UN',
                'peso_unit' => 0.02,
                'vol_unit' => 286,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 23,
            ],
            //84
            //###############################################################
            [
                'id' => 85,
                'pi' => '190008029',
                'tamanho' => '',
                'uf' => 'UN',
                'peso_unit' => 0.02,
                'vol_unit' => 286,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 24,
            ],
            //85
            //###############################################################
            [
                'id' => 86,
                'pi' => '190014589',
                'tamanho' => '36',
                'uf' => 'UN',
                'peso_unit' => 0.64,
                'vol_unit' => 5632,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 25,
            ],
            //86
            [
                'id' => 87,
                'pi' => '190014590',
                'tamanho' => '37',
                'uf' => 'UN',
                'peso_unit' => 0.64,
                'vol_unit' => 5632,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 25,
            ],
            //87
            [
                'id' => 88,
                'pi' => '190014591',
                'tamanho' => '38',
                'uf' => 'UN',
                'peso_unit' => 0.64,
                'vol_unit' => 5632,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 25,
            ],
            //88
            [
                'id' => 89,
                'pi' => '190014592',
                'tamanho' => '39',
                'uf' => 'UN',
                'peso_unit' => 0.64,
                'vol_unit' => 5632,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 25,
            ],
            //89
            //###############################################################
            [
                'id' => 90,
                'pi' => '190014609',
                'tamanho' => '36',
                'uf' => 'UN',
                'peso_unit' => 0.64,
                'vol_unit' => 5632,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 26,
            ],
            //90
            [
                'id' => 91,
                'pi' => '190014610',
                'tamanho' => '37',
                'uf' => 'UN',
                'peso_unit' => 0.64,
                'vol_unit' => 5632,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 26,
            ],
            //91
            [
                'id' => 92,
                'pi' => '190014611',
                'tamanho' => '38',
                'uf' => 'UN',
                'peso_unit' => 0.64,
                'vol_unit' => 5632,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 26,
            ],
            //92
            [
                'id' => 93,
                'pi' => '190014612',
                'tamanho' => '39',
                'uf' => 'UN',
                'peso_unit' => 0.64,
                'vol_unit' => 5632,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 26,
            ],
            //93
            //###############################################################
            [
                'id' => 94,
                'pi' => '190012417',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 27,
            ],
            //94
            [
                'id' => 95,
                'pi' => '190012418',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 27,
            ],
            //95
            [
                'id' => 96,
                'pi' => '190012419',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 27,
            ],
            //96
            [
                'id' => 97,
                'pi' => '190012420',
                'tamanho' => '46',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 27,
            ],
            //97
            [
                'id' => 98,
                'pi' => '190012421',
                'tamanho' => '48',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 27,
            ],
            //98
            //###############################################################
            [
                'id' => 99,
                'pi' => '190018352',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 28,
            ],
            //99
            [
                'id' => 100,
                'pi' => '190018353',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 28,
            ],
            //100
            [
                'id' => 101,
                'pi' => '190018354',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 28,
            ],
            //101
            [
                'id' => 102,
                'pi' => '190018356',
                'tamanho' => '46',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 28,
            ],
            //102
            [
                'id' => 103,
                'pi' => '190018355',
                'tamanho' => '48',
                'uf' => 'UN',
                'peso_unit' => 0.34,
                'vol_unit' => 5670,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 28,
            ],
            //103                                                                                                                      //###############################################################
            [
                'id' => 104,
                'pi' => '190000117',
                'tamanho' => '39',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 29,
            ],
            //104
            [
                'id' => 105,
                'pi' => '190000118',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 29,
            ],
            //105
            [
                'id' => 106,
                'pi' => '190000119',
                'tamanho' => '41',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 29,
            ],
            //106
            [
                'id' => 107,
                'pi' => '190000120',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 29,
            ],
            //107
            [
                'id' => 108,
                'pi' => '190000121',
                'tamanho' => '43',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 29,
            ],
            //108
            [
                'id' => 109,
                'pi' => '190000122',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 29,
            ],
            //109
            //###############################################################
            [
                'id' => 110,
                'pi' => '190045407',
                'tamanho' => '36',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 30,
            ],
            //110
            [
                'id' => 111,
                'pi' => '190045408',
                'tamanho' => '37',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 30,
            ],
            //111
            [
                'id' => 112,
                'pi' => '190045409',
                'tamanho' => '38',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 30,
            ],
            //112
            [
                'id' => 113,
                'pi' => '190045410',
                'tamanho' => '39',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 30,
            ],
            //113
            //###############################################################
            [
                'id' => 114,
                'pi' => '190000126',
                'tamanho' => '39',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 31,
            ],
            //114
            [
                'id' => 115,
                'pi' => '190000127',
                'tamanho' => '40',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 31,
            ],
            //115
            [
                'id' => 116,
                'pi' => '190000128',
                'tamanho' => '41',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 31,
            ],
            //116
            [
                'id' => 117,
                'pi' => '190000129',
                'tamanho' => '42',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 31,
            ],
            //117
            [
                'id' => 118,
                'pi' => '190000130',
                'tamanho' => '43',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 31,
            ],
            //118
            [
                'id' => 119,
                'pi' => '190000131',
                'tamanho' => '44',
                'uf' => 'UN',
                'peso_unit' => 1.15,
                'vol_unit' => 8840,
                'preco' => 10,
                'desconto' => 0,
                'name_product_id' => 31,
            ],
            //119                                                                                                                      //###############################################################
        ));

        if ($rs) {
            $rowId = DB::connection()->getPdo()->lastInsertId();
        }

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "Products" ref Facade DB demo created - count: '.$rowId);
    }
}
