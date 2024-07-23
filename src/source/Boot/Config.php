<?php
define("SITE_LOCAL", "g4.intelli-wizard-on.com.br");
define("SITE_HOMOLOG", "g4.intelli-wizard-on.mmserver.com.br");
define("SITE_PROD", "promocoes.wizard.com.br");
define("ORIGIN_REFER", "wizard");

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";

if ($_SERVER['SERVER_NAME'] == SITE_LOCAL) {
	$root = $protocol . SITE_LOCAL;
	$url_API = $protocol . SITE_LOCAL;
	require "Minify.php";
} elseif ($_SERVER['SERVER_NAME'] == SITE_HOMOLOG) {
	$root = $protocol . SITE_HOMOLOG;
	$url_API = $protocol . SITE_HOMOLOG;
} elseif ($_SERVER['SERVER_NAME'] == SITE_PROD) {
	$root = $protocol . SITE_PROD;
	$url_API = $protocol . SITE_PROD;
}

define("SITE", [
	"name" => "Wizard On",
	"description" => "Estude com quem garante o seu aprendizado!",
	"locale" => "pt_BR",
	"imageSharer" => "sharer.jpg",
	"root" => $root,
	"campaignId" => 300125,
	"campaignName" => "Inteli Grupo 4",
	"userSession" => session_id()
]);

define("API", [
	"url" => $url_API,
]);

/**
 * CONFIGURAÇÃO DO TIKTOK
 *
 * As credenciais foram retiradas por motivos de sigilo e segurança.
 * O código da configuração segue abaixo para fins demonstrativos.
 */

// define("TIKTOK", [
// 	"url" => "https://business-api.tiktok.com/open_api/v1.3/pixel/track/",
// 	"accessToken" => "",
// 	"pixelId" => ""
// ]);

/**
 * CONFIGURAÇÃO DO LEAD NO HUBSPOT
 *
 * As credenciais foram retiradas por motivos de sigilo e segurança.
 * O código da configuração segue abaixo para fins demonstrativos.
 * Eles são as URLs da API do HubSpot para envio dos Leads.
 * 'url' corresponde aos leads com unidade selecionada no cadastro e 'urlOn' corresponde aos leads sem unidade (plataforma online). Cada tipo de lead seguirá um fluxo.
 */

define("LEAD", [
	"urlOn" => "https://api.hsforms.com/submissions/v3/integration/submit/21427909/06c48412-5a5d-4b3a-bde3-33ab7295a8e4"
]);

define("ROUTE_NAMES", []);
