<?php

namespace Shopify\Redirector;

use Shopify\Redirector;

class HeaderRedirector implements Redirector
{
    public function redirect($uri)
    {
        header('Location: '.$uri);
        exit(0);
    }
}
