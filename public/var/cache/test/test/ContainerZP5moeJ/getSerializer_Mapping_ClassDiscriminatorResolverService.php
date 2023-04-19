<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Mapping_ClassDiscriminatorResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.mapping.class_discriminator_resolver' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';

        return $container->privates['serializer.mapping.class_discriminator_resolver'] = new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata(($container->privates['serializer.mapping.class_metadata_factory'] ?? $container->load('getSerializer_Mapping_ClassMetadataFactoryService')));
    }
}
