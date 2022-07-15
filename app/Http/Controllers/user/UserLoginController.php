<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{

    public function login()
    {
        /* $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return Auth::user();
        } else {
            $erreur = "Authentification echouée. Veuillez verifier vos champs";
            return response()->json(['erreur' => $erreur], 401);
        } */
    }
}
