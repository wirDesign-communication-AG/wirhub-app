<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pw7CO1wService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.pw7CO1w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pw7CO1w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'asset' => ['privates', '.errored..service_locator.pw7CO1w.AppBundle\\Entity\\Connection\\Mediacockpit\\Asset', NULL, 'Cannot autowire service ".service_locator.pw7CO1w": it needs an instance of "AppBundle\\Entity\\Connection\\Mediacockpit\\Asset" but this type has been excluded in "config/services.yaml".'],
            'element' => ['privates', '.errored..service_locator.pw7CO1w.AppBundle\\Entity\\Element', NULL, 'Cannot autowire service ".service_locator.pw7CO1w": it needs an instance of "AppBundle\\Entity\\Element" but this type has been excluded in "config/services.yaml".'],
        ], [
            'asset' => 'AppBundle\\Entity\\Connection\\Mediacockpit\\Asset',
            'element' => 'AppBundle\\Entity\\Element',
        ]);
    }
}
