<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCraue_Form_Flow_DataManagerDefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'craue.form.flow.data_manager_default' shared service.
     *
     * @return \Craue\FormFlowBundle\Storage\DataManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/craue/formflow-bundle/Storage/DataManagerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/craue/formflow-bundle/Storage/ExtendedDataManagerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/craue/formflow-bundle/Storage/DataManager.php';

        return $container->privates['craue.form.flow.data_manager_default'] = new \Craue\FormFlowBundle\Storage\DataManager(($container->services['craue.form.flow.storage'] ?? $container->load('getCraue_Form_Flow_StorageService')));
    }
}
