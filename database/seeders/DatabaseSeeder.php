<?php

namespace Database\Seeders;

use App\Models\Dough;
use App\Models\Sitting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(50)->has(Dough::factory(3)->has(Sitting::factory(5)))->create();

    }
}
