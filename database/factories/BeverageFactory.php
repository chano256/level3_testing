<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use level3_testing\Beverage;
use Faker\Generator as Faker;

$factory->define(Beverage::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'type' => 'soft drink',
    ];
});
