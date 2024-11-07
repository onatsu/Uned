<?php

namespace App\Http\Controllers;

use App\Application\Product\CreateProductRequest;
use App\Application\Product\ProductCreate;
use App\Domain\Product\ProductRepository;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

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
        Product::create($request->all());

        return redirect(route('product.index'))->with('flash.banner', 'Se ha creado un nuevo producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.view', ['product' => $product]);
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
