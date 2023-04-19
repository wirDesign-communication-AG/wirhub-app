<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Services\SearchService' shared autowired service.
     *
     * @return \AppBundle\Services\SearchService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Services/SearchService.php';

        return $container->privates['AppBundle\\Services\\SearchService'] = new \AppBundle\Services\SearchService(($container->privates['AppBundle\\Repository\\CategoryRepository'] ?? $container->getCategoryRepositoryService()), ($container->privates['AppBundle\\Repository\\ElementRepository'] ?? $container->getElementRepositoryService()), ($container->privates['AppBundle\\Repository\\FileRepository'] ?? $container->getFileRepositoryService()), ($container->privates['AppBundle\\Repository\\User\\GroupRepository'] ?? $container->getGroupRepositoryService()), ($container->privates['AppBundle\\Repository\\Setting\\LocaleRepository'] ?? $container->getLocaleRepositoryService()), ($container->privates['AppBundle\\Repository\\SearchedRepository'] ?? $container->load('getSearchedRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['AppBundle\\Services\\SpaceService'] ?? $container->getSpaceServiceService()), ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()));
    }
}
