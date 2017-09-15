<?php

namespace Story\Cms\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Story\Cms\Support\Theme
 */
class Theme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'theme';
    }
}