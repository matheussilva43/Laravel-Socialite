<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'twitter' => [
        'client_id' => '', //Seu ID do cliente
        'client_secret' => '', // sua Chave secreta do cliente
        'redirect' => 'http://127.0.0.1:8000/login/twitter/callback'
    ],

    'facebook' => [
        'client_id' => '', //Seu ID do cliente
        'client_secret' => '', // sua Chave secreta do cliente
        'redirect' => 'http://127.0.0.1:8000/login/facebook/callback'
    ],

    'linkedin' => [
        'client_id' => '', //Seu ID do cliente
        'client_secret' => '', // sua Chave secreta do cliente
        'redirect' => 'http://127.0.0.1:8000/login/linkedin/callback'
    ],

    'google' => [
        'client_id' => '', //Seu ID do cliente
        'client_secret' => '', // sua Chave secreta do cliente
        'redirect' => 'http://127.0.0.1:8000/login/google/callback'
    ],

    'github' => [
        'client_id' => '', //Seu ID do cliente
        'client_secret' => '', // sua Chave secreta do cliente
        'redirect' => 'http://127.0.0.1:8000/login/github/callback'
    ],

];
