<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Hautelook\AliceBundle\Alice\Generator\Instantiator\Chainable;

use Hautelook\AliceBundle\Functional\TestBundle\Entity\City;
use Hautelook\AliceBundle\Functional\TestBundle\Entity\CityFactory;
use Nelmio\Alice\Definition\Fixture\SimpleFixture;
use Nelmio\Alice\Definition\MethodCall\MethodCallWithReference;
use Nelmio\Alice\Definition\MethodCallBag;
use Nelmio\Alice\Definition\PropertyBag;
use Nelmio\Alice\Definition\ServiceReference\InstantiatedReference;
use Nelmio\Alice\Definition\ServiceReference\StaticReference;
use Nelmio\Alice\Definition\SpecificationBag;
use Nelmio\Alice\FixtureBag;
use Nelmio\Alice\Generator\GenerationContext;
use Nelmio\Alice\Generator\Instantiator\ChainableInstantiatorInterface;
use Nelmio\Alice\Generator\ResolvedFixtureSet;
use Nelmio\Alice\ObjectBag;
use Nelmio\Alice\ParameterBag;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use Symfony\Component\DependencyInjection\Container;

/**
 * @covers \Hautelook\AliceBundle\Alice\Generator\Instantiator\Chainable\InstantiatedReferenceInstantiator
 */
class InstantiatedReferenceInstantiatorTest extends TestCase
{
    public function testIsAChainableInstantiator()
    {
        $this->assertTrue(is_a(InstantiatedReferenceInstantiator::class, ChainableInstantiatorInterface::class, true));
    }

    public function testIsNotClonable()
    {
        $this->assertFalse((new ReflectionClass(InstantiatedReferenceInstantiator::class))->isCloneable());
    }

    public function testCannotInstantiateFixtureWithDefaultConstructor()
    {
        $fixture = new SimpleFixture('dummy', 'Dummy', new SpecificationBag(null, new PropertyBag(), new MethodCallBag()));
        $instantiator = new InstantiatedReferenceInstantiator();

        $this->assertFalse($instantiator->canInstantiate($fixture));
    }

    public function testCannotInstantiateFixtureWithStaticFactoryMethodCallConstructor()
    {
        $fixture = new SimpleFixture(
            'dummy',
            'Dummy',
            new SpecificationBag(
                new MethodCallWithReference(
                    new StaticReference('foo'),
                    'bar'
                ),
                new PropertyBag(),
                new MethodCallBag()
            )
        );
        $instantiator = new InstantiatedReferenceInstantiator();

        $this->assertFalse($instantiator->canInstantiate($fixture));
    }

    public function testCanInstantiateFixtureWitAServiceReferenceFactory()
    {
        $fixture = new SimpleFixture(
            'dummy',
            'Dummy',
            new SpecificationBag(
                new MethodCallWithReference(
                    new InstantiatedReference('foo'),
                    'bar'
                ),
                new PropertyBag(),
                new MethodCallBag()
            )
        );
        $instantiator = new InstantiatedReferenceInstantiator();

        $this->assertTrue($instantiator->canInstantiate($fixture));
    }

    public function testThrowsAnExceptionIfNoContainerIsSetWhilstTryingToInstantiateObject()
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Expected instantiator method "Hautelook\AliceBundle\Alice\Generator\Instantiator\Chainable\InstantiatedReferenceInstantiator::instantiate" to be used only if it has a container, but no container could be found.');

        $fixture = new SimpleFixture(
            'dummy',
            City::class,
            new SpecificationBag(
                new MethodCallWithReference(
                    new InstantiatedReference(
                        'city_factory'
                    ),
                    'create',
                    [
                        'foo',
                    ]
                ),
                new PropertyBag(),
                new MethodCallBag()
            )
        );
        $set = new ResolvedFixtureSet(new ParameterBag(), (new FixtureBag())->with($fixture), new ObjectBag());

        $instantiator = new InstantiatedReferenceInstantiator();
        $instantiator->instantiate($fixture, $set, new GenerationContext());
    }

    public function testInstantiatesObjectWithFactoryAndArguments()
    {
        $fixture = new SimpleFixture(
            'dummy',
            City::class,
            new SpecificationBag(
                new MethodCallWithReference(
                    new InstantiatedReference(
                        'city_factory'
                    ),
                    'create',
                    [
                        'foo',
                    ]
                ),
                new PropertyBag(),
                new MethodCallBag()
            )
        );
        $container = new Container();
        $container->set('city_factory', $cityFactory = new CityFactory());

        $instantiator = new InstantiatedReferenceInstantiator();
        $instantiator->setContainer($container);

        $set = new ResolvedFixtureSet(new ParameterBag(), (new FixtureBag())->with($fixture), new ObjectBag());
        $set = $instantiator->instantiate($fixture, $set, new GenerationContext());

        $expected = $cityFactory->create('foo');
        $actual = $set->getObjects()->get($fixture)->getInstance();

        $this->assertEquals($expected, $actual);
    }

    public function testThrowsAnExceptionIfTheInstantiatedFixtureIsNotOfTheClassExpected()
    {
        $this->expectException(\Nelmio\Alice\Throwable\Exception\Generator\Instantiator\InstantiationException::class);
        $this->expectExceptionMessage('Instantiated fixture was expected to be an instance of "Dummy". Got "Hautelook\AliceBundle\Functional\TestBundle\Entity\City" instead.');

        $fixture = new SimpleFixture(
            'dummy',
            'Dummy',
            new SpecificationBag(
                new MethodCallWithReference(
                    new InstantiatedReference(
                        'city_factory'
                    ),
                    'create',
                    [
                        'foo',
                    ]
                ),
                new PropertyBag(),
                new MethodCallBag()
            )
        );
        $container = new Container();
        $container->set('city_factory', $cityFactory = new CityFactory());

        $instantiator = new InstantiatedReferenceInstantiator();
        $instantiator->setContainer($container);

        $set = new ResolvedFixtureSet(new ParameterBag(), (new FixtureBag())->with($fixture), new ObjectBag());
        $instantiator->instantiate($fixture, $set, new GenerationContext());
    }
}
