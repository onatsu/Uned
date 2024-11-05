<?php

namespace App\Providers;

use App\Application\Product\CreateProductUseCase;
use App\Application\Product\CreateProductWithMetricsUseCase;
use App\Application\Product\ProductCreate;
use App\Domain\Product\ProductRepository;
use App\Repositories\EloquentProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepository::class, EloquentProductRepository::class);
        $this->app->bind(ProductCreate::class, CreateProductUseCase::class);
        $this->app->when(CreateProductWithMetricsUseCase::class)
            ->needs(ProductCreate::class)
            ->give(CreateProductUseCase::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
