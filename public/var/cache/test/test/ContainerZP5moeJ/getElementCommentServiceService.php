<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getElementCommentServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Services\Element\ElementCommentService' shared autowired service.
     *
     * @return \AppBundle\Services\Element\ElementCommentService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Services/Element/ElementCommentService.php';

        return $container->privates['AppBundle\\Services\\Element\\ElementCommentService'] = new \AppBundle\Services\Element\ElementCommentService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['AppBundle\\Router\\PersistentQueryRouter'] ?? $container->getPersistentQueryRouterService()), ($container->privates['AppBundle\\Repository\\SmartBlock\\Attribute\\UserRepository'] ?? $container->getUserRepository2Service()), ($container->privates['AppBundle\\Repository\\Element\\ElementCommentRepository'] ?? $container->getElementCommentRepositoryService()), ($container->privates['AppBundle\\Services\\SpaceService'] ?? $container->getSpaceServiceService()), ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()));
    }
}
