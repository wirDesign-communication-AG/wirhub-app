<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BnW4n5XService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.bnW4n5X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bnW4n5X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'locale' => ['privates', '.errored..service_locator.bnW4n5X.AppBundle\\Entity\\Setting\\Locale', NULL, 'Cannot autowire service ".service_locator.bnW4n5X": it needs an instance of "AppBundle\\Entity\\Setting\\Locale" but this type has been excluded in "config/services.yaml".'],
        ], [
            'locale' => 'AppBundle\\Entity\\Setting\\Locale',
        ]);
    }
}
