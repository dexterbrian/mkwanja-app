<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payee>
 */
class PayeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = fake()->name();
        $isPaybill = (bool) rand(0, 1);

        return [
            'user_id' => 1,
            'name' => $name,
            'description' => '',
            'paybill' => $isPaybill ? fake()->numberBetween(1000, 9999) : 0,
            'account_number' => $isPaybill ? $name : '',
            'till' => $isPaybill ? 0 : fake()->numberBetween(1000, 9999),
            'phone' => fake()->phoneNumber(),
        ];
    }
}
