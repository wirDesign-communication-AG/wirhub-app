<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\DashboardController' shared autowired service.
     *
     * @return \AppBundle\Controller\DashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/DashboardController.php';

        return $container->services['AppBundle\\Controller\\DashboardController'] = new \AppBundle\Controller\DashboardController(($container->privates['AppBundle\\Repository\\DashboardRepository'] ?? $container->getDashboardRepositoryService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['form.factory'] ?? $container->getForm_FactoryService()), ($container->privates['AppBundle\\Services\\System\\MenuService'] ?? $container->load('getMenuServiceService')), ($container->privates['AppBundle\\Services\\ResponseService'] ?? $container->load('getResponseServiceService')), ($container->privates['AppBundle\\Router\\PersistentQueryRouter'] ?? $container->getPersistentQueryRouterService()), ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()));
    }
}
