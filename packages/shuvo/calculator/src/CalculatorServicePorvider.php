<?php

namespace shuvo\calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServicePorvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('shuvo\calculator\CalCulatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes.php';
    }
}
