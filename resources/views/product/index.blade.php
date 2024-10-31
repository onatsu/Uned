<h1>Productos</h1>

<ul>
    @foreach($products as $product)
        <li>{{$product->name}}</li>
    @endforeach
</ul>
