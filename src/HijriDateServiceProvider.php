<?php

namespace Lina\HijriDate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Carbon;
use Lina\HijriDate\Facades\Hijri;

class HijriDateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/hijri.php', 'hijri');

        $this->app->singleton('hijri', function ($app) {
            return new \Lina\HijriDate\Hijri();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/hijri.php' => config_path('hijri.php'),
        ], 'hijri-config');

        Carbon::macro('toHijri', function (?int $adjustment = null) {
            return Hijri::convertToHijri($this, $adjustment);
        });
    }
}