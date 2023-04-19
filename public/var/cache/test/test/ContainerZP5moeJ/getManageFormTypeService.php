<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManageFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Form\Category\ManageFormType' shared autowired service.
     *
     * @return \AppBundle\Form\Category\ManageFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Category/ManageFormType.php';

        $a = ($container->privates['AppBundle\\Repository\\CategoryRepository'] ?? $container->getCategoryRepositoryService());

        if (isset($container->privates['AppBundle\\Form\\Category\\ManageFormType'])) {
            return $container->privates['AppBundle\\Form\\Category\\ManageFormType'];
        }
        $b = ($container->services['jms_serializer.authorization_checker'] ?? $container->getJmsSerializer_AuthorizationCheckerService());

        if (isset($container->privates['AppBundle\\Form\\Category\\ManageFormType'])) {
            return $container->privates['AppBundle\\Form\\Category\\ManageFormType'];
        }

        return $container->privates['AppBundle\\Form\\Category\\ManageFormType'] = new \AppBundle\Form\Category\ManageFormType($a, ($container->privates['AppBundle\\Repository\\ConfigRepository'] ?? $container->getConfigRepositoryService()), ($container->privates['AppBundle\\Repository\\User\\GroupRepository'] ?? $container->getGroupRepositoryService()), ($container->privates['AppBundle\\Repository\\Setting\\LocaleRepository'] ?? $container->getLocaleRepositoryService()), $b, ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
