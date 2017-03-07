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
            [
                'id' => 6,
                'nome_item' => title_case('CADARCO BRANCO PARA CINTO'),
                'slug' => str_slug('CADARCO BRANCO PARA CINTO'),
            ], //6
            [
                'id' => 7,
                'nome_item' => title_case('CADARCO PRETO PARA CINTO'),
                'slug' => str_slug('CADARCO PRETO PARA CINTO'),
            ], //7
            [
                'id' => 8,
                'nome_item' => title_case('CALCA BRANCA'),
                'slug' => str_slug('CALCA BRANCA'),
            ], //8
            [
                'id' => 9,
                'nome_item' => title_case('CALCA CINZA'),
                'slug' => str_slug('CALCA CINZA'),
            ], //9
            [
                'id' => 10,
                'nome_item' => title_case('CALCA FEM CINZA'),
                'slug' => str_slug('CALCA FEM CINZA'),
            ], //10
            [
                'id' => 11,
                'nome_item' => title_case('CALCAO AZUL GINASTICA OFICIAL'),
                'slug' => str_slug('CALCAO AZUL GINASTICA OFICIAL'),
            ], //11
            [
                'id' => 12,
                'nome_item' => title_case('CALCAO AZUL GINASTICA PRACA'),
                'slug' => str_slug('CALCAO AZUL GINASTICA PRACA'),
            ], //12
            [
                'id' => 13,
                'nome_item' => title_case('CALCAO NATACAO'),
                'slug' => str_slug('CALCAO NATACAO'),
            ], //13
            [
                'id' => 14,
                'nome_item' => title_case('CAMISA BRANCA M/M C/PASS'),
                'slug' => str_slug('CAMISA BRANCA M/M C/PASS'),
            ], //14
            [
                'id' => 15,
                'nome_item' => title_case('CAMISA BRANCA M/M S/PASS'),
                'slug' => str_slug('CAMISA BRANCA M/M S/PASS'),
            ], //15    
            [
                'id' => 16,
                'nome_item' => title_case('CAMISA CINZA M/M'),
                'slug' => str_slug('CAMISA CINZA M/M'),
            ], //16 
            [
                'id' => 17,
                'nome_item' => title_case('CAMISETA BRANCA GINASTICA'),
                'slug' => str_slug('CAMISETA BRANCA GINASTICA'),
            ], //17     
            [
                'id' => 18,
                'nome_item' => title_case('CAMISETA BRANCA'),
                'slug' => str_slug('CAMISETA BRANCA'),
            ], //18         
            [
                'id' => 19,
                'nome_item' => title_case('FIVELA PARA CINTO'),
                'slug' => str_slug('FIVELA PARA CINTO'),
            ], //19    
            [
                'id' => 20,
                'nome_item' => title_case('GORRO CINZA'),
                'slug' => str_slug('GORRO CINZA'),
            ], //20    
            [
                'id' => 21,
                'nome_item' => title_case('MAIO PRETO'),
                'slug' => str_slug('MAIO PRETO'),
            ], //21
            [
                'id' => 22,
                'nome_item' => title_case('MEIA BRANCA'),
                'slug' => str_slug('MEIA BRANCA'),
            ], //22
            [
                'id' => 23,
                'nome_item' => title_case('MEIA BRANCA ALGODAO'),
                'slug' => str_slug('MEIA BRANCA ALGODAO'),
            ], //23
            [
                'id' => 24,
                'nome_item' => title_case('MEIA PRETA'),
                'slug' => str_slug('MEIA PRETA'),
            ], //24        
            [
                'id' => 25,
                'nome_item' => title_case('MOCASSIM FEM BRANCO S/MEDIO'),
                'slug' => str_slug('MOCASSIM FEM BRANCO S/MEDIO'),
            ], //25      
            [
                'id' => 26,
                'nome_item' => title_case('MOCASSIM FEM PRETO S/MEDIO'),
                'slug' => str_slug('MOCASSIM FEM PRETO S/MEDIO'),
            ], //26  
            [
                'id' => 27,
                'nome_item' => title_case('SAIA BRANCA'),
                'slug' => str_slug('SAIA BRANCA'),
            ], //27    
            [
                'id' => 28,
                'nome_item' => title_case('SAIA CINZA'),
                'slug' => str_slug('SAIA CINZA'),
            ], //28  
            [
                'id' => 29,
                'nome_item' => title_case('SAPATO BRANCO'),
                'slug' => str_slug('SAPATO BRANCO'),
            ], //29                                                           
            [
                'id' => 30,
                'nome_item' => title_case('SAPATO FEM BRANCO S/MEDIO'),
                'slug' => str_slug('SAPATO FEM BRANCO S/MEDIO'),
            ], //30  
            [
                'id' => 31,
                'nome_item' => title_case('SAPATO PRETO'),
                'slug' => str_slug('SAPATO PRETO'),
            ], //31 
         ));
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "names_products" ref Facade DB demo created');
    }
}