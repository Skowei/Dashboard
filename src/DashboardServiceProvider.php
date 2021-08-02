<?php

namespace Skowei\Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources' =>  resource_path('/'),
            __DIR__.'/app' =>  base_path('app/'),
            __DIR__.'/routes' =>  base_path('routes/'),
            __DIR__.'/database' =>  base_path('database/'),
            __DIR__.'/public' =>  base_path('public/'),
        ], 'sk-dashboard-blade');

        $this->publishes([
            __DIR__.'/resources' =>  resource_path('/'),
            __DIR__.'/app' =>  base_path('app/'),
            __DIR__.'/routes' =>  base_path('routes/'),
            __DIR__.'/database' =>  base_path('database/'),
            __DIR__.'/public' =>  base_path('public/'),
        ], 'sk-dashboard-vue');

        $this->publishes([
            __DIR__.'/resources' =>  resource_path('/'),
            __DIR__.'/app' =>  base_path('app/'),
            __DIR__.'/routes' =>  base_path('routes/'),
            __DIR__.'/database' =>  base_path('database/'),
            __DIR__.'/public' =>  base_path('public/'),
        ], 'sk-dashboard-react');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\InstallCommand::class,
                Commands\UpdateCommand::class,
            ]);
        }
    }
}
