<?php

namespace App\Console\Commands;

use App\Models\Message;
use App\Models\Room;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PurgeDatabase extends Command
{
    protected $signature = 'database:purge';

    protected $description = 'Purges the database of all rooms and messages, then creates the default room and message.';

    public function handle()
    {
        Room::truncate();
        Message::truncate();

        $name = 'Book club';

        $room = Room::factory()->create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);

        $user = User::find(1);
        $user->rooms()->attach($room->id);

        Message::create([
            'user_id' => $user->id,
            'room_id' => $room->id,
            'message' => 'This is an example message!',
        ]);

        $this->info('Database purged successfully!');
    }
}
