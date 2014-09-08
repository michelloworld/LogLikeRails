Laravel 4 - LogLikeRails
===================

A package for Laravel 4 to log every requests like Ruby On Rails.

##### *** YOU DON'T HAVE TO ADD LOG BY YOURSELF. THIS PACKAGE WILL LOG EVERY REQUEST.

![Log-Like-Rails Example](https://photos-6.dropbox.com/t/0/AADOq0qWDH80KUPT3jJFTCTzrldqrhB6-LLOsyuF0CRsUQ/12/47846630/png/1024x768/3/1410195600/0/2/example.png/i5KWsZ5tsqeOWzwOGKErYt4wd7e0nap4fXN3azk3Goc)

Installation
-------------

Add LogLikeRails as a requirement to composer.json:
```
{
  ...
  "require": {
    ...
    "mic/log-like-rails": "dev-master"
    ...
  },
}
```

Update composer:
```
    php composer.phar update
```

Add the provider to your app/config/app.php:
```
  'providers' => array(
  
    ...
    
    'Mic\LogLikeRails\LogLikeRailsServiceProvider',
    
  ),
```

Publish package config:
```
  php artisan config:publish mic/log-like-rails
```