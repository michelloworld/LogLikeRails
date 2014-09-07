Laravel 4 - LogLikeRails
===================

A package for Laravel 4 to log every requests like Ruby On Rails

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