<?php

use Faker\Generator as Faker;

$factory->define(App\Issues::class, function (Faker $faker) {
    return [
        'subject' => $faker->sentence(5),
        'description' => $faker->text(),
    ];
});
