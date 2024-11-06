<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123')
        ]);
        User::create([
            'name' => 'yoga',
            'email' => 'yoga@gmail.com',
            'password' => Hash::make('123')
        ]);
    }
}
