<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index()
    {
        $data=Product::all();
        return view('product',['product'=>$data]); 
    }

    function detail($id)
    {
        $data=Product::find($id);
        return view('detail',['details'=>$data]);
    }

    function search(Request $req)
    {
       $data=Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['product'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->productid;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userID=Session::get('user')['id'];
        return cart::where('user_id',$userID)->count();
    }
    function cartlist()
    {
        $userID=Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userID)        
        ->select('products.*')
        ->get();

        return view('cartlist',['productdetails'=>$products]);
    }
}
