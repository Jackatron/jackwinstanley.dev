<?php

namespace App\Library;

use Illuminate\Support\Facades\Http;

class CloudflareTurnstile
{
    const VERIFY_URL = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    public static function validateTurnstile(string $token, string $remote_ip): bool
    {
        $response = Http::asForm()->post(self::VERIFY_URL, [
            'secret'    => config('services.cloudflare_turnstile.secret_key'),
            'response'  => $token,
            'remoteip'  => $remote_ip
        ]);

        if($response->failed()) {
            return false;
        }

        return data_get($response->json(), 'success');
    }
}