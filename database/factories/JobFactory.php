<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'client' => $faker->company,
        'project' => 'project ' . $faker->word,
        'client_ref' => $faker->name,

    ];
});
