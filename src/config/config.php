<?php

return array(
	// set this to false if you don't want to log
	'log' => true,

	// set this to false if you don't want to log Input
	'log_input' => true,

	// set thie to true if you want to log sql in every requests
	'log_sql' => false,

	// protected fields for Input
	'input_safe' => array(
		'password',
		'confirm_password'
	)
);