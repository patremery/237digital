<?php

namespace Container5g4S0dJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPartnerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PartnerController' shared autowired service.
     *
     * @return \App\Controller\PartnerController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PartnerController'] = $instance = new \App\Controller\PartnerController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\PartnerController', $container));

        return $instance;
    }
}
