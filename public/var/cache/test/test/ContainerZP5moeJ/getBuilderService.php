<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Component\Menu\Builder' shared autowired service.
     *
     * @return \AppBundle\Component\Menu\Builder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Component/Menu/Builder.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['AppBundle\\Component\\Menu\\Builder'])) {
            return $container->privates['AppBundle\\Component\\Menu\\Builder'];
        }

        return $container->privates['AppBundle\\Component\\Menu\\Builder'] = new \AppBundle\Component\Menu\Builder(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')), $a);
    }
}
