<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        'title' => $faker->text($maxNbChars = 100),
        'body' => $faker->paragraph,
        'tag' => $faker->words($nb = 10, $asText = true),
        'description' => $faker->paragraph,
    ];
});
