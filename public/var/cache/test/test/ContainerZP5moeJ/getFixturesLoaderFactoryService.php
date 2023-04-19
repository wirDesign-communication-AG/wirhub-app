<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFixturesLoaderFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Liip\TestFixturesBundle\Services\FixturesLoaderFactory' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\FixturesLoaderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/liip/test-fixtures-bundle/src/Services/FixturesLoaderFactory.php';

        return $container->services['Liip\\TestFixturesBundle\\Services\\FixturesLoaderFactory'] = new \Liip\TestFixturesBundle\Services\FixturesLoaderFactory($container, ($container->privates['doctrine.fixtures.loader'] ?? $container->load('getDoctrine_Fixtures_LoaderService')));
    }
}
