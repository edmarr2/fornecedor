<?php

namespace App\Providers;

use App\Models\Fornecedor;
use App\Observers\FornecedorObserver;
use App\Observers\UserObserver;
use App\User;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fornecedor::observe(FornecedorObserver::class);
        User::observe(UserObserver::class);

    }
}
