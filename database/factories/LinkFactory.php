<?php

use App\Link;
use Faker\Generator as Faker;

$factory->define(Link::class, function (Faker $faker) {
    return [
        'organization_id' => 1,
        'url' => $faker->url,
    ];
});
