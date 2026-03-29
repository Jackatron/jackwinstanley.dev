<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FormController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/contact-submit', [FormController::class, 'contactSubmit'])->name('contact.submit');