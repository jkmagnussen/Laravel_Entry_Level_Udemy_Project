<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');


Route::middleware('auth')->group(function () {

    Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');

    // Admin Posts - Create - Read 

    Route::get(
        '/admin/posts',
        [App\Http\Controllers\PostController::class, 'index']
    )->name('post.index');


    Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');

    Route::post(
        '/admin/posts',
        [App\Http\Controllers\PostController::class, 'store']
    )->name('post.store');
});