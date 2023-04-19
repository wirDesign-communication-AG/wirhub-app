<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStageSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\EventSubscriber\Element\StageSubscriber' shared autowired service.
     *
     * @return \AppBundle\EventSubscriber\Element\StageSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/EventSubscriber/Element/StageSubscriber.php';

        return $container->privates['AppBundle\\EventSubscriber\\Element\\StageSubscriber'] = new \AppBundle\EventSubscriber\Element\StageSubscriber();
    }
}
