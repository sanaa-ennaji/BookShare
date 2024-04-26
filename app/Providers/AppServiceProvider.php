<?php

namespace App\Providers;


use App\Services\BookService;
use App\Services\CartService;
use App\Services\AdminService;
use App\Services\OrderService;
use App\Services\StoreService;
use App\Services\CategoryService;
use App\Services\CostumerService;
use App\Repositories\BookRepository;
use App\Repositories\CartRepository;
use App\Repositories\AdminRepository;
use App\Repositories\OrderRepository;
use App\Repositories\StoreRepository;
use App\Services\OrderDetailsService;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\CostumerRepository;
use App\Repositories\OrderDetailsRepository;
use App\ServiceInterface\BookServiceInterface;
use App\ServiceInterface\CartServiceInterface;
use App\ServiceInterface\AdminServiceInterface;
use App\ServiceInterface\OrderServiceInterface;
use App\ServiceInterface\StoreServiceInterface;
use App\ServiceInterface\CategoryServiceInterface;
use App\ServiceInterface\CostumerServiceInterface;
use App\RepositoryInterfaces\BookRepositoryInterface;
use App\RepositoryInterfaces\CartRepositoryInterface;
use App\RepositoryInterfaces\AdminRepositoryInterface;
use App\RepositoryInterfaces\OrderRepositoryInterface;
use App\RepositoryInterfaces\StoreRepositoryInterface;
use App\ServiceInterface\OrderDetailsServiceInterface;
use App\RepositoryInterfaces\CategoryRepositoryInterface;
use App\RepositoryInterfaces\CostumerRepositoryInterface;
use App\RepositoryInterfaces\OrderDetailsRepositoryInterface;

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

            
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(OrderServiceInterface::class , function ($app) {
            return new OrderService($app->make(OrderRepositoryInterface::class));
        });

        $this->app->bind(CartServiceInterface::class, CartService::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
      

        $this->app->bind(AdminServiceInterface::class, AdminService::class);
        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);


$this->app->bind(OrderDetailsServiceInterface::class, OrderDetailsService::class);
      $this->app->bind(OrderDetailsRepositoryInterface::class , OrderDetailsRepository::class);
    //   $this->app->bind(OrderDetailsService::class ,function($app){
    //     return new OrderDetailsService($app->make(OrderDetailsServiceInterface::class));
    //   });

     }
  


    /**
     * Bootstrap any application services.
     */ 
    public function boot(): void
    {
    
    }
}
