<?php

namespace App\Http\Controllers;

use App\Application\Product\CreateProductRequest;
use App\Application\Product\ProductCreate;
use App\Domain\Product\Product;
use App\Domain\Product\ProductRepository;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    private ProductRepository $repository;
    private ProductCreate $createProductUseCase;

    public function __construct(ProductRepository $repository, ProductCreate $createProductUseCase)
    {
        $this->repository = $repository;
        $this->createProductUseCase = $createProductUseCase;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->repository->getAll();

        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request = new CreateProductRequest($request->name, $request->price);
        $this->createProductUseCase->execute($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
