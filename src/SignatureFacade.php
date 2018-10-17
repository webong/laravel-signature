<?php
namespace Laravel\Signature;

use Illuminate\Support\Facades\Facade;

class MyPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'signature';
    }
}
