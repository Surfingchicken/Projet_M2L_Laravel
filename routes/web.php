<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SearchController;

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

Route::put('/profil',[\App\Http\Controllers\UpdateUserController::class,'updateUser'])->name('profil');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [\App\Http\Controllers\LoginController::class,'logout']);

    Route::get('/connexion', [\App\Http\Controllers\RandomUserController::class,'getRandomUser'])->name('connexion');
    Route::post('/connexion', [\App\Http\Controllers\RandomUserController::class,'getRandomUser'])->name('connexion');

    Route::get('/liste', [\App\Http\Controllers\SearchController::class,'getAllUser']);
    Route::post('/liste', [\App\Http\Controllers\SearchController::class,'search'])->name('search');

    Route::get('/profil', function() {
        return view('profil');
});

});
