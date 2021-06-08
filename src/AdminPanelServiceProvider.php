<?php

namespace Adience\AdminPanel;

use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->publishes([
            __DIR__.'/../routes' => base_path('routes'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin_panel');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views'),
        ]);

        $this->publishes([
            __DIR__.'/../public' => public_path('backend'),
        ], 'public');


    }
}
