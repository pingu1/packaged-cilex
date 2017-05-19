<?php

namespace app\command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Cilex\Provider\Console\Command;

class HelloCommand extends Command
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('Gently say hello')
            ->addArgument('name', InputArgument::OPTIONAL, 'Name to say hello to')
            ->addOption('yell', 'y', InputOption::VALUE_NONE, 'Say it loudly, in ALL CAPS');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name') ?: 'world';
        $text = "Hello {$name}";

	if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}
