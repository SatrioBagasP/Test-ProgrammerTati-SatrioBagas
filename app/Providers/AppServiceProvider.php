<?php

namespace App\Providers;


use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // //
        // Gate::define('dosen', function (User $user) {
        //     return $user->role == 2;
        // });

        // Mendifinisi kan gate untuk fitur di navbar


        Gate::define('StaffDivisi', function(User $user){
            return in_array($user->role->id, [1, 2,3]);
        });
        Gate::define('KepalaDivisi', function(User $user){
            return in_array($user->role->id, [4, 5, 6]);
        });
        Gate::define('KepalaDinas', function(User $user){
            return $user->role->id == 7;
        });

    }
}
