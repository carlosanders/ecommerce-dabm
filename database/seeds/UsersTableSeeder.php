<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //limpando a tabela
        User::truncate();

        $user = new User();
        $user->name = 'Carlos Anders';
        $user->email = 'carlosanders@gmail.com';
        $user->password = bcrypt('m@ster2016');
        $user->save();

        factory(User::class, 20)->create();
    }
}
