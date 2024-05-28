<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        Room::truncate();

        $name = 'Book club';

        $room = Room::factory()->create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);

        User::first()->rooms()->attach($room->id);
    }
}
