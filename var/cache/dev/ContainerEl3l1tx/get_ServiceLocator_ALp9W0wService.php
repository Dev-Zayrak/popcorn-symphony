<?php

namespace ContainerEl3l1tx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ALp9W0wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aLp9W0w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aLp9W0w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'serieRepository' => ['privates', 'App\\Repository\\SerieRepository', 'getSerieRepositoryService', true],
        ], [
            'serieRepository' => 'App\\Repository\\SerieRepository',
        ]);
    }
}
