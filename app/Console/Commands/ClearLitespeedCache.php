<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Litespeed\LSCache\LSCache;

class ClearLitespeedCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'litespeed:clear-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear Litespeed cache';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        LSCache::purgeAll();
    }
}
