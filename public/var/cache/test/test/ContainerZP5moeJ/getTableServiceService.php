<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTableServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Services\Element\SmartBlock\TableService' shared autowired service.
     *
     * @return \AppBundle\Services\Element\SmartBlock\TableService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Services/Element/SmartBlock/TableService.php';

        return $container->privates['AppBundle\\Services\\Element\\SmartBlock\\TableService'] = new \AppBundle\Services\Element\SmartBlock\TableService(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['AppBundle\\Repository\\SmartBlock\\Table\\TableRowRepository'] ?? $container->getTableRowRepositoryService()));
    }
}
