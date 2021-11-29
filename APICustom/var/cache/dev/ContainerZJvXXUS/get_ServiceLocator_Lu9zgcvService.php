<?php

namespace ContainerZJvXXUS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lu9zgcvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Lu9zgcv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Lu9zgcv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\ScoresCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController::batchDelete' => ['privates', '.service_locator.AWPr3oy', 'get_ServiceLocator_AWPr3oyService', true],
            'App\\Controller\\Admin\\ScoresCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\ScoresCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\ScoresCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\ScoresCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\ScoresCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\ScoresCrudController::createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ScoresCrudController::createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ScoresCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\ScoresCrudController::createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ScoresCrudController::createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ScoresCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\ScoresCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\ScoresCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\adminController::configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\ScoresController::Newscore' => ['privates', '.service_locator.2YhVWT9', 'get_ServiceLocator_2YhVWT9Service', true],
            'App\\Controller\\ScoresController::index' => ['privates', '.service_locator._N6NF7w', 'get_ServiceLocator_N6NF7wService', true],
            'App\\Controller\\ScoresController::total' => ['privates', '.service_locator._N6NF7w', 'get_ServiceLocator_N6NF7wService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\ScoresCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController:batchDelete' => ['privates', '.service_locator.AWPr3oy', 'get_ServiceLocator_AWPr3oyService', true],
            'App\\Controller\\Admin\\ScoresCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\ScoresCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\ScoresCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\ScoresCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\ScoresCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\ScoresCrudController:createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ScoresCrudController:createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ScoresCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\ScoresCrudController:createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ScoresCrudController:createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ScoresCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\ScoresCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\ScoresCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ScoresCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\adminController:configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\ScoresController:Newscore' => ['privates', '.service_locator.2YhVWT9', 'get_ServiceLocator_2YhVWT9Service', true],
            'App\\Controller\\ScoresController:index' => ['privates', '.service_locator._N6NF7w', 'get_ServiceLocator_N6NF7wService', true],
            'App\\Controller\\ScoresController:total' => ['privates', '.service_locator._N6NF7w', 'get_ServiceLocator_N6NF7wService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\ScoresCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::delete' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::detail' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::edit' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::index' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::new' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ScoresCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\adminController::configureUserMenu' => '?',
            'App\\Controller\\ScoresController::Newscore' => '?',
            'App\\Controller\\ScoresController::index' => '?',
            'App\\Controller\\ScoresController::total' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:delete' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:detail' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:edit' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:index' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:new' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ScoresCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\adminController:configureUserMenu' => '?',
            'App\\Controller\\ScoresController:Newscore' => '?',
            'App\\Controller\\ScoresController:index' => '?',
            'App\\Controller\\ScoresController:total' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
