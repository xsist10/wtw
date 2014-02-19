<?php

namespace Xsist10\WTW;

use Xsist10\WTW\Search\SearchAdapter;
use \Exception;

class DumpManager
{
    /**
     * @var Xsist10\WTW\Search\SearchAdapter
     */
    private $searchEngine = null;

    /**
     * Build a new dump manager
     *
     * @param Xsist10\WTW\Search\SearchAdapter $searchEngine Which search engine to use
     *
     * @return Xsist10\WTW\DumpManager
     */
    public function __construct(SearchAdapter $searchEngine)
    {
        $this->searchEngine = $searchEngine;
    }

    protected function launchBrowser($url)
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

    public function process($dump)
    {
        $this->launchBrowser($this->searchEngine->buildSearchUrl($dump));
        exit(1);
    }
}