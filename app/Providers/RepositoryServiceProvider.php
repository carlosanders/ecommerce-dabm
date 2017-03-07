<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Para chamar ProductRepositoryEloquent
        $this->app->bind(
            'App\Repositories\Contracts\ProductRepositoryInterface',
            'App\Repositories\ProductRepositoryEloquent'
        );

        // Para chamar ProductRepositoryOtherORM
        // $this->app->bind(
        //     'App\Repositories\Contracts\ClientRepositoryInterface',
        //     'App\Repositories\ClientRepositoryOtherORM'
        // );
    }
}
