<?php

namespace Darabonba\Url\Tests;

use PHPUnit\Framework\TestCase;
use Darabonba\Url\Client;

/**
 * @internal
 * @coversNothing
 */
class ClientTest extends TestCase
{
    public function testParseUrl()
    {
        $client = new Client();
        $url    = $client->parseUrl('https://sdk:test@ecs.aliyuncs.com:443/sdk/?api&ok=test#sddd');
        $this->assertEquals([
            'scheme' => 'https',
            'auth'   => [
                'username' => 'sdk',
                'password' => 'test',
            ],
            'host'   => [
                'hostname' => 'ecs.aliyuncs.com',
                'port'     => '443',
            ],
            'path'   => [
                'pathname' => '/sdk/',
                'search'   => 'api&ok=test',
            ],
            'hash'   => 'sddd',
        ], $url->toMap());
    }
}
