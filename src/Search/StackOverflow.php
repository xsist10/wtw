<?php

namespace Xsist10\WTW\Search;

use Xsist10\WTW\Search\SearchAdapter;

class StackOverflow implements SearchAdapter
{
    public function buildSearchUrl($errorMessage)
    {
        return 'http://stackoverflow.com/search?q=' . urlencode($errorMessage);
    }
}