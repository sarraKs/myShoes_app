<?php

namespace ContainerUFijApe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H16QFoQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h16QFoQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h16QFoQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'member' => ['privates', '.errored..service_locator.h16QFoQ.App\\Entity\\Member', NULL, 'Cannot autowire service ".service_locator.h16QFoQ": it needs an instance of "App\\Entity\\Member" but this type has been excluded in "config/services.yaml".'],
        ], [
            'member' => 'App\\Entity\\Member',
        ]);
    }
}
