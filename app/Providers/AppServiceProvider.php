<?php

namespace App\Providers;

use App\Models\Broker;
use App\Models\Tag;
use App\Observers\RegisterObserver;
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

        Broker::observe(RegisterObserver::class);

        $tags = Tag::whereNotNull('parent_id')->get();
        $parentTags = Tag::whereNull('parent_id')->get();

        view()->share([
            'tags' => $tags,
            'parentTags' => $parentTags
        ]);
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
