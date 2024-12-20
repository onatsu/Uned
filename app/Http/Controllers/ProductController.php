<?php

namespace App\Http\Controllers;

use App\Application\Product\CreateProductRequest;
use App\Application\Product\ProductCreate;
use App\Domain\Product\ProductRepository;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Jobs\SendNewProductEmail;
use App\Mail\NewProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

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
        $this->authorize('create', Product::class);
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $this->authorize('create', Product::class);
        $product = Product::create($request->all());

        $request->file('image')->storeAs(
            'products',$product->id.'.jpg', 'public'
        );

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

    public function apiShow(Product $product)
    {
        return new ProductResource($product);
    }
}
