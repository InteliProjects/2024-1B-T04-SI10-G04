<?php

namespace Source\Controllers;

use Source\Core\Controller;
use Source\Core\Tiktok;

class Lead extends Controller
{
	protected $theme;

	public function __construct($router)
	{
		parent::__construct($router);
	}

	public function post(): void
	{
		$ret = new \stdClass();

		$postData = $_POST;

		$brandName = $_POST['marca'];

		$curlUrl = ($brandName == 'wizard ON') ? lead('urlOn') : lead();

		$fields = $this->prepareFields($postData);

		$curl = curl_init();
		$submittedAt = time() * 1000;

		$data = array(
			CURLOPT_URL => $curlUrl,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_POSTFIELDS => '{
			"submittedAt": "' . $submittedAt . '",
			"fields": [' . $fields . '],
			"context": {
				"pageUri": "' . site("root") . '",
				"pageName": "Wizard"
			},
			"legalConsentOptions": {
				"consent": {
					"consentToProcess": true,
					"text": "I agree to allow Wizard to store and process my personal data.",
					"communications": [
						{
							"value": true,
							"subscriptionTypeId": 999,
							"text": "I agree to receive marketing communications from Wizard."
						}
					]
				}
			}
		}',
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
			),
		);

		curl_setopt_array($curl, $data);

		$response = curl_exec($curl);
		$error = curl_error($curl);

		curl_close($curl);

		if ($error) {
			$ret->Error = true;
			$ret->Message = "Não foi possível gravar o Lead. Tente novamente.";
			$ret->ErrorMessage = $error;
		} else {
			$response = json_decode($response);

			if (isset($response->status) && $response->status == "error") {
				$ret->Error = true;

				if ($response->errors[0]->errorType == "INVALID_EMAIL") {
					$ret->Message = "E-mail inválido.";
				} else {
					$ret->Message = $response->errors;
				}
			} else {
				$this->session->set("lead", true);
				$this->session->set("brand_name", $brandName);
				$ret->Success = true;
				$ret->Message = $response->inlineMessage;

				// Dispara o evento de Subscribe do TikTok via backend, com o mesmo id do frontend, para que o TikTok entenda a veracidade do evento.
				// O evento não é duplicado no Analytics do TikTok, ele entende essa duplicidade e considera como um evento único.

				// $ttq = new Tiktok();
				// $tikTokUserData = $ttq->prepareUserData($postData["firstname"], $postData["email"], $postData["phone"]);
				// $tikTokTrack = $ttq->track("Subscribe", site("userSession"), $tikTokUserData);

				if ($brandName != "wizard ON")
					$_SESSION["userUnit"] = $postData["selecione_a_unidade"];
			}
		}

		echo json_encode($ret);
	}

	private function prepareFields($data)
	{
		$result = "";

		foreach ($data as $key => $value) {
			$result .= '{ "name": "' . $key . '" , "value": "' . $value . '" }, ';
		}

		$result = substr($result, 0, -2);

		return $result;
	}
}
