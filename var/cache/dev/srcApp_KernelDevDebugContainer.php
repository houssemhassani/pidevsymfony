<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGIWwzQT\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGIWwzQT/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGIWwzQT.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGIWwzQT\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGIWwzQT\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GIWwzQT',
    'container.build_id' => 'f9fbc467',
    'container.build_time' => 1649720956,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGIWwzQT');