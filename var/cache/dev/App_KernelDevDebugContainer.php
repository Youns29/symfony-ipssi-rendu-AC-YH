<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVulMPGx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVulMPGx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVulMPGx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVulMPGx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVulMPGx\App_KernelDevDebugContainer([
    'container.build_hash' => 'VulMPGx',
    'container.build_id' => '3544e3d5',
    'container.build_time' => 1669908986,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVulMPGx');
