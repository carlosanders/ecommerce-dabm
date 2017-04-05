<?php

namespace App\Support\AdminLTE;


use Acacha\AdminLTETemplateLaravel\Providers\AdminLTETemplateServiceProvider;

class AdminLTEServiceProvider extends AdminLTETemplateServiceProvider
{
    /**
     * Define the AdminLTETemplate routes.
     */
    protected function defineRoutes()
    {
//        if (!$this->app->routesAreCached()) {
//            $router = app('router');
//
//            $router->group(['namespace' => $this->getAppNamespace().'Http\Controllers'], function () {
//                require __DIR__.'/../Http/routes.php';
//            });
//        }
    }
}
