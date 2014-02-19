<?php

namespace Xsist10\WTW\Search;

use Xsist10\WTW\Search\SearchAdapter;

class DuckDuckGo implements SearchAdapter
{
    public function buildSearchUrl($errorMessage)
    {
        return 'https://duckduckgo.com/?q=' . urlencode($errorMessage);
    }
}