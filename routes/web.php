<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CommonController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/contact-submit', [FormController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/token', [CommonController::class, 'token'])->name('token');