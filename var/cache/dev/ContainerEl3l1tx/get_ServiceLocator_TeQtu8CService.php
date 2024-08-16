<?php

namespace ContainerEl3l1tx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TeQtu8CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TeQtu8C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TeQtu8C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serieRepository' => ['privates', 'App\\Repository\\SerieRepository', 'getSerieRepositoryService', true],
        ], [
            'em' => '?',
            'serieRepository' => 'App\\Repository\\SerieRepository',
        ]);
    }
}
