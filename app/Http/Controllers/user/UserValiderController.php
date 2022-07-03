<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserValiderController extends Controller
{
    public function valider()
    {
        DB::table('users')
            ->where('id', request('id'))
            ->update([
                'email_verified_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);
        return DB::raw('CURRENT_TIMESTAMP');
    }
}
