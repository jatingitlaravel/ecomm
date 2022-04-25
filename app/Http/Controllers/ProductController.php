<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    //
    function index()    
    {
        $data= Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data= product ::find($id);
        return view('detail',['product'=>$data]);
    }

    function addtoCart(Request $req)
    {
        if ($req->session()->has('user'))
        {
                $cart= new Cart;
                $cart->user_id=$req->session()->get('user')['id'];
                $cart->product_id=$req->product_id;
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
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
      $userId=Session::get('user')['id'];
      $product= DB::table('cart')
      ->join('product','cart.product_id','=','product_id')
      ->where('cart.user_id', $userId)
      ->select('product.*','cart.id as cart_id')
      ->get();

      return view('cartlist',['product'=>$product]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    
}
