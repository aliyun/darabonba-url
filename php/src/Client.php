<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Darabonba\Url;

use Darabonba\Url\Models\Auth;
use Darabonba\Url\Models\Host;
use Darabonba\Url\Models\Path;
use Darabonba\Url\Models\Url;
use Exception;

/**
 * This is for Url.
 */
class Client
{
    /**
     * Parse ref and return an object of Url.
     *
     * @param string $ref url string
     *
     * @return Url the object of Url
     */
    /**
     * Parse ref and return an object of Url.
     *
     * @param string $ref url string
     *
     * @return Url the object of Url
     */
    public static function parseUrl($ref)
    {
        $host           = new Host();
        $host->hostname = parse_url($ref, PHP_URL_HOST);
        $host->port     = parse_url($ref, PHP_URL_PORT);

        $path           = new Path();
        $path->pathname = parse_url($ref, PHP_URL_PATH);
        $path->search   = parse_url($ref, PHP_URL_QUERY);

        $auth           = new Auth();
        $auth->username = parse_url($ref, PHP_URL_USER);
        $auth->password = parse_url($ref, PHP_URL_PASS);

        $url         = new Url();
        $url->scheme = parse_url($ref, PHP_URL_SCHEME);
        $url->auth   = $auth;
        $url->host   = $host;
        $url->path   = $path;
        $url->hash   = parse_url($ref, PHP_URL_FRAGMENT);

        return $url;
    }
}
