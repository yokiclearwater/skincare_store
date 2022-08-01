<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
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
        //SELECT * FROM Customers LIMIT 3;
       // $data= Product::where('id')->skip(0)->take(3)->get();
        $data = Product::all();
        //Book::orderBy('updated_at', 'desc')->paginate(8);
        //$products = $art->products->skip(0)->take(3)->get()

        return view('home',['products'=>$data]);
        
    }
    function SkinCare(){
        $data= Product::all();

        return view('skincare',['products'=>$data]);
    }
    function About(){
        $data= Product::all();

        return view('aboutus',['products'=>$data]);
    }
    function Contact(){
        $data= Product::all();

        return view('contact',['products'=>$data]);
    }
}
