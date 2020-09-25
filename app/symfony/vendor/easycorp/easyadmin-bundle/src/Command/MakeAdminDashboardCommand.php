<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Command;

use EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\String\Slugger\AsciiSlugger;
use function Symfony\Component\String\u;

/**
 * Generates the PHP class needed to define a Dashboard controller.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class MakeAdminDashboardCommand extends Command
{
    protected static $defaultName = 'make:admin:dashboard';
    private $classMaker;
    private $projectDir;

    public function __construct(ClassMaker $classMaker, string $projectDir, string $name = null)
    {
        parent::__construct($name);
        $this->classMaker = $classMaker;
        $this->projectDir = $projectDir;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $fs = new Filesystem();

        $controllerClassName = $io->ask('Which class name do you prefer for your Dashboard controller?', 'DashboardController', static function(string $className) {
            return u($className)->ensureEnd('Controller')->toString();
        });

        $projectDir = $this->projectDir;
        $controllerDir = $io->ask(
            sprintf('Which directory do you want to generate "%s" in?', $controllerClassName),
            'src/Controller/Admin/',
            static function(string $selectedDir) use ($fs, $projectDir, $controllerClassName) {
                $absoluteDir = u($selectedDir)->ensureStart($projectDir.DIRECTORY_SEPARATOR);
                if (!$fs->exists($absoluteDir)) {
                    throw new \RuntimeException('The given directory does not exist. Type in the path of an existing directory relative to your project root (e.g. src/Controller/Admin/)');
                }

                return $absoluteDir->after($projectDir.DIRECTORY_SEPARATOR)->trimEnd(DIRECTORY_SEPARATOR)->toString();
            }
        );

        $controllerFilePath = sprintf('%s/%s.php', u($controllerDir)->ensureStart($projectDir.DIRECTORY_SEPARATOR), $controllerClassName);
        if ($fs->exists($controllerFilePath)) {
            throw new \RuntimeException(sprintf('The "%s.php" file already exists in the given "%s" directory. Use a different controller name or generate it in a different directory.', $controllerClassName, $controllerDir));
        }

        $guessedNamespace = u($controllerDir)->equalsTo('src')
            ? 'App'
            : u($controllerDir)->replace('/', ' ')->replace('\\', ' ')->replace('src ', 'app ')->title(true)->replace(' ', '\\');

        $generatedFilePath = $this->classMaker->make(sprintf('%s/%s.php', $controllerDir, $controllerClassName), 'dashboard.tpl', [
            'namespace' => $guessedNamespace,
            'site_title' => $this->getSiteTitle($this->projectDir),
        ]);

        $io = new SymfonyStyle($input, $output);
        $io->success('Your dashboard class has been successfully generated.');
        $io->text('Next steps:');
        $io->listing([
            sprintf('Configure your Dashboard at "%s"', $generatedFilePath),
            sprintf('Run "make:admin:crud" to generate CRUD controllers and link them from the Dashboard.'),
        ]);

        return 0;
    }

    private function getSiteTitle(string $projectDir): string
    {
        $guessedTitle = (new AsciiSlugger())
            ->slug(basename($projectDir), ' ')
            ->title(true)
            ->trim()
            ->toString();

        return empty($guessedTitle) ? 'EasyAdmin' : $guessedTitle;
    }
}
