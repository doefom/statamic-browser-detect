<?php

namespace Doefom\StatamicBrowserDetect;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{

    protected $tags = [
        \Doefom\StatamicBrowserDetect\Tags\BrowserTag::class,
    ];

    public function bootAddon()
    {
        //
    }
}
