<?php

namespace Toridochi\FirstPackage;

use Illuminate\Support\ServiceProvider;

class LoadingProvider extends ServiceProvider
{
    const PACKAGES_NAME = 'first-package';
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', self::PACKAGES_NAME);
        $this->loadTranslationsFrom(__DIR__.'/lang', self::PACKAGES_NAME);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
