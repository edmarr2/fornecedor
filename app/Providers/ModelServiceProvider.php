<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModelServiceProvider extends ServiceProvider
{
    public $bindings = [
        'App\Contracts\Models\FornecedorServiceInterface' => 'App\Services\Models\FornecedorService',
        'App\Contracts\Models\UserServiceInterface' => 'App\Services\Models\UserService'
    ];

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
    }
}
