<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container17KJTfq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container17KJTfq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container17KJTfq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container17KJTfq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container17KJTfq\App_KernelDevDebugContainer([
    'container.build_hash' => '17KJTfq',
    'container.build_id' => 'c0df6830',
    'container.build_time' => 1583469210,
], __DIR__.\DIRECTORY_SEPARATOR.'Container17KJTfq');
