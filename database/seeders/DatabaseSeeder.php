<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'yoga',
            'email' => 'yoga@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'user',
        ]);
        {
            $this->call(MBTITypeSeeder::class);
            $this->call(JobRecommendationSeeder::class);
        }

    }
}
