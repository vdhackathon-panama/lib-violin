<?php
namespace Violin;

class Service {
	public $baseURL;

	public function __construct($baseURL) {
		$this->baseURL = trim($baseURL, '/');

	}

	public function postData($method, $data) {
		if (is_array($data)) {
			$curlOb = curl_init();
			
			curl_setopt($curlOb, CURLOPT_URL, $this->baseURL . "/$method?" . http_build_query($data));
			curl_exec($curlOb);
			curl_close($curlOb);
		}
	}
}
