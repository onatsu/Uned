<h1>Productos</h1>

<ul>
    @foreach($products as $product)

        @dd($product->category())
        <li>{{$product->getName()}} <strong>{{$product->categoryName}}</strong> - {{$product->currencyPrice}}</li>
    @endforeach
</ul>
