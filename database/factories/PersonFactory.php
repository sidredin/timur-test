<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Person;
use App\Models\HealthStatus;
use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    $healthStatusesIds = HealthStatus::select('id')->get();
    $countriesIds = Country::select('id')->get();
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'snils' => $faker->phoneNumber,
        'sex' => $faker->randomElement(['М', 'Ж']),
        'birthdate' => $faker->date(),
        'with_mother' => $faker->randomElement([true, false]),
        'with_father' => $faker->randomElement([true, false]),
        'speсiality' => $faker->word,
        'description' => $faker->text,
        'health_status_id' => $faker->randomElement($healthStatusesIds),
        'country_id' => $faker->randomElement($countriesIds),
    ];
});
