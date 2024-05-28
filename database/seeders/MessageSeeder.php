<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        Message::factory()->create([
            'user_id' => 1,
            'room_id' => 1,
            'message' => 'This is an example message!',
        ]);
    }
}
