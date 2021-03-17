## :package: Install

Via Composer

``` bash
$ composer require azima/sms
```

## :zap: Configure

Publish the config file

```bash
$ php artisan sms:publish
```

## :fire: Usage

```php

In your env file just use it like this. 

GATEWAY_SA_URL=
GATEWAY_SA_USER=
GATEWAY_SA_PASSWORD=
GATEWAY_SA_SENDER_ID=

# On the top of the file.
use Azima\Sms\Facades\Sms;

...

# In your Controller.
Sms::send("this message", function($sms) {
    $sms->to(['Number 1', 'Number 2']); # The numbers to send to.
});
# OR...
Sms::send("this message")->to(['Number 1', 'Number 2'])->dispatch();

```

## :microscope: Testing

``` bash
composer test
```

## :date: Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## :heart: Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## :lock: Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## :policeman: License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
