<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCtaButtonFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Form\Element\SmartBlock\CtaButtonFormType' shared autowired service.
     *
     * @return \AppBundle\Form\Element\SmartBlock\CtaButtonFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Element/SmartBlock/CtaButtonFormType.php';

        $a = ($container->privates['AppBundle\\Services\\Category\\LinkService'] ?? $container->load('getLinkServiceService'));

        if (isset($container->privates['AppBundle\\Form\\Element\\SmartBlock\\CtaButtonFormType'])) {
            return $container->privates['AppBundle\\Form\\Element\\SmartBlock\\CtaButtonFormType'];
        }

        return $container->privates['AppBundle\\Form\\Element\\SmartBlock\\CtaButtonFormType'] = new \AppBundle\Form\Element\SmartBlock\CtaButtonFormType($a);
    }
}
