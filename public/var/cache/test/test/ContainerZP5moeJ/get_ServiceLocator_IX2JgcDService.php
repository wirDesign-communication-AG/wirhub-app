<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IX2JgcDService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.iX2JgcD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iX2JgcD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'element' => ['privates', '.errored..service_locator.iX2JgcD.AppBundle\\Entity\\Element', NULL, 'Cannot autowire service ".service_locator.iX2JgcD": it needs an instance of "AppBundle\\Entity\\Element" but this type has been excluded in "config/services.yaml".'],
            'qrCode' => ['privates', '.errored..service_locator.iX2JgcD.AppBundle\\Entity\\myHub\\QrCode', NULL, 'Cannot autowire service ".service_locator.iX2JgcD": it needs an instance of "AppBundle\\Entity\\myHub\\QrCode" but this type has been excluded in "config/services.yaml".'],
        ], [
            'element' => 'AppBundle\\Entity\\Element',
            'qrCode' => 'AppBundle\\Entity\\myHub\\QrCode',
        ]);
    }
}
