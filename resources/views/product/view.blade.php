<h1>{{$product->getName()}}</h1>


<h2>
    Etiquetas
</h2>

<ul>
    @foreach($product->tags as $tag)
        <li>{{$tag->name}}</li>
    @endforeach
</ul>
