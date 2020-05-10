<?php

namespace App\Apis;

use GuzzleHttp\Client;

class VenueApi {
	public function __construct($api_base_url, $client_id, $client_secret, $version, $country_code) {
		$this->api_base_url = $api_base_url;
		$this->client_id = $client_id;
		$this->client_secret = $client_secret;
		$this->version = $version;
		$this->country_code = $country_code;
	}

	public function getCategories() {
		$url = $this->api_base_url . '/categories?client_id=' . $this->client_id . '&client_secret=' . $this->client_secret . '&v=' . $this->version;

		$client = new Client([
			'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
		]);
		$response = $client->request('GET', $url, ['http_errors' => false]);
		$data = $response->getBody();

		if ($response->getStatusCode() === 200) {

			return $data;
		}

		return $response->getStatusCode();
	}

	public function getPlaceNear($near, $category) {

		$url = $this->api_base_url . '/explore?near=' . $near . '&v=' . $this->version . '&client_id=' . $this->client_id . '&client_secret=' . $this->client_secret . '&categoryId=' . $category;

		$client = new Client([
			'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
		]);
		$response = $client->request('GET', $url, ['http_errors' => false]);
		$data = $response->getBody();

		if ($response->getStatusCode() === 200) {

			return $data;
		}

		return $response->getStatusCode();

	}
}