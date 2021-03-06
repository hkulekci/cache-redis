<?php
namespace tests;

use Soupmix;

class RedisCacheTest extends AbstractTestCases
{
    /**
     * @var \Soupmix\Cache\RedisCache $client
     */
    protected $client = null;

    protected function setUp()
    {
        $this->client = new Soupmix\Cache\RedisCache([
            'host'   => '127.0.0.1',
        ]);
        $this->client->clear();
    }
}
