<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSelectController extends Controller
{

    public function select()
    {
        return Auth::user();
    }

    public function selectAll()
    {
        return User::all();
    }

    public function selectAllExceptUser()
    {
        $users = User::where('id', "!=", Auth::user()->id)->get();
        return $users;
    }
}
