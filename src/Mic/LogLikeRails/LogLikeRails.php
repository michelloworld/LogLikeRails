<?php namespace Mic\LogLikeRails;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Input;

class LogLikeRails {

	public static function log() {
		if(!Config::get('log-like-rails::log')) {
			return;
		}
		
		$path = Request::path();
		$route = Route::currentRouteAction();
		$ip = Request::getClientIp();
		$method = Request::method();

		$msg = array(
			'Processing',
			(empty($route) ? $path : $route),
			'(for ' . $ip . ')',
			'['.$method.']'
		);

		$msg = array_where($msg, function($key, $value) {
		  if(!empty($value)) {
		  	return $value;
		  }
		});

		$msg = implode(' ', $msg);

		// log main message
		Log::info($msg);

		// log Input
		$inputSafe = Config::get('log-like-rails::input_safe');
		if(Config::get('log-like-rails::log_input')) {
			if(!empty(Input::all())) {
				$inputs = Input::all();
				foreach($inputSafe as $safe) {
					if(!empty($inputs[$safe])) {
						$inputs[$safe] = '[*** SENSOR ***]';	
					}
				}
				Log::info($inputs);
			}
		}

		
		// set thie to true if you want to log sql in every requests
		// 'log_sql' => false,

		// // log sql
		// if(Config::get('log-like-rails::log_sql')) {
		// 	Event::listen('illuminate.query', function($query, $params, $time, $conn) use($inputSafe) {
		// 	  Log::info('SQL: ' . $query);
		// 	  if(!empty($params)) {
		// 	  	Log::info('SQL VALUE: ('.implode($params, ', ').')');	
		// 	  }
		// 	});	
		// }
	}

}