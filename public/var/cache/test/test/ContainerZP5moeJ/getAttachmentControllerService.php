<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttachmentControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Element\SmartBlock\AttachmentController' shared autowired service.
     *
     * @return \AppBundle\Controller\Element\SmartBlock\AttachmentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Element/SmartBlock/AttachmentController.php';

        return $container->services['AppBundle\\Controller\\Element\\SmartBlock\\AttachmentController'] = new \AppBundle\Controller\Element\SmartBlock\AttachmentController(($container->privates['AppBundle\\Services\\FileService'] ?? $container->getFileServiceService()), ($container->privates['form.factory'] ?? $container->getForm_FactoryService()), ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()));
    }
}
