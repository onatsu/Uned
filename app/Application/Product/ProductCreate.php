<?php

namespace App\Application\Product;

interface ProductCreate
{
    public function execute(CreateProductRequest $request);
}
