<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApprovalController3Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'AppBundle\Controller\Settings\Feature\ApprovalController' shared autowired service.
     *
     * @return \AppBundle\Controller\Settings\Feature\ApprovalController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Feature/ApprovalController.php';

        return $container->services['AppBundle\\Controller\\Settings\\Feature\\ApprovalController'] = new \AppBundle\Controller\Settings\Feature\ApprovalController(($container->privates['AppBundle\\Repository\\UserRepository'] ?? $container->getUserRepositoryService()), ($container->services['jms_serializer.authorization_checker'] ?? $container->getJmsSerializer_AuthorizationCheckerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['form.factory'] ?? $container->getForm_FactoryService()));
    }
}
