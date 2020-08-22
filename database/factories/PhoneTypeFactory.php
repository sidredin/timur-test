<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PhoneType;
use Faker\Generator as Faker;

$factory->define(PhoneType::class, function (Faker $faker) {
    return [
        'type' => $faker->text(20)
    ];
});
