<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/entrar', [\App\Http\Controllers\LoginController::class, 'entrar'])->name('site.entrar');
Route::get('/escala', [\App\Http\Controllers\EscalaController::class, 'escala'])->name('site.escala');
Route::get('/quem-somos', [\App\Http\Controllers\QuemSomosController::class, 'quemSomos'])->name('site.quemsomos');
