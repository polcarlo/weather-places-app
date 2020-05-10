<?php

namespace App\Http\Controllers;

class VenueController extends Controller {
	public function getCategories() {
		$api = resolve('venue_api_resource');

		$response = $api->getCategories();

		return $response;
	}

	public function searchPlaces($near, $category) {
		$api = resolve('venue_api_resource');

		$response = $api->getPlaceNear($near, $category);

		return $response;
	}

}
