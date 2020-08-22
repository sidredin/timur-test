<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Document;
use App\Models\Person;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    $personIds = Person::select('id')->get();
    return [
        'name' => $faker->text,
        'description' => $faker->text,
        'person_id' => $faker->randomElement($personIds),
    ];
});
