<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Staffs::class, function (Faker $faker) {
    return [
        'fullname' => 'Phi Minh Long',
        'username' => 'LongPhi',
        'password' => '111',
        'email' => 'minhlongneu@gmail.com',
        'avatar' => 'minhlong.png',
        'description' => 'This is first staff',
        'leader_id' => 1,
        'notify_to' => 'JK'
    ];
});
