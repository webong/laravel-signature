<?php
namespace Staybusy\Signature;

use Illuminate\Support\Facades\Facade;

class SignatureFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'signature';
    }
}
