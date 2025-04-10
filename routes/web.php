<?php

use App\Livewire\Dashboard\Articles\Show;
use App\Livewire\Home\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home\Articles::class)->name('home');
Route::get('/articles', \App\Livewire\Home\Articles::class)->name('articles');
Route::get('/projects', \App\Livewire\Home\Projects::class)->name('projects');

Route::get('/hello-world', function () {
    return 'Hello World';
});

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
