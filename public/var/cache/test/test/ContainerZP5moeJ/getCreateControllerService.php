<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Element\CreateController' shared autowired service.
     *
     * @return \AppBundle\Controller\Element\CreateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Element/CreateController.php';

        return $container->services['AppBundle\\Controller\\Element\\CreateController'] = new \AppBundle\Controller\Element\CreateController(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['AppBundle\\Services\\Element\\ElementService'] ?? $container->getElementServiceService()), ($container->privates['AppBundle\\Services\\Element\\ElementFormService'] ?? $container->load('getElementFormServiceService')), ($container->privates['AppBundle\\Services\\ResponseService'] ?? $container->load('getResponseServiceService')), ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()));
    }
}
