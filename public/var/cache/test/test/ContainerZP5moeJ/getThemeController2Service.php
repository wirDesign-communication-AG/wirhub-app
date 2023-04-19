<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getThemeController2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Settings\ThemeController' shared autowired service.
     *
     * @return \AppBundle\Controller\Settings\ThemeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/ThemeController.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Services/ThemeService.php';

        return $container->services['AppBundle\\Controller\\Settings\\ThemeController'] = new \AppBundle\Controller\Settings\ThemeController(\dirname(__DIR__, 6), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['form.factory'] ?? $container->getForm_FactoryService()), ($container->privates['AppBundle\\Router\\PersistentQueryRouter'] ?? $container->getPersistentQueryRouterService()), ($container->privates['AppBundle\\Repository\\SpaceRepository'] ?? $container->getSpaceRepositoryService()), ($container->privates['AppBundle\\Repository\\Setting\\ThemeRepository'] ?? $container->getThemeRepositoryService()), ($container->privates['AppBundle\\Services\\SnackbarService'] ?? $container->load('getSnackbarServiceService')), ($container->privates['AppBundle\\Services\\ThemeService'] ??= new \AppBundle\Services\ThemeService(\dirname(__DIR__, 6))), ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()));
    }
}
