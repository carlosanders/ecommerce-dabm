<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EstoqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate();
        $this->createWithDB();
    }
    public function createWithDB()
    {
        DB::table("stocks")->insert(array(
            [
                'id' => 1,
                'product_id' => 1,
                'qtd' => 5,
            ], //1
            [
                'id' => 2,
                'product_id' => 2,
                'qtd' => 5,
            ], //2
            [
                'id' => 3,
                'product_id' => 3,
                'qtd' => 5,
            ], //3
            [
                'id' => 4,
                'product_id' => 4,
                'qtd' => 5,
            ], //4
            [
                'id' => 5,
                'product_id' => 5,
                'qtd' => 0,
            ], //5
            [
                'id' => 6,
                'product_id' => 6,
                'qtd' => 5,
            ], //6
            [
                'id' => 7,
                'product_id' => 7,
                'qtd' => 15,
            ], //7
            [
                'id' => 8,
                'product_id' => 8,
                'qtd' => 0,
            ], //8
            //blusa
            [
                'id' => 9,
                'product_id' => 9,
                'qtd' => 5,
            ], //9
            [
                'id' => 10,
                'product_id' => 10,
                'qtd' => 0,
            ], //10
            [
                'id' => 11,
                'product_id' => 11,
                'qtd' => 0,
            ], //11
            [
                'id' => 12,
                'product_id' => 12,
                'qtd' => 5,
            ], //12
            [
                'id' => 13,
                'product_id' => 13,
                'qtd' => 0,
            ], //13
            [
                'id' => 14,
                'product_id' => 14,
                'qtd' => 5,
            ], //14
            [
                'id' => 15,
                'product_id' => 15,
                'qtd' => 10,
            ], //15
            [
                'id' => 16,
                'product_id' => 16,
                'qtd' => 0,
            ], //16
            [
                'id' => 17,
                'product_id' => 17,
                'qtd' => 5,
            ], //17
            [
                'id' => 18,
                'product_id' => 18,
                'qtd' => 5,
            ], //18
            //BLUSA CINZA
            [
                'id' => 19,
                'product_id' => 19,
                'qtd' => 0,
            ], //19
            [
                'id' => 20,
                'product_id' => 20,
                'qtd' => 0,
            ], //20
            [
                'id' => 21,
                'product_id' => 21,
                'qtd' => 0,
            ], //21
            [
                'id' => 22,
                'product_id' => 22,
                'qtd' => 0,
            ], //22
            [
                'id' => 23,
                'product_id' => 23,
                'qtd' => 0,
            ], //23
            //cinto
            [
                'id' => 24,
                'product_id' => 24,
                'qtd' => 50,
            ], //24
            [
                'id' => 25,
                'product_id' => 25,
                'qtd' => 100,
            ], //25
            //CALCA BRANCA 6 itens
            [
                'id' => 26,
                'product_id' => 26,
                'qtd' => 10,
            ], //26
            [
                'id' => 27,
                'product_id' => 27,
                'qtd' => 10,
            ], //27
            [
                'id' => 28,
                'product_id' => 28,
                'qtd' => 20,
            ], //28
            [
                'id' => 29,
                'product_id' => 29,
                'qtd' => 20,
            ], //29
            [
                'id' => 30,
                'product_id' => 30,
                'qtd' => 0,
            ], //30
            [
                'id' => 31,
                'product_id' => 31,
                'qtd' => 5,
            ], //31
            // CALCA CINZA
            [
                'id' => 32,
                'product_id' => 32,
                'qtd' => 10,
            ], //32
            [
                'id' => 33,
                'product_id' => 33,
                'qtd' => 20,
            ], //33
            [
                'id' => 34,
                'product_id' => 34,
                'qtd' => 30,
            ], //34
            [
                'id' => 35,
                'product_id' => 35,
                'qtd' => 30,
            ], //35
            [
                'id' => 36,
                'product_id' => 36,
                'qtd' => 10,
            ], //36
            [
                'id' => 37,
                'product_id' => 37,
                'qtd' => 5,
            ], //37
            //CALCA FEM CINZA
            [
                'id' => 38,
                'product_id' => 38,
                'qtd' => 5,
            ], //38
            [
                'id' => 39,
                'product_id' => 39,
                'qtd' => 5,
            ], //39
            [
                'id' => 40,
                'product_id' => 40,
                'qtd' => 5,
            ], //40
            [
                'id' => 41,
                'product_id' => 41,
                'qtd' => 5,
            ], //41
            [
                'id' => 42,
                'product_id' => 42,
                'qtd' => 0,
            ], //42
            //CALCAO AZUL OF
            [
                'id' => 43,
                'product_id' => 43,
                'qtd' => 10,
            ], //43
            [
                'id' => 44,
                'product_id' => 44,
                'qtd' => 5,
            ], //44
            [
                'id' => 45,
                'product_id' => 45,
                'qtd' => 10,
            ], //45
            [
                'id' => 46,
                'product_id' => 46,
                'qtd' => 5,
            ], //46
            //CALCAO AZUL GINASTICA PRACA
            [
                'id' => 47,
                'product_id' => 47,
                'qtd' => 20,
            ], //47
            [
                'id' => 48,
                'product_id' => 48,
                'qtd' => 10,
            ], //48
            [
                'id' => 49,
                'product_id' => 49,
                'qtd' => 20,
            ], //49
            [
                'id' => 50,
                'product_id' => 50,
                'qtd' => 15,
            ], //50
            //CALCAO NATACAO
            [
                'id' => 51,
                'product_id' => 51,
                'qtd' => 30,
            ], //51
            [
                'id' => 52,
                'product_id' => 52,
                'qtd' => 20,
            ], //52
            [
                'id' => 53,
                'product_id' => 53,
                'qtd' => 30,
            ], //53
            [
                'id' => 54,
                'product_id' => 54,
                'qtd' => 10,
            ], //54
            //CAMISA BRANCA M/M C/PASS
            [
                'id' => 55,
                'product_id' => 55,
                'qtd' => 10,
            ], //55
            [
                'id' => 56,
                'product_id' => 56,
                'qtd' => 10,
            ], //56
            [
                'id' => 57,
                'product_id' => 57,
                'qtd' => 10,
            ], //57
            [
                'id' => 58,
                'product_id' => 58,
                'qtd' => 5,
            ], //58
            //###############################################################            
            [
                'id' => 59,
                'product_id' => 59,
                'qtd' => 10,
            ], //59
            [
                'id' => 60,
                'product_id' => 60,
                'qtd' => 30,
            ], //60
            [
                'id' => 61,
                'product_id' => 61,
                'qtd' => 30,
            ], //61
            [
                'id' => 62,
                'product_id' => 62,
                'qtd' => 5,
            ], //62      
            //###############################################################   
            [
                'id' => 63,
                'product_id' => 63,
                'qtd' => 10,
            ], //63    
            [
                'id' => 64,
                'product_id' => 64,
                'qtd' => 40,
            ], //64  
            [
                'id' => 65,
                'product_id' => 65,
                'qtd' => 30,
            ], //65 
            [
                'id' => 66,
                'product_id' => 66,
                'qtd' => 15,
            ], //66             
            //###############################################################     
            [
                'id' => 67,
                'product_id' => 67,
                'qtd' => 30,
            ], //67    
            [
                'id' => 68,
                'product_id' => 68,
                'qtd' => 20,
            ], //68    
            [
                'id' => 69,
                'product_id' => 69,
                'qtd' => 60,
            ], //69   
            [
                'id' => 70,
                'product_id' => 70,
                'qtd' => 15,
            ], //70                                                    
            //###############################################################  
            [
                'id' => 71,
                'product_id' => 71,
                'qtd' => 30,
            ], //71   
            [
                'id' => 72,
                'product_id' => 72,
                'qtd' => 20,
            ], //72  
            [
                'id' => 73,
                'product_id' => 73,
                'qtd' => 70,
            ], //73  
            [
                'id' => 74,
                'product_id' => 74,
                'qtd' => 40,
            ], //74                          
            //###############################################################  
            [
                'id' => 75,
                'product_id' => 75,
                'qtd' => 100,
            ], //75                         
            //###############################################################     
            [
                'id' => 76,
                'product_id' => 76,
                'qtd' => 20,
            ], //76                         
            [
                'id' => 77,
                'product_id' => 77,
                'qtd' => 20,
            ], //77
            [
                'id' => 78,
                'product_id' => 78,
                'qtd' => 10,
            ], //78
            [
                'id' => 79,
                'product_id' => 79,
                'qtd' => 10,
            ], //79                                    
            //###############################################################             
            [
                'id' => 80,
                'product_id' => 80,
                'qtd' => 10,
            ], //80
            [
                'id' => 81,
                'product_id' => 81,
                'qtd' => 20,
            ], //81
            [
                'id' => 82,
                'product_id' => 82,
                'qtd' => 10,
            ], //82                                                            
            //###############################################################     
            [
                'id' => 83,
                'product_id' => 83,
                'qtd' => 100,
            ], //83                                                            
            //############################################################### 
            [
                'id' => 84,
                'product_id' => 84,
                'qtd' => 100,
            ], //84                                                            
            //###############################################################   
            [
                'id' => 85,
                'product_id' => 85,
                'qtd' => 100,
            ], //85                                                            
            //###############################################################       
            [
                'id' => 86,
                'product_id' => 86,
                'qtd' => 5,
            ], //86   
            [
                'id' => 87,
                'product_id' => 87,
                'qtd' => 0,
            ], //87 
            [
                'id' => 88,
                'product_id' => 88,
                'qtd' => 0,
            ], //88 
            [
                'id' => 89,
                'product_id' => 89,
                'qtd' => 0,
            ], //89                                                                                              
            //###############################################################     
            [
                'id' => 90,
                'product_id' => 90,
                'qtd' => 0,
            ], //90        
            [
                'id' => 91,
                'product_id' => 91,
                'qtd' => 0,
            ], //91    
            [
                'id' => 92,
                'product_id' => 92,
                'qtd' => 0,
            ], //92    
            [
                'id' => 93,
                'product_id' => 93,
                'qtd' => 0,
            ], //93                                                                                                                        //###############################################################     
            [
                'id' => 94,
                'product_id' => 94,
                'qtd' => 5,
            ], //94                                                                                                                        
            [
                'id' => 95,
                'product_id' => 95,
                'qtd' => 10,
            ], //95
            [
                'id' => 96,
                'product_id' => 96,
                'qtd' => 10,
            ], //96
            [
                'id' => 97,
                'product_id' => 97,
                'qtd' => 5,
            ], //97
            [
                'id' => 98,
                'product_id' => 98,
                'qtd' => 5,
            ], //98                        
            //###############################################################     
            [
                'id' => 99,
                'product_id' => 99,
                'qtd' => 0,
            ], //99       
            [
                'id' => 100,
                'product_id' => 100,
                'qtd' => 0,
            ], //100
            [
                'id' => 101,
                'product_id' => 101,
                'qtd' => 5,
            ], //101
            [
                'id' => 102,
                'product_id' => 102,
                'qtd' => 5,
            ], //102
            [
                'id' => 103,
                'product_id' => 103,
                'qtd' => 5,
            ], //103                                                                 
            //###############################################################
            [
                'id' => 104,
                'product_id' => 104,
                'qtd' => 5,
            ], //104                
            [
                'id' => 105,
                'product_id' => 105,
                'qtd' => 5,
            ], //105   
            [
                'id' => 106,
                'product_id' => 106,
                'qtd' => 5,
            ], //106   
            [
                'id' => 107,
                'product_id' => 107,
                'qtd' => 5,
            ], //107   
            [
                'id' => 108,
                'product_id' => 108,
                'qtd' => 5,
            ], //108   
            [
                'id' => 109,
                'product_id' => 109,
                'qtd' => 5,
            ], //109                                                                                                
            //###############################################################           
            [
                'id' => 110,
                'product_id' => 110,
                'qtd' => 5,
            ], //110  
            [
                'id' => 111,
                'product_id' => 111,
                'qtd' => 5,
            ], //111  
            [
                'id' => 112,
                'product_id' => 112,
                'qtd' => 5,
            ], //112  
            [
                'id' => 113,
                'product_id' => 113,
                'qtd' => 5,
            ], //113                                                                                                                       //###############################################################                                                              
            [
                'id' => 114,
                'product_id' => 114,
                'qtd' => 5,
            ], //114                                                                                                                       
            [
                'id' => 115,
                'product_id' => 115,
                'qtd' => 5,
            ], //115      
            [
                'id' => 116,
                'product_id' => 116,
                'qtd' => 5,
            ], //116      
            [
                'id' => 117,
                'product_id' => 117,
                'qtd' => 5,
            ], //117      
            [
                'id' => 118,
                'product_id' => 118,
                'qtd' => 5,
            ], //118      
            [
                'id' => 119,
                'product_id' => 119,
                'qtd' => 5,
            ], //119      
            //###############################################################                        
        ));
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "stocks" ref Facade DB demo created');
    }
}