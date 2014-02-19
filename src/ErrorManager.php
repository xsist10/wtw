<?php

namespace Xsist10\WTW;

use Xsist10\WTW\Search\SearchAdapter;
use \Exception;

class ErrorManager
{
    const SEARCH_ENGINE = 'https://www.google.com';
    const Exceptions = 0;

    private $logLevels = array();
    private $handleExceptions = false;

    private $searchEngine = null;

    public function __construct(SearchAdapter $searchEngine)
    {
        $this->searchEngine = $searchEngine;
    }

    public function addLevel($logLevel)
    {
        $this->logLevels[$logLevel] = $logLevel;
        return $this;
    }

    public function handleExceptions()
    {
        set_exception_handler(array($this, "exception"));
    }

    public function register()
    {
        set_error_handler(array($this, "error"));
        register_shutdown_function(array($this, "shutdown"));
    }

    private function launchBrowser($url)
    {
        if (defined('PHP_WINDOWS_VERSION_MAJOR'))
        {
            exec('start "" ' . escapeshellarg($url));
        }
        else
        {
            exec('xdg-open ' . escapeshellarg($url));
        }
    }

    public function error($errorNumber, $errString, $errFile, $errLine)
    {
        if (in_array($errorNumber, $this->logLevels))
        {
            $this->launchBrowser($this->searchEngine->buildSearchUrl($errString));
            exit(1);
        }
    }

    public function exception(Exception $exception)
    {
        $this->launchBrowser($this->searchEngine->buildSearchUrl($exception->getMessage()));
        exit(1);
    }

    public function shutdown()
    {
        $error = error_get_last();
        $this->error(
            $error['type'],
            $error['message'],
            $error['file'],
            $error['line']
        );
    }
}