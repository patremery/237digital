<?php

namespace Container0xl8FnO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPartnersCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\PartnersCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\PartnersCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\PartnersCrudController'] = $instance = new \App\Controller\Admin\PartnersCrudController();

        $instance->setContainer(($container->privates['.service_locator.wcyNGhy'] ?? $container->load('get_ServiceLocator_WcyNGhyService'))->withContext('App\\Controller\\Admin\\PartnersCrudController', $container));

        return $instance;
    }
}
