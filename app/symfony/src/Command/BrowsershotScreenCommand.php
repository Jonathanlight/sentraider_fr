<?php

namespace App\Command;

use App\Services\BrowsershotService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class BrowsershotScreenCommand extends Command
{
    protected static $defaultName = 'app:browsershot:screen';

    /**
     * @var BrowsershotService
     */
    protected $browsershotService;

    public function __construct(BrowsershotService $browsershotService, string $name = null)
    {
        parent::__construct($name);
        $this->browsershotService = $browsershotService;
    }

    protected function configure()
    {
        $this
            ->setDescription('Screenshot')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $this->browsershotService->screenshotHtml();

        $io->success('You have launch a new screen **** ');

        return 0;
    }
}
