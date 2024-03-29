<?php

use Illuminate\Support\Facades\Route;

// show permissions
Route::get(
    '/permissions',
    [App\Http\Controllers\PermissionController::class, 'index']
)->name('permissions.index');


// Add permissions 
Route::post(
    '/permissions',
    [App\Http\Controllers\PermissionController::class, 'store']
)->name('permissions.store');

// Delete permissions
Route::delete(
    '/permissions/{permission}/destroy',
    [App\Http\Controllers\PermissionController::class, 'destroy']
)->name('permissions.destroy');

//edit permission link (delete only) 
Route::get(
    '/permissions/{permission}/edit',
    [App\Http\Controllers\PermissionController::class, 'edit']
)->name('permissions.edit');


Route::put(
    '/permissions/{permission}/update',
    [App\Http\Controllers\PermissionController::class, 'update']
)->name('permissions.update');
