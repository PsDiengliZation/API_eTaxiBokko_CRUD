<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTrlMknS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTrlMknS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTrlMknS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTrlMknS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTrlMknS\App_KernelDevDebugContainer([
    'container.build_hash' => 'TrlMknS',
    'container.build_id' => 'fb8ad857',
    'container.build_time' => 1625920193,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTrlMknS');
