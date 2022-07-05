<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (!$this->app->routesAreCached()) {
            Passport::routes();

            PassPort::tokensExpireIn(now()->addDay());
            PassPort::refreshTokensExpireIn(now()->addDays(2));
            PassPort::personalAccessTokensExpireIn(now()->addDays(12));
        }

        // Gate
        Gate::define('access-verified-user', function (User $user) {
            if ($user->email_verfied_at != null) return true;
            return false;
        });
    }
}
