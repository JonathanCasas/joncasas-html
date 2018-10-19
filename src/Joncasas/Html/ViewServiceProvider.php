<?php

namespace Joncasas\Html;

use Illuminate\Support\ServiceProvider;

/**
 * Description of ViewServiceProvider
 *
 * @author jonathan
 */
class ViewServiceProvider extends ServiceProvider {

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
        $html = 'html_var';
        view()->share('html', $html);
    }

}
