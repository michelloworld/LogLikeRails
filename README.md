Laravel 4 - LogLikeRails
===================

A package for Laravel 4 to log every requests like Ruby On Rails

Installation
-------------

1. Add LogLikeRails as a requirement to composer.json:
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

2. Update composer:
```
	php composer.phar update
```

3. Add the provider to your app/config/app.php
```
  'providers' => array(
  
    ...
    
    'Mic\LogLikeRails\LogLikeRailsServiceProvider',
    
  ),
```

4. Publish package config
```
	php artisan config:publish mic/log-like-rails
```