<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwitchToDefaultUserVoter2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.AppBundle\Security\SwitchToDefaultUserVoter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/security-core/Authorization/Voter/CacheableVoterInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Security/SwitchToDefaultUserVoter.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['debug.security.voter.AppBundle\\Security\\SwitchToDefaultUserVoter'])) {
            return $container->privates['debug.security.voter.AppBundle\\Security\\SwitchToDefaultUserVoter'];
        }

        return $container->privates['debug.security.voter.AppBundle\\Security\\SwitchToDefaultUserVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($container->privates['AppBundle\\Security\\SwitchToDefaultUserVoter'] ??= new \AppBundle\Security\SwitchToDefaultUserVoter()), $a);
    }
}
