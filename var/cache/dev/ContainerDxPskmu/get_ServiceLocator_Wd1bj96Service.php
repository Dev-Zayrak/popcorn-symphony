<?php

namespace ContainerDxPskmu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wd1bj96Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wd1bj96' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wd1bj96'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\SerieController::index' => ['privates', '.service_locator.aLp9W0w', 'get_ServiceLocator_ALp9W0wService', true],
            'App\\Controller\\TestController::testPersist' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\TestController::testUpdate' => ['privates', '.service_locator.TeQtu8C', 'get_ServiceLocator_TeQtu8CService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\SerieController:index' => ['privates', '.service_locator.aLp9W0w', 'get_ServiceLocator_ALp9W0wService', true],
            'App\\Controller\\TestController:testPersist' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\TestController:testUpdate' => ['privates', '.service_locator.TeQtu8C', 'get_ServiceLocator_TeQtu8CService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\SerieController::index' => '?',
            'App\\Controller\\TestController::testPersist' => '?',
            'App\\Controller\\TestController::testUpdate' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\SerieController:index' => '?',
            'App\\Controller\\TestController:testPersist' => '?',
            'App\\Controller\\TestController:testUpdate' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
