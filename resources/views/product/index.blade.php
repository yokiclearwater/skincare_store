@extends('layouts.app')

@section('content')
    <div class="container p-2">
        <div class="bg-white my-4 p-4 rounded-md shadow-md">
            <div class="flex flex-row flex-wrap gap-4 items-center justify-between">
                <a href="{{ route('products.create') }}" class="btn btn-success btn-lg my-3 bg-green-600">Add To New Skincare
                    Product</a>
                <form action="{{ route('products.index') }}" class="flex flex-row gap-4" method="GET">
                    <div class="form-group">
                        <input autocomplete="off" type="search" class="form-control form-control-lg" placeholder="Search"
                            name="search">
                    </div>
                    <button type="submit" class="btn btn-danger bg-rose-500 w-32 text-xl">Search</button>
                </form>
            </div>
        </div>
        <div class="flex w-full flex-wrap gap-4 md:justify-start justify-center">
            @foreach ($products as $product)
                <div class="card" style="width: 350px;">
                    <img class="card-img-top h-[250px] object-scale-down" src="{{ asset('images/' . $product->image) }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-2xl font-bold">{{ $product->name }}</h5>
                    </div>
                    <ul class="list-group list-group-flush text-xl">
                        <li class="list-group-item">Price : $ {{ $product->price }}</li>
                        <li class="list-group-item">Category : {{ $product->category }}</li>
                    </ul>
                    <div class="card-body text-xl">
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 100, '...') }}</p>
                        <div class="p-2">
                            <a href={{ route('products.show', $product->id) }} class="btn btn-success btn-lg">View</a>
                            <a href={{ route('products.edit', $product->id) }} class="btn btn-warning btn-lg">Edit</a>
                            <form class="inline-block" action={{ route('products.destroy', $product->id) }} method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-lg bg-rose-600">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
