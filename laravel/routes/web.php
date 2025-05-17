<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/quem-somos', 'quem-somos')->name('quem-somos');
Route::view('/catecismo', 'catecismo')->name('catecismo');
Route::view('/ministerios', 'ministerios')->name('ministerios');
Route::view('/contato', 'contato')->name('contato');


use App\Http\Controllers\CatecismoController;

Route::get('/catecismo', [CatecismoController::class, 'index']);

use App\Http\Controllers\QuemSomosController;

Route::get('/quem-somos', [QuemSomosController::class, 'index'])->name('quem-somos');
