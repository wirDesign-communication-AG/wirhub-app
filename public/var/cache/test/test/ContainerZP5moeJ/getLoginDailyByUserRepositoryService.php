<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginDailyByUserRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Repository\Metrics\LoginDailyByUserRepository' shared autowired service.
     *
     * @return \AppBundle\Repository\Metrics\LoginDailyByUserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Repository/Metrics/LoginDailyByUserRepository.php';

        return $container->privates['AppBundle\\Repository\\Metrics\\LoginDailyByUserRepository'] = new \AppBundle\Repository\Metrics\LoginDailyByUserRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
