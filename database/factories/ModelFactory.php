<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(eloquenAvance\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(eloquenAvance\Book::class, function (Faker\Generator $faker){
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'status' => $faker->randomElement(['public', 'draft']),
        'category_id' => $faker->randomElement([1,2,3]),
    ];
});

$factory->define(eloquenAvance\Exam::class, function (Faker\Generator $faker){
    return [
        'title' => $faker->name,
    ];
});

$factory->define(eloquenAvance\Page::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->name,
        'body' => $faker->text,
    ];
});
$factory->define(eloquenAvance\Post::class, function (Faker\Generator $faker){
    return [
        'title' => $faker->name,
        'body' => $faker->text,
    ];
});