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