<?php

namespace ContainerSvFouR6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0luPVJ5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0luPVJ5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0luPVJ5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'memberRepository' => ['privates', 'App\\Repository\\MemberRepository', 'getMemberRepositoryService', true],
        ], [
            'memberRepository' => 'App\\Repository\\MemberRepository',
        ]);
    }
}
