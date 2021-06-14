<?php

namespace Zaman101\LaravelAdminPanel;

use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/backend.php');
        $this->publishes([
            __DIR__.'/../routes' => base_path('routes'),
        ], 'routes');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin_panel');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../public' => public_path('backend'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../controllers' => app_path('Http/Controllers'),
        ]);

    }
}
