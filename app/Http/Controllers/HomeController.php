<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Product::all();
        $count = Auth::user()->carts->where('order_num', null)->count();

        return view('home', ['products' => $data]);
    }
    function SkinCare()
    {
        $data = Product::all();

        return view('skincare', ['products' => $data]);
    }
    function About()
    {
        $data = Product::all();

        return view('aboutus', ['products' => $data]);
    }
    function Contact()
    {
        $data = Product::all();

        return view('contact', ['products' => $data]);
    }
}
