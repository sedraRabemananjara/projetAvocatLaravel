<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserRefusController extends Controller
{
    public function refuser()
    {
        return DB::table('users')
            ->where('id', request('id'))
            ->update([
                'email_verified_at' => null
            ]);
    }
}
