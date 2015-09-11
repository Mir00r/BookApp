<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1664897717081662',
        'client_secret' => '861b1c2542379c0401c66cdaf533f7d4',
        'redirect' => 'http://localhost:8000/easyAuth/facebook',
    ],

    'github' => [
        'client_id' => 'd8561b80e176e99a0a43',
        'client_secret' => 'a4d4db12611ec5695eb2fe675e0b15361c0f0410',
        'redirect' => 'http://localhost:8000/library',
    ],

];
