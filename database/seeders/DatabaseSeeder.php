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
        if (app()->isLocal()) {
            User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@soursit.test',
                'password' => bcrypt(12345)
            ]);
        }

        User::factory(50)
            ->has(
                Dough::factory(3)
                    ->has(
                        Sitting::factory(5)
                    )
            )
            ->create();

    }
}
