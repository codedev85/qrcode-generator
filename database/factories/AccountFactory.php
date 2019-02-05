<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Account::class, function (Faker $faker) {
    $withrawal_method = array('Bank', 'Stripe', 'Paypal', 'Paystack');
    $users = App\Models\User::pluck('id')->all();

    return [
        'user_id' => $faker->unique()->randomElement($users),
        'balance' => $faker->numberBetween(200, 4000),
        'total_credit' => $faker->numberBetween(50, 500),
        'total_debit' => $faker->numberBetween(0, 200),
        'withrawal_method' => $withrawal_method[rand(0, 3)],
        'payment_email' => $faker->email,
        'bank_name' => $faker->word,
        'bank_branch' => $faker->state,
        'bank_account' => $faker->bankAccountNumber,
        'applied_for_payouts' => $faker->numberBetween(0, 1),
        'paid' => $faker->numberBetween(0, 1),
        'country' => $faker->country,
        'other_details' => $faker->paragraph(4, true),
        'payment_details' => $faker->paragraph(4, true),
    ];
});
