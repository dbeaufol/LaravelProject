<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(20, 2),
        'content' => $faker->realText(200, 3),
    ];
});
