<?php

namespace App\Domain\Product;

interface ProductRepository
{
    public function getAll(): array;
    public function save(Product $product);
}
