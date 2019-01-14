<?php

use Faker\Generator as Faker;
use App\Models\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'content' => $faker->text,
        'author_id' => $faker->numberBetween($min = 1, $max = 50),
        'views' => $faker->numberBetween($min = 0, $max = 5000000)
    ];
});
