Laravel 4 - LogLikeRails
===================

A package for Laravel 4 to log every requests like Ruby On Rails.

##### *** YOU DON'T HAVE TO ADD LOG BY YOURSELF. THIS PACKAGE WILL LOG EVERY REQUEST.

![Log-Like-Rails Example](https://photos-3.dropbox.com/t/0/AABqq1p3hoQ6HXeygnXq47AhbAPHA7SmmqNVkwD5m3o6rw/12/47846630/png/32x32/3/_/1/2/example.png/QrjY71OKxW8LMrYbmmviEgU08X1GzP1zmP9MVleQiKc?size=1280x960)

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