<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\EventSubscriber\UserSubscriber' shared autowired service.
     *
     * @return \AppBundle\EventSubscriber\UserSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/EventSubscriber/UserSubscriber.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['AppBundle\\EventSubscriber\\UserSubscriber'])) {
            return $container->privates['AppBundle\\EventSubscriber\\UserSubscriber'];
        }
        $b = ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService());

        if (isset($container->privates['AppBundle\\EventSubscriber\\UserSubscriber'])) {
            return $container->privates['AppBundle\\EventSubscriber\\UserSubscriber'];
        }
        $c = ($container->privates['AppBundle\\Services\\UserMailService'] ?? $container->load('getUserMailServiceService'));

        if (isset($container->privates['AppBundle\\EventSubscriber\\UserSubscriber'])) {
            return $container->privates['AppBundle\\EventSubscriber\\UserSubscriber'];
        }

        return $container->privates['AppBundle\\EventSubscriber\\UserSubscriber'] = new \AppBundle\EventSubscriber\UserSubscriber(($container->privates['AppBundle\\Repository\\Metrics\\LoginRepository'] ?? $container->load('getLoginRepositoryService')), ($container->privates['AppBundle\\Repository\\Metrics\\LoginDailyByUserRepository'] ?? $container->load('getLoginDailyByUserRepositoryService')), $a, ($container->privates['AppBundle\\Services\\Setting\\LocaleService'] ?? $container->getLocaleServiceService()), $b, $c);
    }
}
