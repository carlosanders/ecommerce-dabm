<?php

use App\Models\User;
use Faker\Factory as FactoryFaker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * @var \Faker\Generator
     */
    private $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Apaga toda a tabela de usuários
        User::truncate();

        // cria user fixo para testes
        $this->createWithModel();

        // Cria usuários demo dados faker
        $this->createUsers(10);

    }

    private function createUsers($max = 20)
    {

        DB::table("users")->insert(array(
            [
                'id' => 2,
                'username' => 'gerenteanders',
                'name' => 'Gerente Anders',
                'cpf' => 7504022706,
                'email' => 'gerente@marinha.mar.mil.br',
                'nip' => 6840681,
                'password' => bcrypt('m@ster2016'),
            ], //2
            [
                'id' => 3,
                'username' => 'vendaanders',
                'name' => 'Vendedor Anders',
                'cpf' => 7504022707,
                'email' => 'vendedor@marinha.mar.mil.br',
                'nip' => 6840682,
                'password' => bcrypt('m@ster2016'),
            ], //3
            [
                'id' => 4,
                'username' => 'useranders',
                'name' => 'User Anders',
                'cpf' => 7504022708,
                'email' => 'user@marinha.mar.mil.br',
                'nip' => 6840683,
                'password' => bcrypt('m@ster2016'),
            ], //4
        ));

        $this->faker = FactoryFaker::create('pt_BR');

        factory(User::class, $max)->create();
        // Exibe uma informação no console durante o processo de seed
        $this->command->info($max . ' demo users created');
    }

    /**
     * Cria categoria baseado no Model Criado
     */
    private function createWithModel()
    {
        // cria um usuario padrao para teste
        $user = new User();
        $user->username = 'carlosanders';
        $user->name = 'Carlos Anders - Admin';
        $user->cpf = 7504022705;
        $user->email = 'carlosanders@gmail.com';
        $user->nip = 6840680;
        $user->password = bcrypt('m@ster2016');
        $user->save();

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "users" ref a Model "User" carlosanders@gmail.com created');
    }
}
