<?php

namespace App\Providers;

use App\Services\BookService;
use App\Services\StoreService;
use App\Services\CategoryService;
use App\Services\CostumerService;
use App\Repositories\BookRepository;
use App\Repositories\StoreRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\CostumerRepository;
use App\ServiceInterface\BookServiceInterface;
use App\ServiceInterface\StoreServiceInterface;
use App\ServiceInterface\CategoryServiceInterface;
use App\ServiceInterface\CostumerServiceInterface;
use App\RepositoryInterfaces\BookRepositoryInterface;
use App\RepositoryInterfaces\StoreRepositoryInterface;
use App\RepositoryInterfaces\CategoryRepositoryInterface;
use App\RepositoryInterfaces\CostumerRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      
            $this->app->bind(CostumerRepositoryInterface::class, CostumerRepository::class);
            $this->app->bind(CostumerServiceInterface::class, function ($app) {
                return new CostumerService($app->make(CostumerRepositoryInterface::class));
            });
        

        $this->app->bind(StoreRepositoryInterface::class, StoreRepository::class);
        $this->app->bind(StoreServiceInterface::class , function ($app) {
            return new StoreService($app->make(StoreRepositoryInterface::class));
        });

        $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
        $this->app->bind(BookServiceInterface::class , function ($app) {
            return new BookService($app->make(BookRepositoryInterface::class));
        });

        
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CategoryServiceInterface::class , function ($app) {
            return new CategoryService($app->make(CategoryRepositoryInterface::class));
        });

      
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }
  


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
