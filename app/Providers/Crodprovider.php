<?php

namespace App\Providers;

use App\interfaces\CrudInterface;
use App\repository\CrudRepository;
use Illuminate\Support\ServiceProvider;

class Crodprovider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    //    $this->app->bind(CrudRepository::class,CrudInterface::class);
    }
}
