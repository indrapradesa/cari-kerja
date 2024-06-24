<?php

namespace Database\Seeders;

use App\Models\Package;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Package::create([
            'name_package' => 'Basic',
            'max_administrator' => 1,
            'max_posting' => 3,
            'max_highlight' => 0,
            'day_duration' => 15,
            'price' => 0,
            'discount' => 0
        ]);

        Package::create([
            'name_package' => 'Standard',
            'max_administrator' => 3,
            'max_posting' => 10,
            'max_highlight' => 3,
            'day_duration' => 30,
            'price' => 89000,
            'discount' => 0
        ]);

        Package::create([
            'name_package' => 'Premium',
            'max_administrator' => 8,
            'max_posting' => 0,
            'max_highlight' => 99,
            'day_duration' => 30,
            'price' => 139000,
            'discount' => 0
        ]);
    }
}
