<?php

namespace Source\Core;

use Source\Core\Log;
use Exception;
use stdClass;

class Http
{
	public function post($url, array $data, string $token = null, string $type = "application/json; charset=utf-8"): stdClass
	{
		$curl = curl_init();

		$httpHeader = array();

		$httpHeader[] = 'Content-Type: ' . $type;

		if ($token) {
			$httpHeader[] = 'Authorization: Bearer ' . $token;
		}

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => $httpHeader,
		));

		$response = curl_exec($curl);
		$responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$runtime = curl_getinfo($curl, CURLINFO_TOTAL_TIME);

		curl_close($curl);

		$response = json_decode($response);

		$logData = new \stdClass();
		$logData->url = $url;
		$logData->runtime = $runtime;

		$log = (new Log("Http POST Request", $logData))->saveLog();

		return $this->validateReturn($response, $responseCode);
	}

	public function get($url, string $token = null, array $data = null): stdClass
	{
		$curl = curl_init();

		$httpHeader = array();

		if ($token)
			$httpHeader[] = 'Authorization: Bearer ' . $token;

		if (!empty($data)) {
			$queryParams = http_build_query($data, '', '&');
			$queryParams = "?" . str_replace("_", ".", $queryParams);
		} else
			$queryParams = "";

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url . $queryParams,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => $httpHeader,
		));

		$response = curl_exec($curl);
		$responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$runtime = curl_getinfo($curl, CURLINFO_TOTAL_TIME);

		curl_close($curl);

		$response = json_decode($response);
		$logData = new \stdClass();
		$logData->url = $url . $queryParams;
		$logData->runtime = $runtime;

		$log = (new Log("Http GET Request", $logData))->saveLog();

		return $this->validateReturn($response, $responseCode);
	}

	public function put($url, array $data, string $token = null, $type = "application/json; charset=utf-8"): stdClass
	{
		$curl = curl_init();

		$httpHeader = array();

		$httpHeader[] = 'Content-Type: ' . $type;

		if ($token) {
			$httpHeader[] = 'Authorization: Bearer ' . $token;
		}

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => $httpHeader,
		));

		$response = curl_exec($curl);
		$responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$runtime = curl_getinfo($curl, CURLINFO_TOTAL_TIME);

		curl_close($curl);

		$response = json_decode($response);
		$logData = new \stdClass();
		$logData->url = $url;
		$logData->runtime = $runtime;

		$log = (new Log("Http PUT Request", $logData))->saveLog();

		return $this->validateReturn($response, $responseCode);
	}

	public function delete(string $url, string $token = null): stdClass
	{
		$curl = curl_init();

		$httpHeader = array();

		if ($token) {
			$httpHeader[] = 'Authorization: Bearer ' . $token;
		}

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'DELETE',
			CURLOPT_HTTPHEADER => $httpHeader,
		));

		$response = curl_exec($curl);
		$responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$runtime = curl_getinfo($curl, CURLINFO_TOTAL_TIME);

		curl_close($curl);

		$response = json_decode($response);
		$logData = new \stdClass();
		$logData->url = $url;
		$logData->runtime = $runtime;

		$log = (new Log("Http DELETE Request", $logData))->saveLog();

		return $this->validateReturn($response, $responseCode);
	}

	public function validateReturn($response, $responseCode): stdClass
	{
		if ($responseCode == 200) {
			if ((isset($response->has_error) && $response->has_error == true) || isset($response->error))
				return $this->returnError(409, $response->error);
			else
				return $response;
		} else {
			return $this->returnError($responseCode, !empty($response->ErrorMessage) ? $response->ErrorMessage : "");
		}
	}

	public function returnError(int $errorCode = 409, string $errorMessage = "Ocorreu um erro. Tente novamente."): stdClass
	{
		$return = new stdClass;
		$return->Error = true;
		$return->ErrorCode = $errorCode;
		$return->ErrorMessage = $errorMessage;

		return $return;
	}
}
