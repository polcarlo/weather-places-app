<?php

namespace App\Providers;

use App\Apis\ForecastApi;
use App\Apis\VenueApi;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->bind('forecast_api_resource', function ($app) {
			$base_path = config('services.forecast.base_path');
			$api_key = config('services.forecast.api_key');
			$country_code = config('services.forecast.country_code');
			return new ForecastApi($base_path, $api_key, $country_code);
		});

		$this->app->bind('venue_api_resource', function ($app) {
			$base_path = config('services.venue.base_path');
			$client_id = config('services.venue.client_id');
			$client_secret = config('services.venue.client_secret');
			$version = config('services.venue.version');
			$country_code = config('services.venue.country_code');
			return new VenueApi($base_path, $client_id, $client_secret, $version, $country_code);
		});
	}
}
