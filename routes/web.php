<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');



Route::prefix('blog')->group(function(){
    Route::get('', [PostController::class, 'index'])->name('posts');
    Route::prefix('{post}')->group(function(){
        Route::get('', [PostController::class, 'show'])->name('posts.details');
    });
});

require __DIR__.'/auth.php';
