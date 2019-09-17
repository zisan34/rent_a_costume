<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(Product::class, function (Faker $faker) {
//     return [
//         'product_name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });
$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->name,
        'description' => $faker->text,
        'price' => rand(1,400),
        'unique_code' => '#' . Str::random(5), // password
        'added_by' => '1',
        'status' => '1',
        'availability' => '1',
        'category_id' => '2',
        'brand_id' => '1',
        'quantity' => '30',

    ];
});