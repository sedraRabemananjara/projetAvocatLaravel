<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
    public function getInfo()
    {
        $userInfo = User::where('id', Auth::user()->id)
            ->select(["nom", "prenom", "adresse", "contact", "email", "est_admin"])
            ->get()[0];
        return $userInfo;
    }
}
