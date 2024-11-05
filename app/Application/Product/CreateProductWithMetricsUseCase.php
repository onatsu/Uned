<?php

namespace App\Application\Product;

use App\Domain\Product\ProductRepository;

class CreateProductWithMetricsUseCase implements ProductCreate
{
    private ProductRepository $repository;
    private CreateProductUseCase $next;

    public function __construct(ProductRepository $repository, ProductCreate $next)
    {
        $this->repository = $repository;
        $this->next = $next;
    }

    public function execute(CreateProductRequest $request)
    {
        //start log
        $this->next->execute($request);
        //end log
    }
}
