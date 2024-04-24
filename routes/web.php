<?php

use App\Http\Middleware\AutenticacaoMiddleware;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])
    ->name('site.principal')
    ->middleware('log.acesso');

Route::get('/entrar', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.entrar');
Route::post('/entrar', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.entrar');

Route::middleware('autenticacao')
    ->prefix('/app')
    ->group(function(){
        Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('app.home');
        Route::get('/escala', [\App\Http\Controllers\EscalaController::class, 'escala'])->name('app.escala');
        Route::get('/sair', [\App\Http\Controllers\LoginController::class, 'sair'])->name('app.sair');
    }
);

Route::get('/quem-somos', [\App\Http\Controllers\QuemSomosController::class, 'quemSomos'])->name('site.quemsomos');
//Route::get('/home', [\App\Http\Controllers\PaginaLogadaController::class, 'home'])->name('site.home');

Route::get('/novo-cadastro', [\App\Http\Controllers\NovoCadastroController::class, 'novoCadastro'])->name('site.novocadastro');
Route::post('/novo-cadastro', [\App\Http\Controllers\NovoCadastroController::class, 'salvar'])->name('site.novocadastro');