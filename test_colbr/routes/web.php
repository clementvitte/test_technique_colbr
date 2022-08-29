<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\CompteController;

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
    return view('welcome');
});

Route::get('/inscription', [InscriptionController::class, 'formulaire']);
Route::post('inscription', [InscriptionController::class, 'traitement']);

Route::get('/connexion', [ConnexionController::class, 'formulaire']);
Route::post('/connexion', [ConnexionController::class, 'traitement']);

Route::get('/users', [UsersController::class, 'liste']);

Route::get('/mon-compte', [CompteController::class, 'accueil']);
Route::get('/deconnexion', [CompteController::class, 'deconnexion']);
