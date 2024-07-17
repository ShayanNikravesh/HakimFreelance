<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Broker;
use App\Models\BrokerTag;
use App\Models\Manager;
use App\Models\Message;
use App\Models\Tag;
use App\Models\User;
use Database\Factories\BrokerTagFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //////////////////////////////////////
        User::factory(10)->create();
        Broker::factory(10)->create();
        Tag::factory(10)->create();
        Manager::factory(10)->create();
        BrokerTag::factory(10)->create();
        Message::factory(20)->create();
        //////////////////////////////////////

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
