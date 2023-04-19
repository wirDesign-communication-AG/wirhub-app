<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentMailSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\EventSubscriber\CommentMailSubscriber' shared autowired service.
     *
     * @return \AppBundle\EventSubscriber\CommentMailSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/EventSubscriber/CommentMailSubscriber.php';

        $a = ($container->privates['AppBundle\\Services\\MailService'] ?? $container->load('getMailServiceService'));

        if (isset($container->privates['AppBundle\\EventSubscriber\\CommentMailSubscriber'])) {
            return $container->privates['AppBundle\\EventSubscriber\\CommentMailSubscriber'];
        }
        $b = ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService());

        if (isset($container->privates['AppBundle\\EventSubscriber\\CommentMailSubscriber'])) {
            return $container->privates['AppBundle\\EventSubscriber\\CommentMailSubscriber'];
        }

        return $container->privates['AppBundle\\EventSubscriber\\CommentMailSubscriber'] = new \AppBundle\EventSubscriber\CommentMailSubscriber($a, ($container->privates['AppBundle\\Services\\Setting\\TemplateService'] ?? $container->load('getTemplateServiceService')), $b);
    }
}
