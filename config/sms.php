<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Driver
    |--------------------------------------------------------------------------
    |
    | This value determines which of the following gateway to use.
    | You can switch to a different driver at runtime.
    |
    */
    'default' => 'gatewaySa',

    /*
    |--------------------------------------------------------------------------
    | List of Drivers
    |--------------------------------------------------------------------------
    |
    | These are the list of drivers to use for this package.
    | You can change the name. Then you'll have to change
    | it in the map array too.
    |
    */
    'drivers' => [
        'gatewaySa' => [
            'url' => env('GATEWAY_SA_URL'),
            'user' => env('GATEWAY_SA_USER'),
            'password' => env('GATEWAY_SA_PASSWORD'),
            'sid' => env('GATEWAY_SA_SENDER_ID'),
            'fl' => "0",
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Maps
    |--------------------------------------------------------------------------
    |
    | This is the array of Classes that maps to Drivers above.
    | You can create your own driver if you like and add the
    | config in the drivers array and the class to use for
    | here with the same name. You will have to extend
    | Tzsk\Sms\Abstracts\Driver in your driver.
    |
    */
    'map' => [
        'gatewaySa' => \Azima\Sms\Drivers\gatewaySa::class,
    ]
];
