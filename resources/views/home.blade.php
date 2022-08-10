@extends('layouts.app')
@section('content')
    <style>
        .cards:hover {

            box-shadow: 5px 6px 6px 2px #e9ecef;
            transform: scale(1.1);
        }
    </style>
    <div class="py-5" style="background-color:#FCE2DB">
        <div class="container py-5">

            <div class="row align-items-center mb-5">
                <div class="col-lg-5  mx-auto"><img src="{{ asset('image_page/skincare.png') }}" alt=""
                        class="img-fluid mb-4 mb-lg-0 w-900"></div>
                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Vision & Mission</h2>
                    <p class="font-italic text-muted mb-4">
                        <strong>Our Vision</strong> is to develop our business with excellence to become a leading website
                        with local and international recognition to be accessible on buying goods on line and learning more
                        about business on line.</br>
                        <strong>Our Mission </strong> is to try our best to provide the users with an easy and quick
                        accessibility to do business on line with their partners.
                    </p>
                    <a href="/skincare" class="btn btn-light px-5 rounded-pill shadow-sm">Shop now</a>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($products->take(3) as $product)
                        <a href="{{route('cart.detail', $product->id)}}">
                            <div class="col h-full">
                                <div class="card cards h-full">
                                    <img src="{{ asset('images/' . $product->image) }}"
                                        class="card-img-top h-[300px] object-scale-down" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-2xl font-bold">{{ $product->name }}</h5>
                                        <p class="card-text">
                                            {{ \Illuminate\Support\Str::limit($product->description, 100, '...') }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-5  mx-auto"><img src="{{ asset('image_page/shoping.png') }}" alt=""
                        class="img-fluid mb-4 mb-lg-0 w-900"></div>
                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Vision & Mission</h2>
                    <p class="font-italic text-muted mb-4">
                        <strong>Our Vision</strong> is to develop our business with excellence to become a leading website
                        with local and international recognition to be accessible on buying goods on line and learning more
                        about business on line.</br>

                        <strong>Our Mission </strong> is to try our best to provide the users with an easy and quick
                        accessibility to do business on line with their partners.
                    </p>
                    <a href="/home" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                </div>
            </div>

        </div>
    </div>
@endsection
