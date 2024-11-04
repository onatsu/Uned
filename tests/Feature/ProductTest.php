<?php

namespace Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function can_create_a_product()
    {
        $expectedData = ['name' => 'a product', 'description' => 'a description', 'price' => 2];
        $this->post("/product/create", $expectedData);

        $this->assertDatabaseHas('products', $expectedData);
    }
}
