<?php

use Faker\Generator as Faker;



// php artisan tinker
// factory('App\Cliente', 250)->create();  


$factory->define(App\Cliente::class, function (Faker $faker) {
  return [
        'cli_nome' => $faker->name,
        'cli_email' => $faker->unique()->safeEmail,
        'cli_endereco' => $faker->address,
        'cli_telefone' => $faker->phoneNumber,
        'cid_id' => rand(1, 2),
        'plan_id' => rand(1, 3)
    ];
});


