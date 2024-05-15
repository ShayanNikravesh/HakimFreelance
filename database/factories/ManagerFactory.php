<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manager>
 */
class ManagerFactory extends Factory
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
            'email'=>fake()->unique()->safeEmail,
            'level' => fake()->randomElement([0,1,2]),
            'password' => Hash::make(1234), // password
            'remember_token' => Str::random(10),
        ];
    }
}
