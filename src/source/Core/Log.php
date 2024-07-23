<?php

namespace Source\Core;

use Exception;
use stdClass;

class Log
{
	public function __construct($type, $logData)
	{
		$this->type = $type;
		$this->logData = json_encode($logData);
		$this->dateTime =  date("Y-m-d H:i:s");

		// Settings
		$this->logDir = dirname(__DIR__, 2) . "\\logs\\";
		$this->logFile = "log_" . date("Y-m-d") . ".txt";

		$this->prepareToWrite();
	}

	public function prepareToWrite()
	{
		if (!is_writable($this->logDir)) {
			if (!chmod($this->logDir, 0777))
				chmod($this->logDir, 0777);
			else
				echo "Escrita não pode ser habilitada para o diretório {$this->logDir}. Consulte o administrador do sistema.";
		}

		if (!file_exists($this->logDir))
			mkdir($this->logDir, 0777);
	}

	public function saveLog()
	{
		$logContent = "[" . date('Y-m-d H:i:s') . "] || [{$this->type}] || {$this->logData}" . PHP_EOL;

		if (file_put_contents($this->logDir . $this->logFile, $logContent, FILE_APPEND)) {
			return true;
		}

		return false;
	}
}
