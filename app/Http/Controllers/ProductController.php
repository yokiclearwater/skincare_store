<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $categories = array('Cleanser', 'Exforliator', 'Treatment', 'Serum', 'Face Oil', 'Sunscreen');

    public function index(Request $request)
    {
        $products_query = Product::query();
        $search = $request->search;

        if ($search) {
            $products_query = Product::search($search);
        }

        $products = $products_query->get();

        return view('product.index')->with('products', $products);
    }
    function Search(Request $req){
       
        $products_query = Product::query();
        $search = $req->search;

        if ($search) {
            $products_query = Product::search($search);
        }

        $products = $products_query->get();

        return view('product.search')->with('products', $products);
    
    }
    // public function search(Request $request)
    // {
    //     $products = Product::where('name', 'like', '%' . $request->search . '%')->get();

    //     return view('product.index')->with('products', $products);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create')->with('categories', $this->categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $newImageName = time() . '-' . $request->image->hashName();
        $request->image->move(public_path('images'), $newImageName);


        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $newImageName,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);
        $image_found = false;
        $image_path = public_path() . "\images\\" . $product->image;

        if (File::exists($image_path)) {
            $image_found = true;
        }

        return view('product.show')->with('product', $product)->with('image_found', $image_found);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);

        // dd($product->name);

        return view('product.edit')->with('product', $product)->with('categories', $this->categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $old_image_path = public_path('images') . "\\" . $product->image;
            if (File::exists($old_image_path)) {
                File::delete($old_image_path);
            }

            $newImageName = time() . '-' . $request->image->hashName();
            $request->image->move(public_path('images'), $newImageName);
        }

        Product::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $newImageName ?? $product->image,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        $image_path = public_path() . "\images\\" . $product->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        return redirect()->route('products.index');
    }
}
