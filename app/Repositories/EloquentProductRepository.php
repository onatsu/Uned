<?php

namespace App\Repositories;

use App\Domain\Product\Product;
use App\Domain\Product\ProductRepository;
use App\Models\Product as LaravelProduct;

class EloquentProductRepository implements ProductRepository
{

    public function getAll(): array
    {
        $return = [];
        foreach (LaravelProduct::all() as $product)
        {
            $return[] = $product;
        }
        return $return;
    }

    public function save(Product $product): void
    {
        LaravelProduct::create(['name' => $product->getName(), 'price' => $product->getPrice()]);
    }
}
