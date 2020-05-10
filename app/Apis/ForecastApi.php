<?php

namespace App\Apis;

use GuzzleHttp\Client;

class ForecastApi {
	public function __construct($api_base_url, $api_key, $country_code) {
		$this->api_base_url = $api_base_url;
		$this->api_key = $api_key;
		$this->country_code = $country_code;
	}

	public function getForecastByCity($city) {

		$url = $this->api_base_url . '/forecast?q=' . $city . ',' . $this->country_code . '&appid=' . $this->api_key;

		$client = new Client([
			'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
		]);
		$response = $client->request('POST', $url, ['http_errors' => false]);
		$data = $response->getBody();

		if ($response->getStatusCode() === 200) {

			return $data;
		}

		return $response->getStatusCode();

	}
}