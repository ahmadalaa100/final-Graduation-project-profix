<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {
    return [
        'name' => Str::random(10),
        'mail' =>Str::random(10) . '@gmail.com',
        'phone' => '0112164566',
        'addreess' => Str::random(10),
        'spec' => 'electrical'
    ];
});
