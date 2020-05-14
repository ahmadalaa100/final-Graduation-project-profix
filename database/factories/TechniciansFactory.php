<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Technicians;
use Faker\Generator as Faker;

$factory->define(Technicians::class, function (Faker $faker) {
    return [
        'firstName' => Str::random(10),
        'lastName' => Str::random(10),
        'mail' =>Str::random(10) . '@gmail.com',
        'phone' => '0156165116',
        'spec' => 'elcetrical',
        'national_id' => '1948948915615489'
    ];
});
