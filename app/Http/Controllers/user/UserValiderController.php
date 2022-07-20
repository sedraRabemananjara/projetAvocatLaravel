<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserValiderController extends Controller
{
    public function valider()
    {
        DB::table('users')
            ->where('id', request('id'))
            ->update([
                'email_verified_at' => Carbon::now()->toDateTimeString()
            ]);
        return Carbon::now()->toDateTimeString();
    }
}
