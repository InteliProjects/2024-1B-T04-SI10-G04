<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

require dirname(__DIR__, 2) . "\\vendor\\autoload.php";

use \ScssPhp\ScssPhp\Compiler;
use \ScssPhp\ScssPhp\OutputStyle;

function compileThemesCss()
{
	// Get all CSS
	// 1. Get All Themes Array
	$themesDir = dirname(__DIR__, 2) . "/assets/";
	$themes = array_diff(scandir($themesDir), ['..', '.', 'core']);

	foreach ($themes as $theme) {
		$assetsFolder = dirname(__DIR__, 2) . "/themes/{$theme}";
		$compiler = new Compiler();
		$mapsDir = dirname(__DIR__, 2) . "/themes/{$theme}/css/maps/";
		$compiledDir = dirname(__DIR__, 2) . "/themes/{$theme}/css/";

		$compiler->setOutputStyle(OutputStyle::COMPRESSED);
		$compiler->setSourceMap(Compiler::SOURCE_MAP_FILE);

		$compiler->setSourceMapOptions([
			"sourceMapURL" => $mapsDir . $theme . ".map",
			"sourceMapFilename" => $compiledDir . $theme . ".min.css",
			"sourceMapBasepath" => dirname(__DIR__, 1),
		]);

		// Load Theme Default Styles
		$compiler->setImportPaths(dirname(__DIR__, 2) . "/assets/{$theme}/styles/");
		$defaultStylesFiles = file_get_contents(dirname(__DIR__, 2) . "/assets/{$theme}/styles/styles.scss");

		// Final Style
		$finalStyle = $defaultStylesFiles;
		$compiledStyle = $compiler->compileString($finalStyle);

		// Check if CSS folder exists
		if (!file_exists($assetsFolder . "/css"))
			mkdir($assetsFolder . "/css", 0777, true);

		// Check if CSS maps folder exists
		if (!file_exists($assetsFolder . "/css/maps"))
			mkdir($assetsFolder . "/css/maps", 0777, true);

		// Generate compiled CSS and Map
		file_put_contents($mapsDir . $theme . ".map", $compiledStyle->getSourceMap());
		file_put_contents($compiledDir . $theme . ".min.css", $compiledStyle->getCss());
	}
}

/**
 * CSS Core (Plugins)
 */
function compileCoreCss()
{
	$themesDir = dirname(__DIR__, 2) . "/assets/";
	$theme = "core";

	$assetsFolder = dirname(__DIR__, 2) . "/themes/{$theme}";
	$cssPluginFolder = $themesDir . $theme . "/styles";

	$cssPluginFiles = glob($cssPluginFolder . "/*/*.css");
	$cssPlugin = "";

	// Loads plugins which is not JQuery and Moment
	foreach ($cssPluginFiles as $file) {
		$cssPlugin .= file_get_contents($file);
	}

	if (!file_exists($assetsFolder . "/css"))
		mkdir($assetsFolder . "/css", 0777, true);

	$cssPluginMinifier = new \MatthiasMullie\Minify\CSS();
	$cssPluginMinifier->add($cssPlugin);
	$cssPluginMinifier->minify($assetsFolder . "/css/{$theme}.min.css");
}

/**
 * Themes JS (included Core)
 */
function compileThemesJs()
{
	$themesDir = dirname(__DIR__, 2) . "/assets/";
	$themes = array_diff(scandir($themesDir), ['..', '.']);

	foreach ($themes as $theme) {
		$assetsFolder = dirname(__DIR__, 2) . "/themes/{$theme}";
		$jsPluginFolder = $themesDir . $theme . "/scripts";

		$jsPluginFiles = glob($jsPluginFolder . "/*/*.js");
		$jqueryPath = $jsPluginFolder . "/jquery/jquery.min.js";
		$momentPath = $jsPluginFolder . "/moment/moment.min.js";

		// Loads JQuery and Moment plugin first
		$jsPlugin = file_exists($jqueryPath) ? file_get_contents($jqueryPath) : "";
		$jsPlugin .= file_exists($momentPath) ? file_get_contents($momentPath) : "";

		// Loads plugins which is not JQuery and Moment
		foreach ($jsPluginFiles as $file) {
			if ($file != $jqueryPath)
				$jsPlugin .= file_get_contents($file);
		}

		if (!file_exists($assetsFolder . "/js"))
			mkdir($assetsFolder . "/js", 0777, true);

		$jsPluginMinifier = new \MatthiasMullie\Minify\JS();
		$jsPluginMinifier->add($jsPlugin);
		$jsPluginMinifier->minify($assetsFolder . "/js/{$theme}.min.js");
	}
}


(function () {
	print_r("Compilando CSS dos temas... \r\n");
	compileThemesCss();

	print_r("Compilando Plugins CSS dos temas... \r\n");
	compileCoreCss();

	print_r("Compilando Plugins JS dos temas... \r\n");
	compileThemesJs();

	print_r("Compilação finalizada!");
})();

die();
