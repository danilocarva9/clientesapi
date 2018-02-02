<?php

use Faker\Generator as Faker;



// php artisan tinker
// factory('App\Cliente', 120)->create();  


$factory->define(App\Cliente::class, function (Faker $faker) {
  return [
        'cliente_nome' => $faker->name,
        'cliente_email' => $faker->unique()->safeEmail,
        'cliente_endereco' => $faker->address,
        'cliente_telefone' => $faker->phoneNumber,
        'cidade_id' => rand(1, 2),
        'plano_id' => rand(1, 3)
    ];
});


