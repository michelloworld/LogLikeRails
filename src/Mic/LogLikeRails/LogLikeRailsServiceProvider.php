<?php namespace Mic\LogLikeRails;

use Illuminate\Support\ServiceProvider;
use Mic\LogLikeRails\LogLikeRails;

class LogLikeRailsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('mic/log-like-rails');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['router']->after(function($req) {
			LogLikeRails::log();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('LogLikeRails');
	}

}
