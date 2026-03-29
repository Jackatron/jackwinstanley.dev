<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    protected function casts(): array
    {
        return [
            'name'      => 'encrypted',
            'email'     => 'encrypted',
            'message'   => 'encrypted',
        ];
    }
}
