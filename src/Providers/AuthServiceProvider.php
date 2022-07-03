<?php declare(strict_types=1);

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<string, string>
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

        ResetPassword::createUrlUsing(function ($notifiable, $token) {
            return config('app.frontend_url')
                . "/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });

        Passport::hashClientSecrets();

        Passport::routes();

        Passport::cookie('saasified_token');

        Passport::tokensExpireIn(now()->addSeconds(config('passport.tokensExpireIn')));
        Passport::refreshTokensExpireIn(now()->addSeconds(config('passport.refreshTokensExpireIn')));
        Passport::personalAccessTokensExpireIn(now()->addSeconds(config('passport.personalAccessTokensExpireIn')));
    }
}
