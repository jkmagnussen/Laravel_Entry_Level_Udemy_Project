<?php

use Illuminate\Support\Facades\Route;

Route::put(
    '/users/{user}/update',
    [App\Http\Controllers\UserController::class, 'update']
)->name('user.profile.update');


Route::delete('/users/{user}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');



Route::middleware('role:Admin', 'auth')->group(function () {
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::put('/users/{role}/attach', [App\Http\Controllers\UserController::class, 'attach'])->name('user.role.attach');
});

Route::middleware('can:view,user')->group(function () {
    Route::get(
        '/users/{user}/profile',
        [App\Http\Controllers\UserController::class, 'show']
    )->name('user.profile.show');
});
