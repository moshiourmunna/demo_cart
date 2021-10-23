<?php

namespace App\Http\Controllers;

use App\Product;
use App\Catagory;
use App\Cart;
use Illuminate\Http\Request;
use DB;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with("catagories")->paginate(5);
        // $products = DB::table('products')
        // ->join('catagories', 'catagories.id', '=', 'products.catagory_id')
        // ->select('products.*', 'catagories.title as title')
        // // ->where('products', '>', 10)
        // ->paginate(10);

        return view('products.list',compact('products'));
    
    }

    public function addToCart(Request $request,$product_id)
    {
        // Cart::insert([
        //     'product_id' => $product_id,
        //     'quantity' => 1,
        //     'user_ip' => $request()->ip(),
        // ]);

        $check = Cart::where('product_id',$product_id)->where('user_ip',$request->ip())->first();
        if($check){
            Cart::where('product_id',$product_id)->where('user_ip',$request->ip())->increment('quantity');
        }else{ 
            $cart = New Cart;
            // $cart['catagory_id'] = $request['catagory_id'];
            // $cart['product_id'] = $request['product_id'];
            $cart->quantity = 1;
            $cart->catagory_id = $request->catagory_id;
            $cart->product_id = $request->product_id;
            $cart->user_ip = $request->ip();
            
            $cart->save();
        }
        return redirect()->back();
    }

    public function cart()
    {
        $carts = DB::table('carts')
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->join('catagories', 'catagories.id', '=', 'carts.catagory_id')
        ->select('carts.*', 'products.price as product_price', 'products.name as product_name', 'catagories.title as title')
        // ->where('products', '>', 10)
        ->where('user_ip',request()->ip())
        ->latest()
        ->get();

        return view('products.cart',compact('carts'));
    
    }

    // static function cartItem()
    // {
    //     $product_id = Session::get('product')['id'];
    //     return Cart::where('product_id',$product_id)->count();

    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product = Product::first();
       $catagory = Catagory::first();
       $cart = Cart::first();
       
       return view('products.show',compact('product','catagory','cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
