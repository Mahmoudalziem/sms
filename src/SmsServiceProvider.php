<?php

namespace Azima\Sms;

use Illuminate\Support\ServiceProvider;
use Azima\Sms\Commands\SmsPublishCommand;

class SmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/sms.php' => config_path('sms.php'),
            ], 'sms-config');

            $this->commands([
                SmsPublishCommand::class,
            ]);
        }

        $this->app->bind('azima-sms', function () {
            return new Sms(config('sms'));
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sms.php', 'sms');
    }
}
