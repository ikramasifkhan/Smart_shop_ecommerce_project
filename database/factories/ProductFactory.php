<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id'=>Category::all()->random()->id,
        'name'=>$faker->unique()->jobTitle,
        'short_description'=>$faker->realText(),
        'long_description'=>$faker->realText(),
        'price'=>random_int(100, 1000)
    ];
});
