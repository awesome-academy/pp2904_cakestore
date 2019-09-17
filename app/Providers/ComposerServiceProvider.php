<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(
            ['layouts.footer', 'layouts.header'], 
            'App\Http\ViewComposers\FooterComposer'
        );
        
        view::composer(
            ['layouts.header', 'checkout.checkout'],
            'App\Http\ViewComposers\CartComposer'
        );           
    }
}
