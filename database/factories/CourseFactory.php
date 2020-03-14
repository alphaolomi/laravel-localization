<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'duration' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
