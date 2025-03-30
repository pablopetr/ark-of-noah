<?php

use App\Livewire\Dashboard\Articles\Show;
use App\Livewire\Home\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('home');

Route::get('/articles/{article:slug}', Show::class)->name('article.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
