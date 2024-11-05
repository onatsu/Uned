<?php

namespace App\Application\Product;

use App\Domain\Product\Product;
use App\Domain\Product\ProductRepository;

class CreateProductUseCase implements ProductCreate
{
    private ProductRepository $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(CreateProductRequest $request)
    {
        $this->repository->save(new Product($request->getName(), $request->getPrice()));
    }


}
