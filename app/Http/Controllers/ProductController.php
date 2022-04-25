<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        return "hello";
    }
}
