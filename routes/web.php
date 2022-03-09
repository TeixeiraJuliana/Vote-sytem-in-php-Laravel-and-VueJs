<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'web'], function () {
    Route::get('/',  [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::get('/temas',  [App\Http\Controllers\ThemeController::class, 'index']);
Route::get('/temas/novoTema',  [App\Http\Controllers\ThemeController::class, 'newThema']);
Route::post('/temas/criarTema',  [App\Http\Controllers\ThemeController::class, 'add']);
Route::get('/temas/{id}/editar',  [App\Http\Controllers\ThemeController::class, 'edit']);

/*

Route::post('/temas/editado/{id}',  [App\Http\Controllers\ThemeController::class, 'update']);
Route::get('/temas/excluir',  [App\Http\Controllers\ThemeController::class, 'delete']);

*/


