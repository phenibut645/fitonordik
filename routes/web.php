<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/production-capabilities', [PageController::class, 'show'])
    ->defaults('page', 'production-capabilities')
    ->name('production-capabilities');

Route::get('/contract-manufacturing', [PageController::class, 'show'])
    ->defaults('page', 'contract-manufacturing')
    ->name('contract-manufacturing');

Route::get('/about', [PageController::class, 'show'])
    ->defaults('page', 'about')
    ->name('about');

Route::get('/contacts', [PageController::class, 'show'])
    ->defaults('page', 'contacts')
    ->name('contacts');

Route::get('/privacy-policy', [PageController::class, 'show'])
    ->defaults('page', 'privacy-policy')
    ->name('privacy-policy');

Route::get('/cookie-policy', [PageController::class, 'show'])
    ->defaults('page', 'cookie-policy')
    ->name('cookie-policy');
