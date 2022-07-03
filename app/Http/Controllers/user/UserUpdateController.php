<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserUpdateController extends Controller
{
    public function update()
    {
        return DB::table('users')
            ->where('id', request('id'))
            ->update([
                'adresse' => request('adresse'),
                'contact' => request('contact'),
                'created_at' => request('created_at'),
                'email' => request('email'),
                'email_verified_at' => request('email_verified_at'),
                'est_admin' => request('est_admin'),
                'nom' => request('nom'),
                'prenom' => request('prenom'),
                'updated_at' => request('updated_at'),
            ]);
    }
}
