<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSliderServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Services\Element\SmartBlock\SliderService' shared autowired service.
     *
     * @return \AppBundle\Services\Element\SmartBlock\SliderService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Services/Element/SmartBlock/SliderService.php';

        return $container->privates['AppBundle\\Services\\Element\\SmartBlock\\SliderService'] = new \AppBundle\Services\Element\SmartBlock\SliderService(($container->privates['AppBundle\\Repository\\SmartBlock\\Slider\\SlideRepository'] ?? $container->getSlideRepositoryService()));
    }
}
