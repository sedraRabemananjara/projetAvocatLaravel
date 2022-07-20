<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserInscriptionController extends Controller
{
    public function inscription()
    {
        request()->validate([
            "email" => "required|unique:users",
            "nom" => "required",
            "prenom" => "required",
            "password" => "required",
            "password_validation" => "required",
        ]);



        $pregEmail = preg_match(" /^[a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-zA-Z0-9]@[a-zA-Z0-9][-\.]{0,1}([a-zA-Z][-\.]{0,1})*[a-zA-Z0-9]\.[a-zA-Z0-9]{1,}([\.\-]{0,1}[a-zA-Z]){0,}[a-zA-Z0-9]{0,}$/i", request("email"));
        if ($pregEmail === 0) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'email' => ['validation.email_regex'],
            ]);
            throw $error;
        }

        if (request("password") !== request("password_validation")) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'Password' => ['validation.password_not_conform'],
            ]);
            throw $error;
        }

        if (count(User::all()) == 0) {
            return User::create([
                "email" => request("email"),
                "nom" => request("nom"),
                "prenom" => request("prenom"),
                "password" => Hash::make(request("password")),
                //"password" =>request("password"),
                "est_admin" => 1,
                'remember_token' => Str::random(10),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
            ]);
        }


        return User::create([
            "email" => request("email"),
            "nom" => request("nom"),
            "prenom" => request("prenom"),
            "password" => Hash::make(request("password")),
            //"password" =>request("password"),
            "est_admin" => 0,
            'remember_token' => Str::random(10),
        ]);
    }
}
