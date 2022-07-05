<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AssurerVerificationUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $email_verified_at = null;
        if (request('username') != null) {
            $user = User::where('email', request('username'))
                ->select('email_verified_at')
                ->get();
            if (count($user) != 0) {
                $email_verified_at = $user[0]->email_verified_at;
            }
        } else {
            $email_verified_at = Auth::user()->email_verified_at;
        }

        if ($email_verified_at === null) {
            return abort(403, "Vous n'êtes pas authorisé");
        }

        return $response;
    }
}
