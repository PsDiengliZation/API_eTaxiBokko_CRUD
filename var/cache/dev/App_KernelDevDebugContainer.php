<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDuzz3YG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDuzz3YG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDuzz3YG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDuzz3YG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDuzz3YG\App_KernelDevDebugContainer([
    'container.build_hash' => 'Duzz3YG',
    'container.build_id' => '651be306',
    'container.build_time' => 1625919162,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDuzz3YG');