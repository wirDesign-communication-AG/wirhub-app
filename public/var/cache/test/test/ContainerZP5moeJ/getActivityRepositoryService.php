<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActivityRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Repository\User\ActivityRepository' shared autowired service.
     *
     * @return \AppBundle\Repository\User\ActivityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Repository/User/ActivityRepository.php';

        return $container->privates['AppBundle\\Repository\\User\\ActivityRepository'] = new \AppBundle\Repository\User\ActivityRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
