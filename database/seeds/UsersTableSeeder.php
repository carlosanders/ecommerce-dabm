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
        $user->name = 'Carlos Anders';
        $user->cpf = 7504022705;
        $user->email = 'carlosanders@gmail.com';
        $user->nip = 6840680;
        $user->password = bcrypt('m@ster2016');
        $user->save();

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Table: "users" ref a Model "User" carlosanders@gmail.com created');
    }
}
