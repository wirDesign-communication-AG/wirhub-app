<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Element\SmartBlock\IconList\ListController' shared autowired service.
     *
     * @return \AppBundle\Controller\Element\SmartBlock\IconList\ListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Element/SmartBlock/IconList/ListController.php';

        return $container->services['AppBundle\\Controller\\Element\\SmartBlock\\IconList\\ListController'] = new \AppBundle\Controller\Element\SmartBlock\IconList\ListController(($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['AppBundle\\Services\\FileService'] ?? $container->getFileServiceService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['AppBundle\\Services\\SnackbarService'] ?? $container->load('getSnackbarServiceService')), ($container->privates['AppBundle\\Repository\\SmartBlock\\IconList\\IconRepository'] ?? $container->getIconRepositoryService()));
    }
}
