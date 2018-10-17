<?php
namespace Staybusy\Signature;

use Illuminate\Support\ServiceProvider;

class SignatureServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Signature::class, function () {
            return new Signature();
        });
        $this->app->alias(Signature::class, 'signature');
    }
}
