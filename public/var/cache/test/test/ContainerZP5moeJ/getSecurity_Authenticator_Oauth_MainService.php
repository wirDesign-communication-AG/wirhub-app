<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Oauth_MainService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.oauth.main' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Security\Http\Authenticator\OAuthAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/hwi/oauth-bundle/src/Security/Http/Authenticator/OAuthAuthenticator.php';

        $a = ($container->privates['AppBundle\\Component\\Security\\OAuthProvider'] ?? $container->load('getOAuthProviderService'));

        if (isset($container->privates['security.authenticator.oauth.main'])) {
            return $container->privates['security.authenticator.oauth.main'];
        }
        $b = ($container->privates['security.authentication.failure_handler.main.oauth'] ?? $container->load('getSecurity_Authentication_FailureHandler_Main_OauthService'));

        if (isset($container->privates['security.authenticator.oauth.main'])) {
            return $container->privates['security.authenticator.oauth.main'];
        }
        $c = ($container->services['http_kernel'] ?? $container->getHttpKernelService());

        if (isset($container->privates['security.authenticator.oauth.main'])) {
            return $container->privates['security.authenticator.oauth.main'];
        }

        return $container->privates['security.authenticator.oauth.main'] = new \HWI\Bundle\OAuthBundle\Security\Http\Authenticator\OAuthAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), $a, ($container->services['hwi_oauth.resource_ownermap.main'] ?? $container->load('getHwiOauth_ResourceOwnermap_MainService')), $container->parameters['hwi_oauth.resource_ownermap.configured.main'], ($container->privates['security.authentication.success_handler.main.oauth'] ?? $container->load('getSecurity_Authentication_SuccessHandler_Main_OauthService')), $b, $c, ['login_path' => '/login', 'check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => false]);
    }
}
