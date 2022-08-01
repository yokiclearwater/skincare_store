@extends('layouts.app')

@section('content')
    <div class="container bg-white rounded-lg flex flex-col p-5 gap-4">
        <div class="text-4xl border-b-4 p-3 border-red-500 font-bold">Order History</div>
        @foreach ($orders as $order)
            <div>
                <div class="bg-pink-500 p-4 rounded text-white flex flex-col gap-4">
                    <span class="md:text-3xl text-xl font-semibold">Order Number : {{ $order->order_num }}</span>
                    <span class="md:text-2xl text-xl font-semibold">Total Price : $ {{ $order->total_price }}</span>
                    <div>
                        <button class="btn btn-light bg-white text-black font-semibold btn-lg" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $order->id }}" aria-expanded="false"
                            aria-controls="collapseExample">
                            Show Items
                        </button>
                    </div>
                    <ul class="list-group collapse sm:text-xl text-lg" id="collapse{{ $order->id }}">
                        @foreach ($order->carts as $cart)
                            <li class="list-group-item">{{ $cart->product->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection
