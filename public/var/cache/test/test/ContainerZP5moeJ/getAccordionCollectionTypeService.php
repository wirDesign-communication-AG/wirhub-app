<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccordionCollectionTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'AppBundle\Form\AccordionCollectionType' shared autowired service.
     *
     * @return \AppBundle\Form\AccordionCollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 6).'/vendor/wirdesign-communication-ag/wirhub/Form/AccordionCollectionType.php';

        return $container->privates['AppBundle\\Form\\AccordionCollectionType'] = new \AppBundle\Form\AccordionCollectionType();
    }
}
