<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHwiOauth_Util_DomainWhitelistService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'hwi_oauth.util.domain_whitelist' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Util\DomainWhitelist
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/hwi/oauth-bundle/src/Util/DomainWhitelist.php';

        return $container->privates['hwi_oauth.util.domain_whitelist'] = new \HWI\Bundle\OAuthBundle\Util\DomainWhitelist([]);
    }
}
