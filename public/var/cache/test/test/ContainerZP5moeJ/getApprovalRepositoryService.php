<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApprovalRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Repository\Category\ApprovalRepository' shared autowired service.
     *
     * @return \AppBundle\Repository\Category\ApprovalRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Repository/Category/ApprovalRepository.php';

        return $container->privates['AppBundle\\Repository\\Category\\ApprovalRepository'] = new \AppBundle\Repository\Category\ApprovalRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
