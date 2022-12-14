<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function liste() {
        $users = User::all();

        return view('users', [
            'users' => $users
    ]);
    }
}
