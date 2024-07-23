<?php

namespace Source\Controllers;

use Source\Core\Controller;
use Source\Core\Origin;
use Source\Core\Utm;

class Web extends Controller
{
	protected $theme;
	private $utm;
	private $origin;

	public function __construct($router)
	{
		parent::__construct($router);
		$this->theme = "web";

		$this->utm = new Utm();
		$this->origin = new Origin();

		$this->renderOptions = array_merge($this->renderOptions, [
			"theme" => $this->theme
		]);
	}

	public function home(): void
	{
		$this->renderOptions = array_merge($this->renderOptions, [
			"mediaId" => $this->origin->init(),
			"media" => $this->utm->init(),
			"campanha_nome" => site("campanha_nome"),
			"campanha_id" => site("campanha_id"),
			"title" => "Wizard On"
		]);

		echo $this->view->addData($this->renderOptions)->render("$this->theme::pages/home");
	}

	public function agradecimento(): void
	{
		// if ($this->session->__get("lead")) {
		$this->renderOptions = array_merge($this->renderOptions, [
			"brandName" => $this->session->__get("brand_name"),
			"title" => "Sucesso!",
		]);

		echo $this->view->addData($this->renderOptions)->render("$this->theme::pages/agradecimento");
		// } else {
		// 	$this->router->redirect("web.home");
		// }
	}

	public function error(): void
	{
		echo $this->view->render("$this->theme::pages/error/error", [
			"title" => "Erro",
			"page" => "erro",
		]);
	}
}
