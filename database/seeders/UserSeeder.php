<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (User::first() !== null) {
            return;
        }

        User::truncate();

        User::factory()->create([
            'name' => 'bobl',
            'email' => 'boydbloemsma@gmail.com',
            'password' => env('PASSWORD_HASH'),
        ]);
    }
}
