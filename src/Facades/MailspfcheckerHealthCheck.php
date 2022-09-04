<?php

namespace Lloricode\MailspfcheckerHealthCheck\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lloricode\MailspfcheckerHealthCheck\MailspfcheckerHealthCheck
 */
class MailspfcheckerHealthCheck extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lloricode\MailspfcheckerHealthCheck\MailspfcheckerHealthCheck::class;
    }
}
