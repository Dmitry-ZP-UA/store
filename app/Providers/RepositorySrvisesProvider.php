<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 11:19
 */

namespace App\Providers;


use App\Shop\Categories\Repositories\CategoryRepository;
use App\Shop\Categories\Repositories\CategoryRepositoryInterface;
use App\Shop\Products\Repositories\ProductRepository;
use App\Shop\Products\Repositories\ProductRepositoryInterface;

class RepositorySrvisesProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
    }
}