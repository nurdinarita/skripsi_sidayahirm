<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function (User $user) {
            return $user->role === 'Admin';
        });
        Gate::define('pimpinan', function (User $user) {
            return $user->role === 'Pimpinan';
        });
        Gate::define('pengajar', function (User $user) {
            return $user->role === 'Pengajar';
        });
    }
}
