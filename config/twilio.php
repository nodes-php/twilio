<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Base API URL
    |--------------------------------------------------------------------------
    |
    | Base URL of the API. This almost (never) changes, but IF someday it does,
    | this is where you can update it.
    |
    */
    'url' => 'https://api.twilio.com',

    /*
    |--------------------------------------------------------------------------
    | API version
    |--------------------------------------------------------------------------
    |
    | Twilio API version. This almost (never) changes, but IF someday it does,
    | this is where you can update it.
    |
    */
    'version' => '2010-04-01',

    /*
    |--------------------------------------------------------------------------
    | Account credentials
    |--------------------------------------------------------------------------
    |
    | You can locate your credentials on your Twilio account page:
    | https://www.twilio.com/user/account/settings
    |
    */
    'credentials' => [
        /*
        |--------------------------------------------------------------------------
        | Account SID
        |--------------------------------------------------------------------------
        */
        'sid' => null,

        /*
        |--------------------------------------------------------------------------
        | Account Auth Token
        |--------------------------------------------------------------------------
        */
        'token' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Defaults
    |--------------------------------------------------------------------------
    |
    | These values will be used as fallback if required parameters is missing.
    |
    */
    'defaults' => [
        /*
        |--------------------------------------------------------------------------
        | SMS Messages
        |--------------------------------------------------------------------------
        |
        | Default values when sending SMS messages.
        |
        */
        'sms' => [
            /*
            |--------------------------------------------------------------------------
            | Number of sender
            |--------------------------------------------------------------------------
            */
            'from' => null
        ]
    ],
];