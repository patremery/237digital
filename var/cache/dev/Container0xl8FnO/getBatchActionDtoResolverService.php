<?php

namespace Container0xl8FnO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchActionDtoResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['debug.EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\BatchActionDtoResolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), (isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']() : $container->getAdminUrlGeneratorService())), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
