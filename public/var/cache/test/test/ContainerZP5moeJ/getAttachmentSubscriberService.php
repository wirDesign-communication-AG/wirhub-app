<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttachmentSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\EventSubscriber\Element\AttachmentSubscriber' shared autowired service.
     *
     * @return \AppBundle\EventSubscriber\Element\AttachmentSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/EventSubscriber/Element/AttachmentSubscriber.php';

        return $container->privates['AppBundle\\EventSubscriber\\Element\\AttachmentSubscriber'] = new \AppBundle\EventSubscriber\Element\AttachmentSubscriber();
    }
}
