<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMoex45b\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMoex45b/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerMoex45b.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerMoex45b\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerMoex45b\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Moex45b',
    'container.build_id' => '368f4313',
    'container.build_time' => 1543845099,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerMoex45b');
