<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Phone;
use App\Models\PhoneType;
use App\Models\Person;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    $personIds = Person::select('id')->get();
    $phoneTypeIds = PhoneType::select('id')->get();
    return [
        'number' => $faker->e164PhoneNumber,
        'person_id' => $faker->randomElement($personIds),
        'phone_type_id' => $faker->randomElement($phoneTypeIds),
    ];
});
