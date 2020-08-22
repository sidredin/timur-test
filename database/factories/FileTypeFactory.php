<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FileType;
use Faker\Generator as Faker;

$factory->define(FileType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
