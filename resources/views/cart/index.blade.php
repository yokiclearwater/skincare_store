@extends('layouts.app')

@section('content')
    <div class="container bg-white rounded-lg flex flex-col p-5 gap-4">
        @if ($carts->isEmpty())
            <div>
                <h1 class="text-5xl font-bold">
                    Your Cart Is Empty
                </h1>
            </div>
        @endif
        <div class="flex flex-row justify-between">
            <a href="/skincare" class="btn btn-outline-dark btn-lg">Back</a>
            <a href="{{ route('cart.order_history') }}" class="btn btn-success btn-lg">Order History</a>
        </div>
        @foreach ($carts as $cart)
            <div class="bg-rose-400 p-2 flex flex-row flex-wrap gap-3 text-white text-2xl rounded justify-between">
                <div>
                    <img class="w-28 h-28 rounded" src="{{ asset('images/' . $cart->product->image) }}" alt="">
                    <div>
                        <span class="font-bold md:text-2xl text-lg">{{ $cart->product->name }}</span>
                        <div class="form-group flex flex-row gap-3 p-2 w-full text-black">
                            <label for="quantity" class="text-white">Quantity</label>
                            <form action="{{ route('cart.update', $cart->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="quantity" value="{{ $cart->quantity - 1 }}">
                                <button type="submit" class="btn btn-danger bg-rose-500">-</button>
                            </form>
                            <input readonly style="max-width: 80px;" type="number" class="form-control"
                                id="quantity{{ $cart->id }}" value="{{ $cart->quantity }}">
                            <form action="{{ route('cart.update', $cart->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="quantity" value="{{ $cart->quantity + 1 }}">
                                <button type="submit" class="btn btn-success bg-green-500">+</button>
                            </form>
                        </div>
                        <span class="font-semibold md:text-xl text-lg">Subtotal : $ {{ $cart->cart_price }}</span>
                    </div>
                </div>
                <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="text-2xl font-bold btn btn-warning bg-yellow-500 text-white sm:w-auto w-full h-[50px]">Remove</button>
                </form>
            </div>
        @endforeach
        <span class="text-3xl text-black font-bold border-b-4 border-rose-700 p-2">Total Price : $
            {{ $total_price }}</span>

        <a href="{{ route('cart.checkout') }}" class="btn btn-success btn-lg bg-green-500 text-4xl font-bold">Checkout</a>
    </div>
@endsection
