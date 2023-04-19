<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileController2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Element\FileController' shared autowired service.
     *
     * @return \AppBundle\Controller\Element\FileController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Element/FileController.php';

        return $container->services['AppBundle\\Controller\\Element\\FileController'] = new \AppBundle\Controller\Element\FileController(\dirname(__DIR__, 6), ($container->privates['AppBundle\\Repository\\Element\\ElementFileRepository'] ?? $container->getElementFileRepositoryService()), ($container->privates['AppBundle\\Repository\\FileRepository'] ?? $container->getFileRepositoryService()), ($container->privates['AppBundle\\Services\\Element\\ElementFileService'] ?? $container->load('getElementFileServiceService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['form.factory'] ?? $container->getForm_FactoryService()), ($container->privates['AppBundle\\Services\\FileService'] ?? $container->getFileServiceService()), ($container->privates['AppBundle\\Services\\ResponseService'] ?? $container->load('getResponseServiceService')), ($container->privates['AppBundle\\Services\\UserService'] ?? $container->getUserServiceService()));
    }
}
