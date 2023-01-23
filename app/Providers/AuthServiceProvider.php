<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

include('/home/rafa/Desktop/task/app/Http/helpers.php');

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

        //Uso de gates para controlar que solo el propietario pueda editar / eliminar
        
        Gate::define('update-post', function (User $user, Post $post) {
            return True;
        });
        Gate::before( function (User $user) {
            return isAdmin($user);
        });
        Gate::after( function (User $user) {
            return True;
        });
        
     
        
    }
}
