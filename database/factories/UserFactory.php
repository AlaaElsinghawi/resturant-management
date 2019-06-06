<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role' => $faker->word,
        'email_verified_at' => now(),
        'password' =>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Menu::class, function (Faker $faker) {
    return [
         'title' => $faker->sentence,
         'type' => $faker->word,
         'description' => $faker->text,
         'status' =>$faker->boolean,
          'image'=>$faker->imageurl($width=640 ,$height=480),
          'user_id'=>$faker->numberBetween($min=1 ,$max=8),
    ];
});
$factory->define(App\Item::class, function (Faker $faker) {
    return [
         'title' => $faker->sentence,
         'description' => $faker->text,
         'status' =>$faker->boolean,
          'image'=>$faker->imageurl($width=640 ,$height=480),
          'menu_id'=>$faker->numberBetween($min=1 ,$max=10),
          'user_id'=>$faker->numberBetween($min=1 ,$max=9),
    ];
});
$factory->define(App\Meal::class, function (Faker $faker) {
    return [
         'title' => $faker->sentence,
         'description' => $faker->text,
         'status' =>$faker->boolean,
          'image'=>$faker->imageurl($width=640 ,$height=480),
          'price'=>$faker->randomFloat($minmax=null ,$min=10 ,$max=100),
          'user_id'=>$faker->numberBetween($min=1 ,$max=10),
    ];
});
$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'address'=> $faker->address,
        'phone'=>$faker->e164phonenumber,
   
   ];
});
$factory->define(App\Order::class, function (Faker $faker) {
    return [
           'total'=>$faker->randomFloat($minmax=null ,$min=10 ,$max=100),
           'status' =>$faker->boolean,
           'cashIn'=>$faker->randomFloat($minmax=null ,$min=10 ,$max=100),
           'payment'=>$faker->randomFloat($minmax=null ,$min=10 ,$max=100),
           'change'=>$faker->randomFloat($minmax=null ,$min=10 ,$max=100),
          'customer_id'=>$faker->numberBetween($min=1 ,$max=30),
    ];
});
$factory->define(App\Comment::class, function (Faker $faker) {
    return [
         'title' => $faker->sentence,
         'description' => $faker->text,
         'status' =>$faker->boolean,
          'image'=>$faker->imageurl($width=640 ,$height=480),
          'rate'=>$faker->numberBetween($min=1 ,$max=5),
          'customer_id'=>$faker->numberBetween($min=1 ,$max=30),
          'order_id'=>$faker->numberBetween($min=1 ,$max=15),
    ];
});
$factory->define(App\Meal_Item::class, function (Faker $faker) {
    return [
          'discount'=>$faker->word,
          'meal_id'=>$faker->numberBetween($min=1 ,$max=5),
          'item_id'=>$faker->numberBetween($min=1 ,$max=10),

           ];
});

$factory->define(App\Order_Item::class, function (Faker $faker) {
    return [

          'order_id'=>$faker->numberBetween($min=1 ,$max=15),
          'item_id'=>$faker->numberBetween($min=1 ,$max=10),

           ];
});

$factory->define(App\Order_Meal::class, function (Faker $faker) {
    return [

          'order_id'=>$faker->numberBetween($min=1 ,$max=15),
          'meal_id'=>$faker->numberBetween($min=1 ,$max=5),

           ];
});

$factory->define(App\order_user::class, function (Faker $faker) {
    return [
            'type'=> $faker->word,
           'order_id'=>$faker->numberBetween($min=1 ,$max=15),
           'user_id'=>$faker->numberBetween($min=1 ,$max=25),

           ];
});





















