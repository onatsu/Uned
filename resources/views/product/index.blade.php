<h1>Productos</h1>

<ul>
    @foreach($products as $product)
        <li>{{$product->getName()}} - {{$product->getPrice()}}</li>
    @endforeach
</ul>
