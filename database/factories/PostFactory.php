<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'name' => $faker -> word,
      'desc' => $faker -> sentence,
      'date' => $faker -> dateTime
    ];
});
