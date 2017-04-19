<?php

namespace Farsidesign\Laravel;

use Illuminate\Support\ServiceProvider;
use Farsidesign\Zarinpal;

class ZarinpalServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return \Farsidesign\Zarinpal
     */
    public function register()
    {
        $this->app->singleton('Zarinpal', function () {
            $merchantID = config('Zarinpal.merchantID', 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');

            return new Zarinpal($merchantID);
        });

    }

    /**
     * Publish the plugin configuration.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/Zarinpal.php' => config_path('Zarinpal.php')
        ]);
    }
}
