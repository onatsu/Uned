<?php

namespace App\Repositories;

use App\Domain\Product\Product;
use App\Domain\Product\ProductRepository;

class ApiProductRepository implements ProductRepository
{

    public function getAll(): array
    {
        return [
            new Product('a name', 200)
        ];
    }

    public function save(Product $product): void
    {
        // TODO: Implement save() method.
    }
}
