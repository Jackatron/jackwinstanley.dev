<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Library\DiscordNotification;

class SendDiscordNotification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public string $token, 
        public string $title,
        public array $data
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        DiscordNotification::sendWebhookData($this->token, $this->title, $this->data);
    }
}
