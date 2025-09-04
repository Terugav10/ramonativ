<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;


Route::get('/chefe', [PrincipalController::class, 'chef'])->name('chefe');
Route::get('/cartao', [PrincipalController::class, 'card'])->name('cartao');
Route::get('/perfil', [PrincipalController::class, 'profile'])->name('perfil');
Route::get('/sobre', [PrincipalController::class, 'about'])->name('sobre');
Route::get('/contato', [PrincipalController::class, 'contact'])->name('contato');
Route::post('/contato', [PrincipalController::class, 'handleContact'])->name('contato.enviar');