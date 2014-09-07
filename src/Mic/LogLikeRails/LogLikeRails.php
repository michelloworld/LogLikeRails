<?php namespace Mic\LogLikeRails;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Config;

class LogLikeRails {

	public static function log() {

		if(!Config::get('log-like-rails::log')) {
			return;
		}
		
		$path = substr(Request::path(), 0, 1) == '/' ? Request::path() : '/'.Request::path();
		$route = Route::currentRouteName();
		$ip = Request::getClientIp();
		$date = date('Y-m-d H:i:s');
		$method = Request::method();

		$msg = array(
			'Processing',
			$route,
			$path,
			'(for '. $ip . ' at ' . $date . ')',
			'['.$method.']'
		);

		$msg = array_where($msg, function($key, $value) {
		  if(!empty($value)) {
		  	return $value;
		  }
		});

		$msg = implode(' ', $msg);

		Log::info($msg);
	}

}