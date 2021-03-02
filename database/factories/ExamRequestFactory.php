<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ExamRequest;
use Faker\Generator as Faker;

$factory->define(ExamRequest::class, function (Faker $faker) {
    return [
         'status'=> rand(0,1),
         'user_id'=> 2, 
         'subject_id'=>rand(1,50), 
         'period_id'=> 1
    ];
});
