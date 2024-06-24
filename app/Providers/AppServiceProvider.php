<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        $this->viewComposer();
    }


    /**
     * View Composer.
     *
     * @return void
     */
    private function viewComposer()
    {
        view()->composer([
            'vendor.laravel-user-monitoring.layouts.master',
            'vendor.laravel-user-monitoring.visit-monitoring.index',
            'vendor.laravel-user-monitoring.actions-monitoring.index',
            'vendor.laravel-user-monitoring.authentications-monitoring.index',
        ], function (View $view) {
            $title = 'Laravel User Monitoring';

            $view->with('title', $title);
        });
    }

}
