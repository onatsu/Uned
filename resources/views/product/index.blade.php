<h1>Productos</h1>

<ul>
    @foreach($products as $product)
        <li><a href="{{route('product.show', $product)}}">{{$product->getName()}}</a> <strong>{{$product->categoryName}}</strong> - {{$product->currencyPrice}}</li>
    @endforeach
</ul>
