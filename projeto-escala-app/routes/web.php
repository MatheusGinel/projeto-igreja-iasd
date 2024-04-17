<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/entrar', [\App\Http\Controllers\LoginController::class, 'entrar'])->name('site.entrar');
