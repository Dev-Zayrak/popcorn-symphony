<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEl3l1tx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEl3l1tx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEl3l1tx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEl3l1tx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEl3l1tx\App_KernelDevDebugContainer([
    'container.build_hash' => 'El3l1tx',
    'container.build_id' => '8f59069e',
    'container.build_time' => 1723817771,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEl3l1tx');
