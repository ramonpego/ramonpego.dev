<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'slug'=>$faker->unique()->slug,
        'description'=>$faker->paragraph,
        'text'=>$faker->realText(5000),
        'author_id'=>1
    ];
});
