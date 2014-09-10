Laravel 4 - LogLikeRails
===================

A package for Laravel 4 to log every requests and input like Ruby On Rails.

##### *** YOU DON'T HAVE TO ADD LOG BY YOURSELF. THIS PACKAGE WILL LOG EVERY REQUEST.

![Log-Like-Rails Example](https://raw.githubusercontent.com/michelloworld/LogLikeRails/master/example.png)

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