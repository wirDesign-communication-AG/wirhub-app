<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getToolFramingMediaFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Form\Element\SmartBlock\Framing\ToolFramingMediaFormType' shared autowired service.
     *
     * @return \AppBundle\Form\Element\SmartBlock\Framing\ToolFramingMediaFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Element/SmartBlock/Framing/ToolFramingMediaFormType.php';

        return $container->privates['AppBundle\\Form\\Element\\SmartBlock\\Framing\\ToolFramingMediaFormType'] = new \AppBundle\Form\Element\SmartBlock\Framing\ToolFramingMediaFormType();
    }
}
