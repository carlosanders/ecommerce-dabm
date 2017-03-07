<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->truncate();
        $this->createWithDB();
    }
    public function createWithDB()
    {
        DB::table("images")->insert(array(
            [
                'product_id' => 1,
                'image_path' => '8.JPG',
            ], //1
            [
                'product_id' => 2,
                'image_path' => '8.JPG',
            ], //2
            [
                'product_id' => 3,
                'image_path' => '8.JPG',
            ], //3
            [
                'product_id' => 4,
                'image_path' => '8.JPG',
            ], //4
            //tfm praca
            [
                'product_id' => 5,
                'image_path' => '199.JPG',
            ], //5
            [
                'product_id' => 6,
                'image_path' => '199.JPG',
            ], //6
            [
                'product_id' => 7,
                'image_path' => '199.JPG',
            ], //7
            [
                'product_id' => 8,
                'image_path' => '199.JPG',
            ], //8
            //blusa
            [
                'product_id' => 9,
                'image_path' => '201.JPG',
            ], //9
            [
                'product_id' => 10,
                'image_path' => '201.JPG',
            ], //10
            [
                'product_id' => 11,
                'image_path' => '201.JPG',
            ], //11
            [
                'product_id' => 12,
                'image_path' => '201.JPG',
            ], //12
            [
                'product_id' => 13,
                'image_path' => '201.JPG',
            ], //13
            [
                'product_id' => 14,
                'image_path' => '201.JPG',
            ], //14
            [
                'product_id' => 15,
                'image_path' => '201.JPG',
            ], //15
            [
                'product_id' => 16,
                'image_path' => '201.JPG',
            ], //16
            [
                'product_id' => 17,
                'image_path' => '201.JPG',
            ], //17
            [
                'product_id' => 18,
                'image_path' => '201.JPG',
            ], //18
            //BLUSA CINZA
            [
                'product_id' => 19,
                'image_path' => '202.JPG',
            ], //19
            [
                'product_id' => 20,
                'image_path' => '202.JPG',
            ], //20
            [
                'product_id' => 21,
                'image_path' => '202.JPG',
            ], //21
            [
                'product_id' => 21,
                'image_path' => '202.JPG',
            ], //21
            [
                'product_id' => 22,
                'image_path' => '202.JPG',
            ], //22
            [
                'product_id' => 22,
                'image_path' => '202.JPG',
            ], //22
            [
                'product_id' => 23,
                'image_path' => '202.JPG',
            ], //23
            //cinto
            [
                'product_id' => 24,
                'image_path' => '51.JPG',
            ], //244
            [
                'product_id' => 23,
                'image_path' => '250.JPG',
            ], //23
            //CALCA BRANCA 6 itens
            [
                'product_id' => 24,
                'image_path' => '230.9.JPG',
            ], //24
            [
                'product_id' => 25,
                'image_path' => '231.JPG',
            ], //25
            [
                'product_id' => 26,
                'image_path' => '231.JPG',
            ], //26
            [
                'product_id' => 26,
                'image_path' => '231.JPG',
            ], //26
            [
                'product_id' => 27,
                'image_path' => '231.JPG',
            ], //27
            [
                'product_id' => 28,
                'image_path' => '231.JPG',
            ], //28
            [
                'product_id' => 29,
                'image_path' => '231.JPG',
            ], //29
            [
                'product_id' => 30,
                'image_path' => '231.JPG',
            ], //30
            [
                'product_id' => 31,
                'image_path' => '231.JPG',
            ], //31
            // CALCA CINZA
            [
                'product_id' => 32,
                'image_path' => '233.JPG',
            ], //32
            [
                'product_id' => 33,
                'image_path' => '233.JPG',
            ], //33
            [
                'product_id' => 34,
                'image_path' => '233.JPG',
            ], //34
            [
                'product_id' => 35,
                'image_path' => '233.JPG',
            ], //35
            [
                'product_id' => 36,
                'image_path' => '233.JPG',
            ], //36
            [
                'product_id' => 37,
                'image_path' => '233.JPG',
            ], //37
            //CALCA FEM CINZA
            [
                'product_id' => 38,
                'image_path' => '236.JPG',
            ], //38
            [
                'product_id' => 39,
                'image_path' => '236.JPG',
            ], //39
            [
                'product_id' => 40,
                'image_path' => '236.JPG',
            ], //40
            [
                'product_id' => 41,
                'image_path' => '236.JPG',
            ], //41
            [
                'product_id' => 42,
                'image_path' => '236.JPG',
            ], //42
            //CALCAO AZUL OF
            [
                'product_id' => 43,
                'image_path' => '32.JPG',
            ], //43
            [
                'product_id' => 44,
                'image_path' => '32.JPG',
            ], //44
            [
                'product_id' => 45,
                'image_path' => '32.JPG',
            ], //45
            [
                'product_id' => 46,
                'image_path' => '32.JPG',
            ], //46
            //CALCAO AZUL GINASTICA PRACA
            [
                'product_id' => 47,
                'image_path' => '241.JPG',
            ], //47
            [
                'product_id' => 48,
                'image_path' => '241.JPG',
            ], //48
            [
                'product_id' => 49,
                'image_path' => '241.JPG',
            ], //49
            [
                'product_id' => 50,
                'image_path' => '241.JPG',
            ], //50
            //CALCAO NATACAO
            [
                'product_id' => 51,
                'image_path' => '33.JPG',
            ], //51
            [
                'product_id' => 52,
                'image_path' => '33.JPG',
            ], //52
            [
                'product_id' => 53,
                'image_path' => '33.JPG',
            ], //53
            [
                'product_id' => 54,
                'image_path' => '33.JPG',
            ], //54
            //CAMISA BRANCA M/M C/PASS
            [
                'product_id' => 55,
                'image_path' => '245.JPG',
            ], //55
            [
                'product_id' => 56,
                'image_path' => '245.JPG',
            ], //56
            [
                'product_id' => 57,
                'image_path' => '245.JPG',
            ], //57
            [
                'product_id' => 58,
                'image_path' => '245.JPG',
            ], //58
            //###############################################################                        
            [
                'product_id' => 59,
                'image_path' => '245.JPG',
            ], //59     
            [
                'product_id' => 60,
                'image_path' => '245.JPG',
            ], //60            
            [
                'product_id' => 61,
                'image_path' => '245.JPG',
            ], //61            
            [
                'product_id' => 62,
                'image_path' => '245.JPG',
            ], //62                                                       
            //###############################################################  
            [
                'product_id' => 63,
                'image_path' => '246.JPG',
            ], //63   
            [
                'product_id' => 64,
                'image_path' => '246.JPG',
            ], //64  
            [
                'product_id' => 65,
                'image_path' => '246.JPG',
            ], //65  
            [
                'product_id' => 66,
                'image_path' => '246.JPG',
            ], //66                                      
            //###############################################################      
            [
                'product_id' => 67,
                'image_path' => '42.JPG',
            ], //67    
            [
                'product_id' => 68,
                'image_path' => '42.JPG',
            ], //68
            [
                'product_id' => 69,
                'image_path' => '42.JPG',
            ], //69  
            [
                'product_id' => 70,
                'image_path' => '42.JPG',
            ], //70                                                         
            //###############################################################              
            [
                'product_id' => 71,
                'image_path' => '247.JPG',
            ], //71 
            [
                'product_id' => 72,
                'image_path' => '247.JPG',
            ], //72 
            [
                'product_id' => 73,
                'image_path' => '247.JPG',
            ], //73 
            [
                'product_id' => 74,
                'image_path' => '247.JPG',
            ], //74             
            //###############################################################                 
            [
                'product_id' => 75,
                'image_path' => '248.JPG',
            ], //75               
            //###############################################################        
            [
                'product_id' => 76,
                'image_path' => '256.JPG',
            ], //76  
            [
                'product_id' => 77,
                'image_path' => '256.JPG',
            ], //77  
            [
                'product_id' => 78,
                'image_path' => '256.JPG',
            ], //78  
            [
                'product_id' => 79,
                'image_path' => '256.JPG',
            ], //79                                                   
            //###############################################################      
            [
                'product_id' => 80,
                'image_path' => '257.JPG',
            ], //80    
            [
                'product_id' => 81,
                'image_path' => '257.JPG',
            ], //81    
            [
                'product_id' => 82,
                'image_path' => '257.JPG',
            ], //82                                                                           
            //###############################################################     
            [
                'product_id' => 83,
                'image_path' => '188.JPG',
            ], //83                                                                           
            //############################################################### 
            [
                'product_id' => 84,
                'image_path' => '187.JPG',
            ], //84                                                                           
            //############################################################### 
            [
                'product_id' => 85,
                'image_path' => '290.JPG',
            ], //85                                                                           
            //##############################################################  
            [
                'product_id' => 86,
                'image_path' => '300.JPG',
            ], //86          
            [
                'product_id' => 87,
                'image_path' => '300.JPG',
            ], //87          
            [
                'product_id' => 88,
                'image_path' => '300.JPG',
            ], //88          
            [
                'product_id' => 89,
                'image_path' => '300.JPG',
            ], //89                                                                                                               
            //############################################################## 
            [
                'product_id' => 90,
                'image_path' => '102.JPG',
            ], //90        
            [
                'product_id' => 91,
                'image_path' => '102.JPG',
            ], //91      
            [
                'product_id' => 92,
                'image_path' => '102.JPG',
            ], //92      
            [
                'product_id' => 93,
                'image_path' => '102.JPG',
            ], //93                                                                                                                        //##############################################################    
            [
                'product_id' => 94,
                'image_path' => '268.JPG',
            ], //94                                                                                                                        
            [
                'product_id' => 95,
                'image_path' => '268.JPG',
            ], //95                 
            [
                'product_id' => 96,
                'image_path' => '268.JPG',
            ], //96                 
            [
                'product_id' => 97,
                'image_path' => '268.JPG',
            ], //97                 
            [
                'product_id' => 98,
                'image_path' => '268.JPG',
            ], //98                             
            //##############################################################       
            [
                'product_id' => 99,
                'image_path' => '270.JPG',
            ], //99                             
            [
                'product_id' => 100,
                'image_path' => '270.JPG',
            ], //101                                         
            [
                'product_id' => 101,
                'image_path' => '270.JPG',
            ], //101                             
            [
                'product_id' => 102,
                'image_path' => '270.JPG',
            ], //102                             
            [
                'product_id' => 103,
                'image_path' => '270.JPG',
            ], //103                             
            //##############################################################    
            [
                'product_id' => 104,
                'image_path' => '101.JPG',
            ], //104                
            [
                'product_id' => 105,
                'image_path' => '101.JPG',
            ], //105                
            [
                'product_id' => 106,
                'image_path' => '101.JPG',
            ], //106                
            [
                'product_id' => 107,
                'image_path' => '101.JPG',
            ], //107                
            [
                'product_id' => 108,
                'image_path' => '101.JPG',
            ], //108                
            [
                'product_id' => 109,
                'image_path' => '101.JPG',
            ], //109                                                                                         
            //############################################################## 
            [
                'product_id' => 110,
                'image_path' => '300.JPG',
            ], //110   
            [
                'product_id' => 111,
                'image_path' => '300.JPG',
            ], //111  
            [
                'product_id' => 112,
                'image_path' => '300.JPG',
            ], //112  
            [
                'product_id' => 113,
                'image_path' => '300.JPG',
            ], //113                                                                                                      
            //##############################################################   
            [
                'product_id' => 114,
                'image_path' => '272.JPG',
            ], //114 
            [
                'product_id' => 115,
                'image_path' => '272.JPG',
            ], //115   
            [
                'product_id' => 116,
                'image_path' => '272.JPG',
            ], //116                                                                                                                       
            [
                'product_id' => 117,
                'image_path' => '272.JPG',
            ], //117                                                                                                                       
            [
                'product_id' => 118,
                'image_path' => '272.JPG',
            ], //118                                                                                                                       
            [
                'product_id' => 119,
                'image_path' => '272.JPG',
            ], //119                                                                                                                       //############################################################
        ));
        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "images" ref Facade DB demo created');
    }
}