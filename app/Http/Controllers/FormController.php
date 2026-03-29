<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\CloudflareTurnstile;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\ContactFormSubmission;
use App\Http\Requests\ContactFormRequest;
use App\Library\DiscordNotification;
use App\Jobs\SendDiscordNotification;
use Illuminate\Http\JsonResponse;

class FormController extends Controller
{
    use ValidatesRequests;
    
    public function contactSubmit(ContactFormRequest $request): JsonResponse
    {
        $verified = CloudflareTurnstile::validateTurnstile($request->input('cf-turnstile-response'), $request->ip());
        if(!$verified) {
            return response()->json([
                'success' => false,
                'message' => 'Please complete the reCAPTCHA to submit this form'
            ]);
        }

        $submission = ContactFormSubmission::create($request->validated());

        SendDiscordNotification::dispatch(config('services.discord.contact_webhook'), 'Contact Form Submission', [
            'title'       => sprintf('%s - %s', $submission->name, $submission->email),
            'description' => $submission->message
        ]);

        return response()->json([
            'success' => true
        ]);
    }
}
