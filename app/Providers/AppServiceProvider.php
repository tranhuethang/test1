<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Services\Interfaces\ConfigServiceInterface::class, \App\Services\ConfigService::class);
        $this->app->bind(\App\Services\Interfaces\StaffServiceInterface::class, \App\Services\StaffService::class);
        $this->app->bind(\App\Services\Interfaces\InformationServiceInterface::class, \App\Services\InformationService::class);
        $this->app->bind(\App\Services\Interfaces\TimesheetServiceInterface::class, \App\Services\TimesheetService::class);
    }
}
