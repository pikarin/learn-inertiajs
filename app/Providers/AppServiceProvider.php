<?php

namespace App\Providers;

use Inertia\Inertia;
use Illuminate\Support\ServiceProvider;

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
        Inertia::version(function () {
            return md5_file(public_path('mix-manifest.json'));
        });

        Inertia::share([
            'app' => [
                'name' => config('app.name')
            ],
            'auth' => function () {
                return [
                    'user' => auth()->user() ? [
                        'id' => auth()->id(),
                        'name' => auth()->user()->name,
                        'email' => auth()->user()->email,
                    ] : null
                ];
            }
        ]);
    }
}
