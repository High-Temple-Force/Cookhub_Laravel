<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => 'タイトルええす。',
        'hody' => '本文です。テｋシウトテキスト',
    ];
});
