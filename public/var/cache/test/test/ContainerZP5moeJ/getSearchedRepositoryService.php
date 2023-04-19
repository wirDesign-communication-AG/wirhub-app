<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchedRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Repository\SearchedRepository' shared autowired service.
     *
     * @return \AppBundle\Repository\SearchedRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Repository/SearchedRepository.php';

        return $container->privates['AppBundle\\Repository\\SearchedRepository'] = new \AppBundle\Repository\SearchedRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
