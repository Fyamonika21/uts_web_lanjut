<?php
use App\Http\Controllers\RegisterController;

Route::post('/daftar', [RegisterController::class, 'store'])->name('register.store');
Route::get('/daftar', [RegisterController::class, 'create'])->name('register.create');

