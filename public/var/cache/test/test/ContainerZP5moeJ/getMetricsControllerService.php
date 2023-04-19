<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMetricsControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Feature\MetricsController' shared autowired service.
     *
     * @return \AppBundle\Controller\Feature\MetricsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Feature/MetricsController.php';

        return $container->services['AppBundle\\Controller\\Feature\\MetricsController'] = new \AppBundle\Controller\Feature\MetricsController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['AppBundle\\Repository\\CategoryRepository'] ?? $container->getCategoryRepositoryService()), ($container->privates['AppBundle\\Services\\Feature\\MetricsService'] ?? $container->load('getMetricsServiceService')), ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()));
    }
}
