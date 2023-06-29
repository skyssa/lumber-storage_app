<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = \App\Models\User::factory(10)->create();

        foreach ($users as $user) {
            \App\Models\Resource::factory()->create([
                'user_id' => $user->id,
            ]);
            \App\Models\Wood::factory()->create([
                'user_id' => $user->id,
            ]);
        }

    }
}
