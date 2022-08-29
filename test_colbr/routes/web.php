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
    return view('welcome');
});

Route::get('/inscription', function() {
    return view('inscription');
});

Route::post('inscription', function() {
    request()->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
    ], [
        'password.min' => 'For security reasons, your password must contain at least :min characters.'
    ]);

    $user = App\Models\User::create([
        'first_name' => request('first_name'),
        'last_name' => request('last_name'),
        'email' => request('email'),
        'password' => bcrypt(request('password')),
        'password_confirmation' => request('password_confirmation'),
    ]);

    return 'Nous avons bien recu votre email qui est ' . request('email');
});

Route::get('/users', function() {
    $users = App\Models\User::all();

    return view('users', [
        'users' => $users
    ]);
});

