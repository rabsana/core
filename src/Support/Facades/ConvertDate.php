<?php

namespace Rabsana\Core\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string gtoj($date, string $format = 'Y-m-d H:i:s')
 * @method static string jtog($date, string $format = 'Y-m-d H:i:s')
 * 
 * @see \Rabsana\Core\Support\Date\Morilog
 */
class ConvertDate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'convertDate';
    }
}
