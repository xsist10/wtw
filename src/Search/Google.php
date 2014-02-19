<?php

namespace Xsist10\WTW\Search;

use Xsist10\WTW\Search\SearchAdapter;

class Google implements SearchAdapter
{
    public function buildSearchUrl($errorMessage)
    {
        return 'https://www.google.com/search?q=' . urlencode($errorMessage);
    }
}