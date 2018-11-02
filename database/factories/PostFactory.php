<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'sinopse' => $faker->text(),
        'body' => $faker->text(500),
        'published_at' => $faker->dateTime(),
    ];
});
