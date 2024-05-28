<?php

namespace App\Console\Commands;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Console\Command;

class PurgeDatabase extends Command
{
    protected $signature = 'database:purge';

    protected $description = 'Purges the database of all rooms and messages, then creates the default room and message.';

    public function handle()
    {
        (new DatabaseSeeder())->run();

        $this->info('Database purged successfully!');
    }
}
