<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTLyFzmk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTLyFzmk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTLyFzmk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTLyFzmk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTLyFzmk\App_KernelDevDebugContainer([
    'container.build_hash' => 'TLyFzmk',
    'container.build_id' => 'a10da6a6',
    'container.build_time' => 1669995163,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTLyFzmk');
