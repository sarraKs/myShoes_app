<?php

namespace ContainerUFijApe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6_MT1A_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6.mT1A.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6.mT1A.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'chaussure' => ['privates', '.errored..service_locator.6.mT1A..App\\Entity\\Chaussure', NULL, 'Cannot autowire service ".service_locator.6.mT1A.": it needs an instance of "App\\Entity\\Chaussure" but this type has been excluded in "config/services.yaml".'],
            'exposition' => ['privates', '.errored..service_locator.6.mT1A..App\\Entity\\Exposition', NULL, 'Cannot autowire service ".service_locator.6.mT1A.": it needs an instance of "App\\Entity\\Exposition" but this type has been excluded in "config/services.yaml".'],
        ], [
            'chaussure' => 'App\\Entity\\Chaussure',
            'exposition' => 'App\\Entity\\Exposition',
        ]);
    }
}