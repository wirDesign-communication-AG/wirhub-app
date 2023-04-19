<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jhv3gH4Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.Jhv3gH4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jhv3gH4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'registry' => ['services', 'doctrine', 'getDoctrineService', false],
            'snackbarService' => ['privates', 'AppBundle\\Services\\SnackbarService', 'getSnackbarServiceService', true],
        ], [
            'registry' => '?',
            'snackbarService' => 'AppBundle\\Services\\SnackbarService',
        ]);
    }
}
