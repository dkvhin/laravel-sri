<?php

namespace Dkvhin\SubresourceIntegrity;

use Illuminate\Support\Facades\Facade;

class SriFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'sri';
    }
}
