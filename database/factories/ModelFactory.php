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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/*
factory(App\User::class)->create([
    'name' => 'Marlon',
    'email' => 'marlon_dg_oliveira@outlook.com',
    'password' => bcrypt('teste'),
    'remember_token' => str_random(10),
]);

DB::insert('insert into oauth_clients (id,secret,name) values (?,?,?)', ['app1', 'teste', 'Meu app']);
*/