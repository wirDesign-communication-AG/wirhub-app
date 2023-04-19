<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttplug_MessageFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'httplug.message_factory' shared service.
     *
     * @return \Http\Message\MessageFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/php-http/message-factory/src/RequestFactory.php';
        include_once \dirname(__DIR__, 6).'/vendor/php-http/message-factory/src/ResponseFactory.php';
        include_once \dirname(__DIR__, 6).'/vendor/php-http/message-factory/src/MessageFactory.php';
        include_once \dirname(__DIR__, 6).'/vendor/php-http/discovery/src/ClassDiscovery.php';
        include_once \dirname(__DIR__, 6).'/vendor/php-http/discovery/src/MessageFactoryDiscovery.php';

        return $container->services['httplug.message_factory'] = \Http\Discovery\MessageFactoryDiscovery::find();
    }
}
