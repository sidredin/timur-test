<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\HealthStatus;
use Faker\Generator as Faker;

$factory->define(HealthStatus::class, function (Faker $faker) {
    return [
        'name' => $faker->text(200),
    ];
});
