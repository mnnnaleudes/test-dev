<?php

use Faker\Generator as Faker;

$factory->define(App\Carro::class, function (Faker $faker) {
    return [
        'marca'     => str_random(10),
        'modelo'    => str_random(8),
        'ano'       => $faker->year(2019)
    ];
});
