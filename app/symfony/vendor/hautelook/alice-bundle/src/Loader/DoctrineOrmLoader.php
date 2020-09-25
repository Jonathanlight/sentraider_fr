<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\Loader;

use Doctrine\DBAL\Sharding\PoolingShardConnection;
use Doctrine\ORM\EntityManagerInterface;
use Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister;
use Fidry\AliceDataFixtures\LoaderInterface;
use Fidry\AliceDataFixtures\Persistence\PersisterAwareInterface;
use Fidry\AliceDataFixtures\Persistence\PersisterInterface;
use Fidry\AliceDataFixtures\Persistence\PurgeMode;
use Hautelook\AliceBundle\BundleResolverInterface;
use Hautelook\AliceBundle\FixtureLocatorInterface;
use Hautelook\AliceBundle\LoaderInterface as AliceBundleLoaderInterface;
use Hautelook\AliceBundle\LoggerAwareInterface;
use InvalidArgumentException;
use LogicException;
use Nelmio\Alice\IsAServiceTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Bundle\FrameworkBundle\Console\Application;

class DoctrineOrmLoader implements AliceBundleLoaderInterface, LoggerAwareInterface
{
    use IsAServiceTrait;

    private $bundleResolver;
    private $fixtureLocator;
    /** @var LoaderInterface|PersisterAwareInterface */
    private $purgeLoader;
    /** @var LoaderInterface|PersisterAwareInterface */
    private $appendLoader;
    private $logger;

    public function __construct(
        BundleResolverInterface $bundleResolver,
        FixtureLocatorInterface $fixtureLocator,
        LoaderInterface $purgeLoader,
        LoaderInterface $appendLoader,
        LoggerInterface $logger = null
    ) {
        $this->bundleResolver = $bundleResolver;
        $this->fixtureLocator = $fixtureLocator;

        if (false === $purgeLoader instanceof PersisterAwareInterface) {
            throw new InvalidArgumentException(
                sprintf(
                    'Expected loader to be an instance of "%s".',
                    PersisterAwareInterface::class
                )
            );
        }

        if (false === $appendLoader instanceof PersisterAwareInterface) {
            throw new InvalidArgumentException(
                sprintf(
                    'Expected loader to be an instance of "%s".',
                    PersisterAwareInterface::class
                )
            );
        }

        $this->purgeLoader = $purgeLoader;
        $this->appendLoader = $appendLoader;
        $this->logger = $logger ?? new NullLogger();
    }

    /**
     * {@inheritdoc}
     */
    public function withLogger(LoggerInterface $logger): self
    {
        return new self(
            $this->bundleResolver,
            $this->fixtureLocator,
            $this->purgeLoader,
            $this->appendLoader,
            $logger
        );
    }

    /**
     * {@inheritdoc}
     */
    public function load(
        Application $application,
        EntityManagerInterface $manager,
        array $bundles,
        string $environment,
        bool $append,
        bool $purgeWithTruncate,
        string $shard = null,
        bool $noBundles = false
    ) {
        if ($append && $purgeWithTruncate) {
            throw new LogicException(
                'Cannot append loaded fixtures and at the same time purge the database. Choose one.'
            );
        }

        if (!$noBundles) {
            $bundles = $this->bundleResolver->resolveBundles($application, $bundles);
        }

        $fixtureFiles = $this->fixtureLocator->locateFiles($bundles, $environment);

        $this->logger->info('fixtures found', ['files' => $fixtureFiles]);

        if (null !== $shard) {
            $this->connectToShardConnection($manager, $shard);
        }

        $purgeMode = $this->retrievePurgeMode($append, $purgeWithTruncate);

        $fixtures = $this->loadFixtures(
            $append ? $this->appendLoader : $this->purgeLoader,
            $manager,
            $fixtureFiles,
            $application->getKernel()->getContainer()->getParameterBag()->all(),
            $purgeMode
        );

        $this->logger->info('fixtures loaded');

        return $fixtures;
    }

    protected function createPersister(EntityManagerInterface $manager): PersisterInterface
    {
        return new ObjectManagerPersister($manager);
    }

    /**
     * @param LoaderInterface|PersisterAwareInterface $loader
     * @param string[]                                $files
     *
     * @return object[]
     */
    protected function loadFixtures(
        LoaderInterface $loader,
        EntityManagerInterface $manager,
        array $files,
        array $parameters,
        ?PurgeMode $purgeMode
    ) {
        $persister = $this->createPersister($manager);

        $loader = $loader->withPersister($persister);

        return $loader->load($files, $parameters, [], $purgeMode);
    }

    private function connectToShardConnection(EntityManagerInterface $manager, string $shard)
    {
        $connection = $manager->getConnection();
        if ($connection instanceof PoolingShardConnection) {
            $connection->connect($shard);

            return;
        }

        throw new InvalidArgumentException(
            sprintf(
                'Could not establish a shard connection for the shard "%s". The connection must be an instance'
                .' of "%s", got "%s" instead.',
                $shard,
                PoolingShardConnection::class,
                \get_class($connection)
            )
        );
    }

    private function retrievePurgeMode(bool $append, bool $purgeWithTruncate): ?PurgeMode
    {
        if ($append) {
            return null;
        }

        return (true === $purgeWithTruncate)
            ? PurgeMode::createTruncateMode()
            : PurgeMode::createDeleteMode()
        ;
    }
}
