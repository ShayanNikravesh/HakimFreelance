<?php

namespace Database\Factories;

use App\Models\Broker;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BrokerTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag_id' => fake()->unique()->numberBetween(1, Tag::count()),
            'broker_id' => fake()->unique()->numberBetween(1, Broker::count()),
        ];
    }
}
