<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTmpCleanUpCronjobSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\EventSubscriber\Cronjob\TmpCleanUpCronjobSubscriber' shared autowired service.
     *
     * @return \AppBundle\EventSubscriber\Cronjob\TmpCleanUpCronjobSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Component/Interfaces/IsCronjobEventSubscriberInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/EventSubscriber/Cronjob/TmpCleanUpCronjobSubscriber.php';

        $a = ($container->privates['AppBundle\\Services\\System\\CronjobService'] ?? $container->getCronjobServiceService());

        if (isset($container->privates['AppBundle\\EventSubscriber\\Cronjob\\TmpCleanUpCronjobSubscriber'])) {
            return $container->privates['AppBundle\\EventSubscriber\\Cronjob\\TmpCleanUpCronjobSubscriber'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['AppBundle\\EventSubscriber\\Cronjob\\TmpCleanUpCronjobSubscriber'])) {
            return $container->privates['AppBundle\\EventSubscriber\\Cronjob\\TmpCleanUpCronjobSubscriber'];
        }

        return $container->privates['AppBundle\\EventSubscriber\\Cronjob\\TmpCleanUpCronjobSubscriber'] = new \AppBundle\EventSubscriber\Cronjob\TmpCleanUpCronjobSubscriber($a, $b);
    }
}
