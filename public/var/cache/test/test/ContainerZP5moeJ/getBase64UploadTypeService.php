<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBase64UploadTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Form\Base64UploadType' shared autowired service.
     *
     * @return \AppBundle\Form\Base64UploadType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Base64UploadType.php';

        return $container->privates['AppBundle\\Form\\Base64UploadType'] = new \AppBundle\Form\Base64UploadType();
    }
}
