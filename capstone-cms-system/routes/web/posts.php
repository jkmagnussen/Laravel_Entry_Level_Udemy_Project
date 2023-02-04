<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/admin/posts',
    [App\Http\Controllers\PostController::class, 'index']
)->name('post.index');


Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');

Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');

Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');


Route::get('/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');

Route::patch('/posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');


Route::delete('/posts/{post}/destroy', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');