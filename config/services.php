<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '557744154235-pouk7c42t4qa1cg8duo1fpo69b6rui4v.apps.googleusercontent.com',
        'client_secret' => 'T43vAZLQKP0H2icOGOTG17Y8',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'github' => [
        'client_id' => '8788d17700fa0270849f',
        'client_secret' => '29b0054e2f73074817ef2e71c9cd57f18c5c9ad5',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],

];
