<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\SearchController' shared autowired service.
     *
     * @return \AppBundle\Controller\SearchController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/SearchController.php';

        return $container->services['AppBundle\\Controller\\SearchController'] = new \AppBundle\Controller\SearchController(($container->privates['AppBundle\\Repository\\SearchedRepository'] ?? $container->load('getSearchedRepositoryService')), ($container->privates['twig'] ?? $container->getTwigService()), ($container->privates['AppBundle\\Services\\Setting\\LocaleService'] ?? $container->getLocaleServiceService()), ($container->privates['AppBundle\\Services\\SearchService'] ?? $container->load('getSearchServiceService')));
    }
}
