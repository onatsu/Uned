<h1>Productos</h1>

<ul>
    @foreach($products as $product)
        <li>{{$product->getName()}} <strong>{{$product->category->name}}</strong> - {{$product->getPrice()}}</li>
    @endforeach
</ul>
