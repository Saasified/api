<?php

declare(strict_types=1);

use App\Http\Controllers\CsrfCookieController;
use Illuminate\Support\Facades\Route;

Route::get('/hi', fn () => 'Hi!');

Route::name('csrf')
    ->get('csrf', CsrfCookieController::class);
