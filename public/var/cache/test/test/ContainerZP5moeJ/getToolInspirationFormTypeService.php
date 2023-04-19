<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getToolInspirationFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Form\Element\SmartBlock\ToolInspirationFormType' shared autowired service.
     *
     * @return \AppBundle\Form\Element\SmartBlock\ToolInspirationFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Element/QuickEditFormType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Element/ElementFormType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Element/SmartBlock/ToolInspirationFormType.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['AppBundle\\Form\\Element\\SmartBlock\\ToolInspirationFormType'])) {
            return $container->privates['AppBundle\\Form\\Element\\SmartBlock\\ToolInspirationFormType'];
        }

        return $container->privates['AppBundle\\Form\\Element\\SmartBlock\\ToolInspirationFormType'] = new \AppBundle\Form\Element\SmartBlock\ToolInspirationFormType($a, ($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['AppBundle\\Repository\\SmartTool\\Inspiration\\InspirationTagTypeRepository'] ?? $container->getInspirationTagTypeRepositoryService()));
    }
}
