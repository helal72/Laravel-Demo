<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\company;
use Faker\Generator as Faker;

$factory->define(company::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'slug' => Str::slug($faker->name),
        'address' => $faker->word
    ];
});
