<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeaserFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Form\Element\SmartBlock\TeaserFormType' shared autowired service.
     *
     * @return \AppBundle\Form\Element\SmartBlock\TeaserFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Element/QuickEditFormType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Element/ElementFormType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Element/SmartBlock/TeaserFormType.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['AppBundle\\Form\\Element\\SmartBlock\\TeaserFormType'])) {
            return $container->privates['AppBundle\\Form\\Element\\SmartBlock\\TeaserFormType'];
        }

        return $container->privates['AppBundle\\Form\\Element\\SmartBlock\\TeaserFormType'] = new \AppBundle\Form\Element\SmartBlock\TeaserFormType($a, ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
