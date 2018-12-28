<?php

namespace Joncasas\Html;

use Illuminate\Support\ServiceProvider;

class HtmlServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'HTML');
        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/vendor/html')
        ]);
    }

}
