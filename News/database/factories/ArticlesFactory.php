<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
//$categories = \Category::all();
$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->sentences,
        'content' => $faker->paragraphs,
        ];
});
