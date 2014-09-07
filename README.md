Laravel 4 - LogLikeRails
===================

A package for Laravel 4 to log every requests like Ruby On Rails

Installation
-------------

1. Add LogLikeRails as a requirement to composer.json:
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