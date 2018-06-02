<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->text,
        'is_checked' => false,
    ];
});
