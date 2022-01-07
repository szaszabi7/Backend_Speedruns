<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Game::factory(25)->create();

        \App\Models\Record::factory()->create([
            'user_id' => 1,
            'game_id' => 1,
            'category' => 'any%',
            'time' => 155,
        ]);

        \App\Models\Record::factory()->create([
            'user_id' => 2,
            'game_id' => 2,
            'category' => '100%',
            'time' => 514,
        ]);

        \App\Models\Record::factory()->create([
            'user_id' => 3,
            'game_id' => 3,
            'category' => 'glitc-free',
            'time' => 210,
        ]);
    }
}
