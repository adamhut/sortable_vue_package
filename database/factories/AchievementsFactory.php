<?php

use Faker\Generator as Faker;
use Adamhut\Achievements\Achievement;

$factory->define(Achievement::class, function (Faker $faker) {
    return [
        'name'        => $faker->word,
        'description' => $faker->sentence,
        'icon'        => $faker->word.'.svg',
    ];
});
