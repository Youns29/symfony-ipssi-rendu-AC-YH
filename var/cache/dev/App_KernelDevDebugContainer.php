<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCemmuqP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCemmuqP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCemmuqP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCemmuqP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCemmuqP\App_KernelDevDebugContainer([
    'container.build_hash' => 'CemmuqP',
    'container.build_id' => '7b6bcb5f',
    'container.build_time' => 1670192003,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCemmuqP');
