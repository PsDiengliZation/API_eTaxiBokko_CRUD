<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container37szXPq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container37szXPq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container37szXPq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container37szXPq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container37szXPq\App_KernelDevDebugContainer([
    'container.build_hash' => '37szXPq',
    'container.build_id' => '1937125d',
    'container.build_time' => 1625935200,
], __DIR__.\DIRECTORY_SEPARATOR.'Container37szXPq');
