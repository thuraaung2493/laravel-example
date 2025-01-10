<?php

namespace Thuraaung2493\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thuraaung2493\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Thuraaung2493\Example\Example::class;
    }
}
