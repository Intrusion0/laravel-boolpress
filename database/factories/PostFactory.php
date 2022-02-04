<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
        'author'=>$faker->name(),
        'description'=>$faker->optional()->paragraph(),
        'pubblication_date'=>$faker->date('Y_m_d'),
        'like'=>$faker->numberBetween(0, 1000000),
        'comments'=>$faker->numberBetween(0, 1000000)
    ];
});
