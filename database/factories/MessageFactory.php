<?php

namespace Database\Factories;

use App\Models\Broker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'broker_id' => fake()->numberBetween(1, Broker::count()),
            'message_content' => fake()->text(),
            'user_id' => fake()->numberBetween(1, User::count()),
            'status' => fake()->randomElement(['active','inactive','banned']),
        ];
    }
}
