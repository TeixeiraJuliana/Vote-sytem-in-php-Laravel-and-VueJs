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
Route::get('/temas/{id}/editar',  [App\Http\Controllers\ThemeController::class, 'edit'])->middleware(['auth']);
Route::get('/temas/aditado/{id}',  [App\Http\Controllers\ThemeController::class, 'update']);
Route::delete('/temas/{id}', [App\Http\Controllers\ThemeController::class, 'destruir']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
