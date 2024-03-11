<?php

declare(strict_types=1);

use Rector\Php80\Rector\Catch_\RemoveUnusedVariableInCatchRector;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\StringableForToStringRector;
use Rector\Php80\Rector\Identical\StrEndsWithRector;
use Rector\Php80\Rector\Identical\StrStartsWithRector;
use Rector\Php80\Rector\NotIdentical\StrContainsRector;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Rector\Symfony\Symfony62\Rector\ClassMethod\ParamConverterAttributeToMapEntityAttributeRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths(
        [
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Command',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Component',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Admin/System',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Admin',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Asset',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Category',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Components',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Element/SmartBlock/IconLibrary',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Element/SmartBlock/IconList',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Element/SmartBlock/MediaCockpit',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Element/SmartBlock',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Element',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Feature/Connection',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Feature/DownloadCenter',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Feature',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/File',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Analytics',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Category',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Design',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Feature',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Font',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Locale',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/SmartBlock',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/SmartTool/Inspiration',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/SmartTool',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/Space',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings/User',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/Settings',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller/User',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Controller',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/DataFixtures',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Domain',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Entity',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/EventListener',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/EventSubscriber',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Form',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Repository',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Router',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Security',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Services',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Tests',
            __DIR__ . '/vendor/wirdesign-communication-ag/wirhub/Twig',
            __DIR__ . '/src/Controller',
            __DIR__ . '/src/Entity',
            __DIR__ . '/src/Repository',
        ]
    );

    $rectorConfig->rules(
        [
            ClassPropertyAssignToConstructorPromotionRector::class,
            ParamConverterAttributeToMapEntityAttributeRector::class,
            RemoveUnusedVariableInCatchRector::class,
            StrContainsRector::class,
            StrEndsWithRector::class,
            StrStartsWithRector::class,
            StringableForToStringRector::class,
            ReadOnlyPropertyRector::class,
        ]
    );
};
