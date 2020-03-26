<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\comment;
use App\post;
use Faker\Generator as Faker;

$factory->define(comment::class, function (Faker $faker) {
    return [
    	'post_id' => function(){
    		return post::all()->random();
    	},
        'name' => $faker->name,
        'comment' => $faker->paragraph
    ];
});
