<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Statistics::class, function (Faker $faker) {
    return [
        'staff_id' => 1,
        'total_count' => 1,
        'approve_count' => 1,
        'late_count' => 1,
        'month' => 1
    ];
});
