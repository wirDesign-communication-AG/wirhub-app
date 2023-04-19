<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fu0MMMHService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.Fu0MMMH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fu0MMMH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'element' => ['privates', '.errored..service_locator.Fu0MMMH.AppBundle\\Entity\\Element', NULL, 'Cannot autowire service ".service_locator.Fu0MMMH": it needs an instance of "AppBundle\\Entity\\Element" but this type has been excluded in "config/services.yaml".'],
            'iconDownload' => ['privates', '.errored..service_locator.Fu0MMMH.AppBundle\\Entity\\SmartBlock\\IconDownload', NULL, 'Cannot autowire service ".service_locator.Fu0MMMH": it needs an instance of "AppBundle\\Entity\\SmartBlock\\IconDownload" but this type has been excluded in "config/services.yaml".'],
        ], [
            'element' => 'AppBundle\\Entity\\Element',
            'iconDownload' => 'AppBundle\\Entity\\SmartBlock\\IconDownload',
        ]);
    }
}
