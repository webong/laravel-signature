<?php
namespace Staybusy\Signature\Test;

use Staybusy\Signature\SignatureFacade;
use Staybusy\Signature\SignatureServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return Staybusy\Signature\SignatureServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [SignatureServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Signature' => SignatureFacade::class,
        ];
    }
}