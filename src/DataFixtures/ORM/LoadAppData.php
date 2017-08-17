<?php

namespace App\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Fidry\AliceDataFixtures\Loader\PersisterLoader;
use Fidry\AliceDataFixtures\Loader\SimpleLoader;
use Nelmio\Alice\Loader\SimpleFileLoader;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadAppData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $loader = $this->container->get('fidry_alice_data_fixtures.doctrine.persister_loader');
        $loader->load([
            __DIR__ . '/data/skill_main_category.yaml',
            __DIR__ . '/data/skill_secondary_category.yaml',
            __DIR__ . '/data/skill.yaml',
        ]);
    }
}
