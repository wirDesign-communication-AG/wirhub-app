<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZP5moeJ\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZP5moeJ/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerZP5moeJ.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerZP5moeJ\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerZP5moeJ\App_KernelTestDebugContainer([
    'container.build_hash' => 'ZP5moeJ',
    'container.build_id' => '5896056f',
    'container.build_time' => 1681897639,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZP5moeJ');
