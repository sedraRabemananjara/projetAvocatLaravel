<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserSelectController extends Controller
{
    public function selectAll()
    {
        return User::all();
    }
}
