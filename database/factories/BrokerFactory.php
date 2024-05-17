<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BrokerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'f_name' => fake()->name(),
            'l_name' => fake()->name(),
            'mobile' => rand(0,100),
            'gender' => fake()->randomElement(['male','female']),
            'national_code' => rand(0,100),
            'desc' => fake()->paragraph(),
            'address' => fake()->sentence(),
            'photo' => fake()->paragraph(),
            'password' => Hash::make(1234), // password
//            'email'=>fake()->unique()->safeEmail,
            'status' => fake()->randomElement(['active','inactive','banned']),
        ];
    }
}
