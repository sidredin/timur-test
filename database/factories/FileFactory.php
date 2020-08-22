<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\File;
use App\Models\FileType;
use App\Models\Document;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    $fileTypeIds = FileType::select('id')->get();
    $documentIds = Document::select('id')->get();
    return [
        'name' => $faker->text,
        'src' => $faker->imageUrl(),
        'file_type_id' => $faker->randomElement($fileTypeIds),
        'document_id' => $faker->randomElement($documentIds),
    ];
});
