@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="my-2 p-4 rounded-md shadow-md">
            
                <form action="search" class="flex flex-row gap-4" method="GET">
                    <div class="form-group">
                        <input autocomplete="off" type="search" class="form-control form-control-lg" placeholder="Search"
                            name="search">
                    </div>
                    <button type="submit" class="btn btn-danger bg-rose-500 w-32 text-xl">Search</button>
                </form>
            
    </div>
    <div class="row">
       @foreach ($products as $product)
       
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 p-3">

                <div class="card" style="width: 350px;">
                    <a href="detail/{{$product['id']}}" >
                        <img class="card-img-top h-[250px] object-scale-down" src="{{ asset('images/' . $product->image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-2xl font-bold">{{ $product->name }}</h5>
                        </div>
                        <ul class="list-group list-group-flush text-xl">
                            <li class="list-group-item"><h5>Price : $ {{ $product->price }}</h5></li>
                           
                        </ul>
                        <div class="card-body text-xl">
                            <div class="p-2">
                            <form action="detail/{{$product['id']}}" method="GET" class="flex flex-col gap-4">
                                @csrf
                                
                                <button class="btn btn-danger btn-rose-500 btn-lg">Add to Cart</button>
                            </form>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
       
         @endforeach
       
    </div>
</div>
  

@endsection
