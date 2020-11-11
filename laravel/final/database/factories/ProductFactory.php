<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => 50,
        'image' => 'img/index/sample.png',
        'description' => $faker->paragraph(6),
        'category_id' => 1

    ];
});
