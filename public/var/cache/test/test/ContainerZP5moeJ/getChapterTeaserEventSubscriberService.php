<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChapterTeaserEventSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\EventSubscriber\Element\ChapterTeaserEventSubscriber' shared autowired service.
     *
     * @return \AppBundle\EventSubscriber\Element\ChapterTeaserEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/EventSubscriber/Element/ChapterTeaserEventSubscriber.php';

        return $container->privates['AppBundle\\EventSubscriber\\Element\\ChapterTeaserEventSubscriber'] = new \AppBundle\EventSubscriber\Element\ChapterTeaserEventSubscriber(($container->privates['AppBundle\\Repository\\SmartBlock\\ChapterTeaserItemRepository'] ?? $container->getChapterTeaserItemRepositoryService()));
    }
}
