<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Timesheets::class, function (Faker $faker) {
    return [
        'staff_id' => 1,
        'date' => '2018-11-06',
        'work' => 'Check timesheet and create new timesheet for next day',
        'problem' => 'Check timesheet and create new timesheet for next day',
        'plan' => 'Check timesheet and create new timesheet for next day',
        'approve' => 1
    ];
});
