<?php

namespace ContainerQ5eMHKR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N6NF7wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._N6NF7w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._N6NF7w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ScoresRepository' => ['privates', 'App\\Repository\\ScoresRepository', 'getScoresRepositoryService', true],
        ], [
            'ScoresRepository' => 'App\\Repository\\ScoresRepository',
        ]);
    }
}