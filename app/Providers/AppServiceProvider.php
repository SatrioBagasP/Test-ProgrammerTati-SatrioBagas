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

            // Mengecek apakah yang login kepala bidang atau dinas
            if (Auth::check() && Auth::user()->role_id == 2) {
                // Jika kepala bidang maka perlu query untuk ke user agar mengecek perdivisinya
                $notif = LogModel::whereHas('user', function ($query) {
                    $query->where('divisi_id', Auth::user()->divisi_id);
                })

                // Lalu query dimana status adalah 1 / Pending
                    ->where('isAccBidang', 1)
                    ->count();

                // Lalu  dilempar ke view untuk memunculkan notif
                $view->with('notif', $notif);
            }
            if (Auth::check() && Auth::user()->role_id == 3) {
                // Jika kepala dinas maka langsung saja tidak perlu query untuk mengecek divisi karena kepala dinas perlu mengacc semua divisi
                $notif = LogModel::where('isAccBidang',2)
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
