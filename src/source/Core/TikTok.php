<?php

namespace Source\Core;

use Source\Core\Log;
use Source\Core\Http;
use Exception;
use stdClass;

class TikTok
{
	public function track(string $eventType, string $eventId, array $userData = [])
	{
		$body = array(
			"pixel_code" => TIKTOK["pixelId"],
			"event" => $eventType,
			"event_id" => $eventId,
			"context" => array(
				"page" => array(
					"url" => site("root"),
					"referrer" => site("root")
				),
				"user" => $userData,
			)
		);

		$http = new Http();

		$post = $http->post(TIKTOK["url"], $body, null, TIKTOK["accessToken"]);

		return;
	}

	public function prepareUserData(string $userName = "", string $userEmail = "", string $userPhone = "")
	{
		return array(
			"name" => hash('sha256', $userName),
			"phone_number" => hash('sha256', $userEmail),
			"email" => hash('sha256', $userPhone),
		);
	}
}
