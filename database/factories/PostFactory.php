<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	$title = $faker->sentence();
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'sinopse' => $faker->text(),
        'body' => $faker->text(500),
        'published_at' => $faker->dateTime(),
    ];
});
