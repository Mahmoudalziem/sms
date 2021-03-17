<?php

namespace Azima\Sms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Azima\Sms\Sms
 */
class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'azima-sms';
    }
}
