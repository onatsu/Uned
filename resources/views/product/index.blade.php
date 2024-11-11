@php use App\Models\Product; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    @can('create', Product::class)
        <a href="{{route('product.create')}}">Crear producto</a>
    @endcan
    <ul>
        @foreach($products as $product)
            <li><a href="{{route('product.show', $product)}}">{{$product->getName()}}</a>
                <strong>{{$product->categoryName}}</strong> - {{$product->currencyPrice}}
                <x-edit-button :url="route('product.edit', $product)">Edit</x-edit-button>
            </li>
        @endforeach
    </ul>
</x-app-layout>
