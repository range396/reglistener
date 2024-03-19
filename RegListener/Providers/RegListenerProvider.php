<?php

namespace Range396\RegListener\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Range396\RegListener\RegListener;


class RegListenerProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/range396/RegListener/src/Views', 'range396');
//        $this->publishes(
//            [__DIR__ . '../src/Views' => base_path('resources/views/vendor/regListener')],
//            'views'
//        );
        Event::listen(Registered::class, RegListener::class);
    }
}