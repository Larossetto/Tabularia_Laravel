<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users',[App\Http\Controllers\UsersController::class,'index']);


Route::delete('/users/{id}',[App\Http\Controllers\UsersController::class, 'deletar_user'])->name('deletar_user');
Route::put('/users/{id}',[App\Http\Controllers\UsersController::class, 'atualizar_user'])->name('atualizar_user');
Route::post('/users/',[App\Http\Controllers\UsersController::class, 'criar_user'])->name('criar_user');
