<?php

namespace App\Providers;


use App\Models\User;
use App\Models\LogModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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

        // Agar variable notif dibawa ke semua view,
        View::composer('*', function ($view) {
            if (Auth::check() && Auth::user()->role_id == 2) {
                $notif = LogModel::whereHas('user', function ($query) {
                    $query->where('divisi_id', Auth::user()->divisi_id);
                })
                    ->where('isAccBidang', 1)
                    ->count();

                $view->with('notif', $notif);
            }
        });

        View::composer('*', function ($view) {
            if (Auth::check() && Auth::user()->role_id == 3) {
                $notif = LogModel::whereHas('user', function ($query) {
                    $query->where('divisi_id', Auth::user()->divisi_id);
                })
                    ->where('isAccDinas', 1)
                    ->count();

                $view->with('notif', $notif);
            }
        });

        // Mendifinisi kan gate untuk fitur di navbar
        Gate::define('StaffDivisi', function (User $user) {
            return $user->role->id == 1;
        });
        Gate::define('KepalaDivisi', function (User $user) {
            return $user->role->id == 2;
        });
        Gate::define('KepalaDinas', function (User $user) {
            return $user->role->id == 3;
        });
    }
}
