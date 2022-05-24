<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

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

        Passport::hashClientSecrets();

        Passport::routes();

        Passport::tokensExpireIn(now()->addSeconds(config('passport.tokensExpireIn')));
        Passport::refreshTokensExpireIn(now()->addSeconds(config('passport.refreshTokensExpireIn')));
        Passport::personalAccessTokensExpireIn(now()->addSeconds(config('passport.personalAccessTokensExpireIn')));
    }
}
