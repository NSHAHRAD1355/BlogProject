<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $categoryIds= \App\Category::pluck('id')->all();
    return [
        'title' => $faker->sentence,
        'body' =>$faker->sentence,
        'category_id' => $faker->randomElement($categoryIds)
    ];
});
