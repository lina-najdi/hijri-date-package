<?php

namespace Lina\HijriDate\Facades;

use Illuminate\Support\Facades\Facade;

class Hijri extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hijri'; 
    }
}