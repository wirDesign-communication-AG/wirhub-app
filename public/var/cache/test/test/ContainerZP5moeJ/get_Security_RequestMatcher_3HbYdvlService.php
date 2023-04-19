<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_RequestMatcher_3HbYdvlService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.security.request_matcher.3HbYdvl' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\ChainRequestMatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/ChainRequestMatcher.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-foundation/RequestMatcher/PathRequestMatcher.php';

        return $container->privates['.security.request_matcher.3HbYdvl'] = new \Symfony\Component\HttpFoundation\ChainRequestMatcher([0 => new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/(_wdt|_profiler|asset)')]);
    }
}
