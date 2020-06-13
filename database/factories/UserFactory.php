<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
 
use Faker\Generator as Faker;
use App\Models\User;
use Carbon\Carbon;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
        'password' => bcrypt('12345'),
        'email_verified_at' => Carbon::now()
    ];
});
