<?php

namespace Source\Core;

use CoffeeCode\Router\Router;
use League\Plates\Engine;
use Exception;
use Mobile_Detect;

abstract class Controller extends Session
{
	protected mixed $router;
	protected mixed $view;
	protected mixed $requestData;
	protected array $renderOptions;
	protected mixed $session;

	public function __construct($router)
	{
		$this->router = $router;
		$this->session = new Session();
		$this->view = new Engine(dirname(__DIR__, 2) . "/themes");
		$this->view->addData([
			"router" => $this->router,
			"siteName" => site("name"),
			"siteUrl" => site("root"),
			"siteDescription" => site("description"),
			"imageSharer" => site("imageSharer"),
		]);
		$this->view->addFolder("web", dirname(__DIR__, 2) . "/themes/web", true);
		$this->renderOptions = [];

		$requestData = file_get_contents('php://input');
		$this->requestData = json_decode($requestData);
	}

	public function decodeResponse(string $param, mixed $values): string
	{
		return json_encode([$param => $values]);
	}

	public function response(mixed $request): string
	{
		$response = ($request->Error == true) ? $this->decodeResponse("Error", $request) : $this->decodeResponse("Success", $request);
		return $response;
	}

	public function ajaxMessage(string $message, string $type): string
	{
		return json_encode(["message" => "<div class=\"message {$type}\">{$message}</div>"]);
	}

	public function getRenderOptions(array $options = []): array
	{
		$renderOptions = array_merge($options, ["renderOptions" => $options]);

		return $renderOptions;
	}
}
