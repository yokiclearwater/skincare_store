@extends('layouts.app')
@section('content')
<div class="container">
        <div class="flex lg:flex-row flex-col bg-rose-200 gap-4 sm:p-5 items-center rounded-lg shadow-lg">
            @if ($image_found)
                <img class="sm:rounded-lg rounded-t-lg lg:w-[40%]" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                    srcset="">
            @else
                <img class="sm:rounded-lg lg:w-[40%]"
                    src="https://cdn.dribbble.com/users/88213/screenshots/8560585/media/7263b7aaa8077a322b0f12a7cd7c7404.png"
                    alt="Image Not Found" srcset="">
            @endif


            <div class="details p-3 flex flex-col gap-3">
                <h1 class="sm:text-4xl text-2xl font-bold text-rose-600 border-b-8 border-rose-800 pb-4">
                    {{ $product->name }}
                </h1>

                <h2 class="sm:text-3xl text-2xl font-semibold">$ {{ $product->price }}</h2>
                <p class="sm:text-2xl text-xl font-semibold">Category : {{ $product->category }}</p>
                <span class="sm:text-2xl text-xl font-semibold">Product Description : </span>
                <p class="sm:text-xl text-lg bg-white text-black p-4 rounded-md">{{ $product->description }}</p>
                {{-- Add to Cart  --}}
                <form action="{{route('cart.store', $product->id)}}" method="POST" class="flex flex-col gap-4 needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="quantity" class="text-xl font-semibold py-2">Quantity</label>
                        
                        <!-- <input type="number" class="form-control form-control-lg" id="quantity" name="quantity" min="0" required> -->
                        <input type="number" class="form-control form-control-lg" name="quantity" min="0" id="quantity"  required>
                            <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <button class="btn btn-primary btn-rose-500 btn-lg text-light-50 bg-primary" type="submit">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    <script>
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
@endsection