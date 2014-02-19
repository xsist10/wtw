<?php

namespace Xsist10\WTW;

use Xsist10\WTW\Search\SearchAdapter;
use \Exception;

class ErrorManager extends DumpManager
{
    /**
     * @var array
     */
    private $logLevels = array();

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

    public function error($errorNumber, $errString, $errFile, $errLine)
    {
        if (in_array($errorNumber, $this->logLevels))
        {
            $this->process($errString);
            exit(1);
        }
    }

    public function exception(Exception $exception)
    {
        $this->process($exception->getMessage());
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