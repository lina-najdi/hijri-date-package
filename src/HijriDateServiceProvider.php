<?php

namespace Lina\HijriDate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Carbon;
use Lina\HijriDate\Facades\Hijri;

class HijriDateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('hijri', function ($app) {
            return new \Lina\HijriDate\Hijri();
        });
    }

    public function boot()
    {
        // Allow passing an adjustment to the macro
        Carbon::macro('toHijri', function (int $adjustment = 0) {
            return Hijri::convertToHijri($this, $adjustment);
        });
    }
}