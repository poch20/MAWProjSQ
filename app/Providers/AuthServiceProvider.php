<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($currUserType){
          //condition because laravel by default returns the current user/authenticated user and pass it here
          return $currUserType->type === 'admin';
        });

        Gate::define('isAuthor', function($currUserType){
          return $currUserType->type === 'author';
        });

        Gate::define('isUser', function($currUserType){
          return $currUserType->type === 'user';
        });

        Passport::routes();
    }    
}
