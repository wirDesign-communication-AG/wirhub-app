<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getToolbarControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Element\ToolbarController' shared autowired service.
     *
     * @return \AppBundle\Controller\Element\ToolbarController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Element/ToolbarController.php';

        return $container->services['AppBundle\\Controller\\Element\\ToolbarController'] = new \AppBundle\Controller\Element\ToolbarController(($container->privates['twig'] ?? $container->getTwigService()));
    }
}
