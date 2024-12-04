<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkashController;

Route::get('/', [AkashController::class, 'index']);
Route::get('/create', [AkashController::class, 'create']);
Route::post('/store', [AkashController::class, 'store']);
Route::get('/show', [AkashController::class, 'show']);
Route::get('/akash/{id}/edit', [AkashController::class, 'edit'])->name('akash.edit');
Route::delete('akash/{id}/delete', [AkashController::class, 'destroy'])->name('akash.delete');
Route::put('/akash/{id}', [AkashController::class, 'update'])->name('akash.update');

