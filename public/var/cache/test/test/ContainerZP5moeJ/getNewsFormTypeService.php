<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Form\Setting\Feature\NewsFormType' shared autowired service.
     *
     * @return \AppBundle\Form\Setting\Feature\NewsFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/Setting/Feature/NewsFormType.php';

        return $container->privates['AppBundle\\Form\\Setting\\Feature\\NewsFormType'] = new \AppBundle\Form\Setting\Feature\NewsFormType(($container->privates['AppBundle\\Repository\\SpaceRepository'] ?? $container->getSpaceRepositoryService()), ($container->privates['AppBundle\\Repository\\Setting\\Feature\\NewsCategoryRepository'] ?? $container->getNewsCategoryRepositoryService()), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
