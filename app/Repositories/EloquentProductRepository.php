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
            $return[] = new Product($product->name, $product->price);
        }
        return $return;
    }
}
