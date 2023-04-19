<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarkedAsNewEventSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\EventSubscriber\Category\MarkedAsNewEventSubscriber' shared autowired service.
     *
     * @return \AppBundle\EventSubscriber\Category\MarkedAsNewEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/EventSubscriber/Category/MarkedAsNewEventSubscriber.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['AppBundle\\EventSubscriber\\Category\\MarkedAsNewEventSubscriber'])) {
            return $container->privates['AppBundle\\EventSubscriber\\Category\\MarkedAsNewEventSubscriber'];
        }

        return $container->privates['AppBundle\\EventSubscriber\\Category\\MarkedAsNewEventSubscriber'] = new \AppBundle\EventSubscriber\Category\MarkedAsNewEventSubscriber(($container->privates['AppBundle\\Repository\\Category\\NotNewAnymoreRepository'] ?? $container->getNotNewAnymoreRepositoryService()), $a, ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
