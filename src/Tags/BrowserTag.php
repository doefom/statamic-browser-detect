<?php

namespace Doefom\StatamicBrowserDetect\Tags;

use Statamic\Tags\Tags;
use Browser;

class BrowserTag extends Tags
{

    protected static $handle = 'browser';

    public function wildcard($method)
    {
        return Browser::$method();
    }

}
