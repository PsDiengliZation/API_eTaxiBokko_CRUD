<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container91FVMtK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container91FVMtK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container91FVMtK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container91FVMtK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container91FVMtK\App_KernelDevDebugContainer([
    'container.build_hash' => '91FVMtK',
    'container.build_id' => '6339e931',
    'container.build_time' => 1625922462,
], __DIR__.\DIRECTORY_SEPARATOR.'Container91FVMtK');
