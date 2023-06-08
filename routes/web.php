<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
})->name('accueil');
Route::post('/',[\App\Http\Controllers\LoginController::class,'login']);

Route::get('/connexion', [\App\Http\Controllers\RandomUserController::class,'getRandomUser'])->name('connexion');
Route::post('/connexion', [\App\Http\Controllers\RandomUserController::class,'getRandomUser'])->name('connexion');

Route::get('/liste', function() {
    return view('liste');
});

Route::get('/profil', function() {
    return view('profil');
});