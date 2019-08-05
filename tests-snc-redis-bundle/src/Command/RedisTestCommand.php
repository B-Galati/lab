<?php

namespace App\Command;

use Predis\Client;
use Snc\RedisBundle\Command\RedisBaseCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class RedisTestCommand extends RedisBaseCommand
{
    protected static $defaultName = 'app:redis:test';

    protected function configure()
    {
        parent::configure();
        $this
            ->setDescription('Add a short description for your command')
//            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
//            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

//    protected function execute(InputInterface $input, OutputInterface $output)
//    {
//        $io = new SymfonyStyle($input, $output);
//
//        /** @var Client $client */
//        $client = $this->container->get('snc_redis.cluster');
//$client = $this->container->get('snc');
//        $client->set('test', 1);
//        dump($client->get('test'));
//        $arg1 = $input->getArgument('arg1');
//
//        if ($arg1) {
//            $io->note(sprintf('You passed an argument: %s', $arg1));
//        }
//
//        if ($input->getOption('option1')) {
//             ...
//        }
//
//        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
//    }

    /**
     * Method which gets called by execute(). Used for code unique to the command
     */
    protected function executeRedisCommand()
    {
        $client = $this->redisClient;
        $client->set('test', 1);
        dump($client->get('test'));
    }
}
