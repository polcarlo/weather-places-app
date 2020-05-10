<?php

return [

	/*
		    |--------------------------------------------------------------------------
		    | Third Party Services
		    |--------------------------------------------------------------------------
		    |
		    | This file is for storing the credentials for third party services such
		    | as Mailgun, Postmark, AWS and more. This file provides the de facto
		    | location for this type of information, allowing packages to have
		    | a conventional file to locate the various service credentials.
		    |
	*/

	'mailgun' => [
		'domain' => env('MAILGUN_DOMAIN'),
		'secret' => env('MAILGUN_SECRET'),
		'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
	],

	'postmark' => [
		'token' => env('POSTMARK_TOKEN'),
	],

	'ses' => [
		'key' => env('AWS_ACCESS_KEY_ID'),
		'secret' => env('AWS_SECRET_ACCESS_KEY'),
		'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
	],
	'forecast' => [
		'base_path' => env('FORECAST_BASE_PATH'),
		'api_key' => env('FORECAST_API_KEY'),
		'country_code' => env('FORECAST_COUNTRY_CODE'),
	],
	'venue' => [
		'base_path' => env('VENUE_BASE_PATH'),
		'client_id' => env('VENUE_CLIENT_ID'),
		'client_secret' => env('VENUE_CLIENT_SECRET'),
		'version' => env('VENUE_VERSION'),
		'country_code' => env('VENUE_COUNTRY_CODE'),
	],
];
