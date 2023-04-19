<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserMailServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Services\UserMailService' shared autowired service.
     *
     * @return \AppBundle\Services\UserMailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Services/UserMailService.php';

        $a = ($container->privates['AppBundle\\Services\\MailService'] ?? $container->load('getMailServiceService'));

        if (isset($container->privates['AppBundle\\Services\\UserMailService'])) {
            return $container->privates['AppBundle\\Services\\UserMailService'];
        }
        $b = ($container->privates['AppBundle\\Services\\Setting\\TemplateService'] ?? $container->load('getTemplateServiceService'));

        if (isset($container->privates['AppBundle\\Services\\UserMailService'])) {
            return $container->privates['AppBundle\\Services\\UserMailService'];
        }

        return $container->privates['AppBundle\\Services\\UserMailService'] = new \AppBundle\Services\UserMailService(($container->privates['AppBundle\\Router\\PersistentQueryRouter'] ?? $container->getPersistentQueryRouterService()), ($container->services['translator'] ?? $container->getTranslatorService()), $a, $b);
    }
}
