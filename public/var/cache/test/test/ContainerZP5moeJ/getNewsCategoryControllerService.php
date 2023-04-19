<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsCategoryControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Settings\Feature\NewsCategoryController' shared autowired service.
     *
     * @return \AppBundle\Controller\Settings\Feature\NewsCategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Feature/NewsCategoryController.php';

        return $container->services['AppBundle\\Controller\\Settings\\Feature\\NewsCategoryController'] = new \AppBundle\Controller\Settings\Feature\NewsCategoryController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['form.factory'] ?? $container->getForm_FactoryService()), ($container->privates['AppBundle\\Repository\\Setting\\Feature\\NewsCategoryRepository'] ?? $container->getNewsCategoryRepositoryService()), ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService')), ($container->privates['AppBundle\\Services\\ResponseService'] ?? $container->load('getResponseServiceService')), ($container->privates['AppBundle\\Repository\\User\\SettingsRepository'] ?? $container->getSettingsRepositoryService()));
    }
}
