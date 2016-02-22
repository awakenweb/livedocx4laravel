<?php

namespace Awakenweb\Livedocx4Laravel;

use Awakenweb\Livedocx\Container;
use Awakenweb\Livedocx\Livedocx;
use Awakenweb\Livedocx\Soap\Client;
use Illuminate\Support\ServiceProvider;
use SoapClient;

class LivedocxServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('livedocx.livedocx', function() {
            $client = new Client(
                    new SoapClient(\Config::get('livedocx4laravel.wsdl'))
            );
            $client->connect(
                    \Config::get('livedocx4laravel.username'), \Config::get('livedocx4laravel.password')
            );
            return new Livedocx($client, new Container(), true);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/livedocx.php' => config_path('livedocx.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('livedocx.livedocx');
    }

}
