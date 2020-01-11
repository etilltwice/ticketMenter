<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        "menter_id" => rand(0, 5),
        "student_id" => rand(0, 5),
        "content" => $faker->word(),
        "status" => 1
    ];
});
