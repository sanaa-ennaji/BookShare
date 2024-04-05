<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CostumerRepository;
use App\RepositoryInterfaces\CostumerRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CostumerRepositoryInterface::class, CostumerRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
