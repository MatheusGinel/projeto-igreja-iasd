<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/entrar', [\App\Http\Controllers\LoginController::class, 'entrar'])->name('site.entrar');
Route::get('/escala', [\App\Http\Controllers\EscalaController::class, 'escala'])->name('site.escala');
Route::get('/quem-somos', [\App\Http\Controllers\QuemSomosController::class, 'quemSomos'])->name('site.quemsomos');
Route::get('/home', [\App\Http\Controllers\PaginaLogadaController::class, 'home'])->name('site.home');
Route::get('/novo-cadastro', [\App\Http\Controllers\NovoCadastroController::class, 'novoCadastro'])->name('site.novocadastro');
Route::post('/novo-cadastro', [\App\Http\Controllers\NovoCadastroController::class, 'salvar'])->name('site.novocadastro');