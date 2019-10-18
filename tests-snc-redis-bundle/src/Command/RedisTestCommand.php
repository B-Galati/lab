<?php

namespace App\Command;

use Snc\RedisBundle\Command\RedisBaseCommand;

class RedisTestCommand extends RedisBaseCommand
{
    protected static $defaultName = 'app:redis:test';

    /**
     * Method which gets called by execute(). Used for code unique to the command
     */
    protected function executeRedisCommand()
    {
        /** @var \RedisCluster|\Redis $client */
        $client = $this->redisClient;
        dump($client);
        dump(get_class($client));
        dump($client->set('test', 1));
        dump($client->get('test'));
//        dump($client->flushAll(''));
//        dump($client->flushDB(''));
    }
}
