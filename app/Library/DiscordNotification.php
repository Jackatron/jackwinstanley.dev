<?php

namespace App\Library;

use Illuminate\Support\Facades\Http;

class DiscordNotification
{
    public static function sendWebhookData(string $token, string $title, array $data): bool
    {
        $response = Http::post(self::parseWebhookUrl($token), [
            'content' => $title,
            'embeds'  => [
                array_merge(self::getBaseWebhookData(), $data)
            ]
        ]);
        return $response->ok();
    }

    protected static function getBaseWebhookData(): array
    {
        return [
            'color' => hexdec('#d74000')
        ];
    }

    protected static function parseWebhookUrl(string $token): string
    {
        return 'https://discord.com/api/webhooks/' . $token;
    }
}