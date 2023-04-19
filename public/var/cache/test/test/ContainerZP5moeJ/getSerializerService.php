<?php

namespace ContainerZP5moeJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/SerializerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Serializer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/UidNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/FormErrorNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/BackedEnumNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/DenormalizerAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/DenormalizerAwareTrait.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';

        $a = ($container->privates['serializer.normalizer.mime_message'] ?? $container->load('getSerializer_Normalizer_MimeMessageService'));

        if (isset($container->privates['serializer'])) {
            return $container->privates['serializer'];
        }
        $b = ($container->privates['serializer.normalizer.object'] ?? $container->load('getSerializer_Normalizer_ObjectService'));

        if (isset($container->privates['serializer'])) {
            return $container->privates['serializer'];
        }

        return $container->privates['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => ($container->privates['serializer.denormalizer.unwrapping'] ?? $container->load('getSerializer_Denormalizer_UnwrappingService')), 1 => ($container->privates['serializer.normalizer.problem'] ??= new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true)), 2 => ($container->privates['serializer.normalizer.uid'] ??= new \Symfony\Component\Serializer\Normalizer\UidNormalizer()), 3 => ($container->privates['serializer.normalizer.datetime'] ??= new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer()), 4 => ($container->privates['serializer.normalizer.constraint_violation_list'] ?? $container->load('getSerializer_Normalizer_ConstraintViolationListService')), 5 => $a, 6 => ($container->privates['serializer.normalizer.datetimezone'] ??= new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer()), 7 => ($container->privates['serializer.normalizer.dateinterval'] ??= new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer()), 8 => ($container->privates['serializer.normalizer.form_error'] ??= new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer()), 9 => ($container->privates['serializer.normalizer.backed_enum'] ??= new \Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer()), 10 => ($container->privates['serializer.normalizer.data_uri'] ?? $container->load('getSerializer_Normalizer_DataUriService')), 11 => ($container->privates['serializer.normalizer.json_serializable'] ??= new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(NULL, NULL)), 12 => ($container->privates['serializer.denormalizer.array'] ??= new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer()), 13 => $b], [0 => ($container->privates['serializer.encoder.xml'] ??= new \Symfony\Component\Serializer\Encoder\XmlEncoder()), 1 => ($container->privates['serializer.encoder.json'] ??= new \Symfony\Component\Serializer\Encoder\JsonEncoder(NULL, NULL)), 2 => ($container->privates['serializer.encoder.yaml'] ??= new \Symfony\Component\Serializer\Encoder\YamlEncoder(NULL, NULL)), 3 => ($container->privates['serializer.encoder.csv'] ??= new \Symfony\Component\Serializer\Encoder\CsvEncoder())]);
    }
}
