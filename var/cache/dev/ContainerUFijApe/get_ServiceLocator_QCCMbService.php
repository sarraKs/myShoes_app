<?php

namespace ContainerUFijApe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QCCMbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q_cC_mb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q_cC_mb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'chaussure' => ['privates', '.errored..service_locator.q_cC_mb.App\\Entity\\Chaussure', NULL, 'Cannot autowire service ".service_locator.q_cC_mb": it needs an instance of "App\\Entity\\Chaussure" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'chaussure' => 'App\\Entity\\Chaussure',
            'entityManager' => '?',
        ]);
    }
}
