<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CartController extends Controller
{
    //
    public function index()
    {

        $carts = Cart::where('user_id', Auth::id())->where('order_num', null)->get();
        // $carts = OrderDetail::find(1)->carts;
        $total_price = 0;
        $total=0;
        foreach($carts as $cart) {
            $total++;
            $total_price += $cart->cart_price;
        }
      
        // dd($carts->toArray());

        return view('cart.index', compact('carts', 'total_price','total'));
        
    }
   

    public function store(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $cart_price = $product->price * $request->quantity;

        if (Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->where('order_num', null)->exists()) {
            $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->where('order_num', null)->first();
            $cart->quantity += $request->quantity;
            $cart->cart_price += $cart_price;
            $cart->save();
        } else {
            $cart = new Cart();
            $cart->quantity = $request->quantity;
            $cart->cart_price = $cart_price;
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $product_id;
            $cart->save();
        }

        return redirect()->route('cart.index');
    }

    public function update(Request $request, $id) {
        $cart = Cart::find($id);

        if($request->quantity == 0) {
            $cart->delete();
        } else {
            $cart->quantity = $request->quantity;
            $cart->cart_price = $cart->product->price * $request->quantity;
            $cart->save();
        }

        return redirect()->route('cart.index');
    }

    public function destroy($id) {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        $order_num = Str::random(5) . '-' . time();
        $carts = Cart::where('user_id', Auth::id())->whereNull('order_num')->get();

        // Won't added to order_detail table if there is no items in cart
        if($carts->isEmpty()) {
            return redirect()->route('cart.index');
        }

        $total_price = 0;

        foreach ($carts as $cart) {
            $total_price += $cart->cart_price;
            $cart->order_num = $order_num;
            $cart->save();
        }

        $order_detail = new OrderDetail();
        $order_detail->order_num = $order_num;
        $order_detail->total_price = $total_price;
        $order_detail->user_id = Auth::id();
        $order_detail->save();

        return redirect()->route('cart.index');
    }

    public function order_history() {
        $orders = OrderDetail::where('user_id', Auth::id())->get();
        $order = $orders->first();

        return view('cart.order_history', compact('orders'));
    }

    public function AddCard(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $cart_price = $product->price * $request->quantity;

        if (Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->where('order_num', null)->exists()) {
            $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->where('order_num', null)->first();
            $cart->quantity += $request->quantity;
            $cart->cart_price += $cart_price;
            $cart->save();
        } else {
            $cart = new Cart();
            $cart->quantity = $request->quantity;
            $cart->cart_price = $cart_price;
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $product_id;
            $cart->save();
        }

        return redirect()->route('cart.index');
    }
    
    function Detail($id){
        $product = Product::find($id);
        $image_found = false;
        $image_path = public_path() . "\images\\" . $product->image;

        if (File::exists($image_path)) {
            $image_found = true;
        }
        return view('detail')->with('product', $product)->with('image_found', $image_found);
    }
  

}
