<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\PluginController' shared autowired service.
     *
     * @return \AppBundle\Controller\PluginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/PluginController.php';

        return $container->services['AppBundle\\Controller\\PluginController'] = new \AppBundle\Controller\PluginController();
    }
}
