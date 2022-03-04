<?php

namespace App\Console;

use Illuminate\Console\Command;

class Ping extends Command
{
    /**
     * @var string
     */
    protected $signature = 'ping';

    /**
     * @var string
     */
    protected $description = 'Ping the server';

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->info('pong!');
    }
}
