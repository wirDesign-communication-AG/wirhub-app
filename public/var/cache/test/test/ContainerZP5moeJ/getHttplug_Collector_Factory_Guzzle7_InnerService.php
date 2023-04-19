<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_Collector_Factory_Guzzle7_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'httplug.collector.factory.guzzle7.inner' shared service.
     *
     * @return \Http\HttplugBundle\ClientFactory\Guzzle7Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/php-http/httplug-bundle/src/ClientFactory/ClientFactory.php';
        include_once \dirname(__DIR__, 6).'/vendor/php-http/httplug-bundle/src/ClientFactory/Guzzle7Factory.php';

        return $container->privates['httplug.collector.factory.guzzle7.inner'] = new \Http\HttplugBundle\ClientFactory\Guzzle7Factory();
    }
}
