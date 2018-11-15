<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Configs::class, function (Faker $faker) {
    return [
        'start_time' => '18:00:00',
        'check_time' => '20:00:00'
    ];
});
