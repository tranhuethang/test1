<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admins::class, function (Faker $faker) {
    return [
        'fullname' => 'Tran Hue Thang',
        'username' => 'JK',
        'password' => '111',
        'email' => 'huethangbk@gmail.com',
        'avatar' => 'jktran.jpg',
    ];
});
