<?php

return [
    'products' => [
        'url' => env('SERVICES_PRODUCTS_URL')
    ],
    'ratings' => [
        'url' => env('SERVICES_RATINGS_URL')
    ],
    'warehouse' => [
        'url' => env('SERVICES_WAREHOUSE_URL')
    ],

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

];
