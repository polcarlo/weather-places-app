<?php

namespace App\Http\Controllers;

class ForecastController extends Controller {
	public function searchForecastByCity($city) {
		$api = resolve('forecast_api_resource');

		$response = $api->getForecastByCity($city);

		return $response;
	}
}
