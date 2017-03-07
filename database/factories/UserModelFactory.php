<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Support\Faker\Pessoa;

$factory->define(App\Models\User::class,
    function (Faker\Generator $faker) {

        $faker->addProvider(new Pessoa($faker));
        static $password;

        return [
            'username' => $faker->firstName,
            'name' => trim($faker->name),
            'cpf' => $faker->cpf(false),
            'email' => $faker->unique()->safeEmail,
            'nip' => str_random(8),
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    });
