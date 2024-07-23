<?php

use \ScssPhp\ScssPhp\Compiler;
use \ScssPhp\ScssPhp\OutputStyle;
use MatthiasMullie\Minify\JS;

function site(string $param = null): string
{
	if ($param && !empty(SITE[$param]))
		return SITE[$param];

	return SITE["root"];
}

function lead(string $param = null): string
{
	if ($param && !empty(LEAD[$param]))
		return LEAD[$param];

	return LEAD["url"];
}

function asset(string $theme, string $path, bool $time = true, bool $returnPath = false): string
{
	$file = SITE["root"] . "/themes/{$theme}/{$path}";
	$fileOnDir = dirname(__DIR__, 2) . "/themes/{$theme}/{$path}";
	if ($time && file_exists($fileOnDir)) {
		$file .= "?time=" . filemtime($fileOnDir);
	}

	return ($returnPath == true) ? $fileOnDir : $file;
	// return $file;
}

function debug($data, bool $dump = false): void
{
	echo "<pre>";

	if ($dump == true)
		var_dump($data);
	else
		print_r($data);

	echo "</pre>";
	die();
}

function getCSS(string $theme): string
{
	$compile = true;

	if ($compile == false)
		return $theme . ".min.css";

	if ($_SERVER['SERVER_NAME'] == "www-local.store.wizard.com.br") {
		$compiler = new Compiler();
		$mapsDir = dirname(__DIR__, 2) . "/themes/{$theme}/assets/css/maps/";
		$compiledDir = dirname(__DIR__, 2) . "/themes/{$theme}/assets/css/";

		$compiler->setOutputStyle(OutputStyle::COMPRESSED);
		$compiler->setSourceMap(Compiler::SOURCE_MAP_FILE);

		$compiler->setSourceMapOptions([
			"sourceMapURL" => $mapsDir . $theme . ".map",
			"sourceMapFilename" => $compiledDir . $theme . ".min.css",
			"sourceMapBasepath" => dirname(__DIR__, 1),
		]);

		// Load Theme Default Styles
		$compiler->setImportPaths(dirname(__DIR__, 2) . "/themes/{$theme}/assets/css/source/custom/");
		$defaultStylesFiles = file_get_contents(dirname(__DIR__, 2) . "/themes/{$theme}/assets/css/source/custom/styles.scss");

		// Final Style
		$finalStyle = $defaultStylesFiles;
		$compiledStyle = $compiler->compileString($finalStyle);

		// Check if CSS maps folder exists
		if (!file_exists($mapsDir))
			mkdir($mapsDir, 0700);

		// Generate compiled CSS and Map
		file_put_contents($mapsDir . $theme . ".map", $compiledStyle->getSourceMap());
		file_put_contents($compiledDir . $theme . ".min.css", $compiledStyle->getCss());
	}

	try {


		return $theme . ".min.css";
	} catch (\Exception $e) {
		echo '';
		syslog(LOG_ERR, 'scssphp: Unable to compile content');
	}
}

function getJS(string $theme, string $page): string
{
	if ($_SERVER['SERVER_NAME'] == "www-local.store.wizard.com.br") {
		$compiler = new JS();

		$compiledDir = dirname(__DIR__, 2) . "/themes/{$theme}/assets/js/";

		$compiler->add(file_get_contents($compiledDir . "source/{$page}.js"));
		$compiler->minify($compiledDir . $page . ".min.js");
	}

	return $page . ".min.js";
}

function formatarCpf($doc)
{
	$doc = preg_replace("/[^0-9]/", "", $doc);
	$qtd = strlen($doc);

	if ($qtd >= 11) {

		$docFormatado = substr($doc, 0, 3) . '.' .
			substr($doc, 3, 3) . '.' .
			substr($doc, 6, 3) . '-' .
			substr($doc, 9, 2);

		return $docFormatado;
	} else {
		return 'Documento invalido';
	}
}

function printMoney($value = 0, $showCurrency = false)
{
	$currency = $showCurrency == true ? "R$ " : "";
	return $currency . number_format($value, 2, ',', '.');
}

function printDate($date, $printTime = true)
{
	$date = date_create($date);
	return $printTime == true ? date_format($date, 'd/m/Y') . " às " . date_format($date, 'H:i') : date_format($date, 'd/m/Y');
}

function brandCsreditCard($number)
{
	$brands = array(
		"elo" => '/^4011(78|79)|^43(1274|8935)|^45(1416|7393|763(1|2))|^50(4175|6699|67[0-6][0-9]|677[0-8]|9[0-8][0-9]{2}|99[0-8][0-9]|999[0-9])|^627780|^63(6297|6368|6369)|^65(0(0(3([1-3]|[5-9])|4([0-9])|5[0-1])|4(0[5-9]|[1-3][0-9]|8[5-9]|9[0-9])|5([0-2][0-9]|3[0-8]|4[1-9]|[5-8][0-9]|9[0-8])|7(0[0-9]|1[0-8]|2[0-7])|9(0[1-9]|[1-6][0-9]|7[0-8]))|16(5[2-9]|[6-7][0-9])|50(0[0-9]|1[0-9]|2[1-9]|[3-4][0-9]|5[0-8]))/',
		"amex" => "/^3[47][0-9]{13}$/",
		"aura" => "/^((?!504175))^((?!5067))(^50[0-9])/",
		"diners" => "/^3(?:0[0-5]|[68][0-9])[0-9]/",
		"discover" => "/^6(?:011|5[0-9]{2})[0-9]{12}/",
		'visa'       => '/^4[0-9]{15}$/',
		'mastercard' => '/^(5[1-5]\d{4}|677189)\d{10}$/',
		'hipercard'  => '/^(606282\d{10}(\d{3})?)|(3841\d{15})$/',
	);

	$brand = 'undefined';

	foreach ($brands as $_brand => $regex) {
		if (preg_match($regex, $number)) {
			$brand = $_brand;
			break;
		}
	}

	return $brand;
}

function printAddress($addressObject, $linebreak = "-", $tag = "span")
{
	$street = (!empty($addressObject->Street)) ? $addressObject->Street : "";
	$number = (!empty($addressObject->Number)) ? $addressObject->Number : "s/n";
	$neighborhood = (!empty($addressObject->Neighborhood)) ? $addressObject->Neighborhood : "";
	$complement = (!empty($addressObject->Complement)) ? $addressObject->Complement : "";
	$zipCode = (!empty($addressObject->ZipCode)) ? "CEP: " . mask($addressObject->ZipCode, "#####-###") : "";

	if (is_object(@$addressObject->City)) {
		$city = $addressObject->City->Name;
		$state = mb_strtoupper($addressObject->City->State->Code);
	} else {
		$city = (!empty($addressObject->City)) ? $addressObject->City : "";
		$state = (!empty($addressObject->State)) ? $addressObject->State : "";
	}

	$address = "<{$tag}>{$street}, {$number}</{$tag}> - <{$tag}>{$neighborhood}</{$tag}> - <{$tag}>{$city} / {$state} </{$tag}> {$linebreak} <{$tag}>{$zipCode}</{$tag}>";


	return $address;
	// return mb_convert_case($address, MB_CASE_TITLE, 'UTF-8');
}

function mask($val, $mask)
{
	$maskared = '';
	$k = 0;
	for ($i = 0; $i <= strlen($mask) - 1; $i++) {
		if ($mask[$i] == '#') {
			if (isset($val[$k]))
				$maskared .= $val[$k++];
		} else {
			if (isset($mask[$i]))
				$maskared .= $mask[$i];
		}
	}
	return $maskared;
}

function getFileContent($file)
{
	return file_get_contents($file);
}
