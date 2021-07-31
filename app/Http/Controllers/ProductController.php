<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();

        return View('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data= Product::find($id);
        return View('detail',['product'=>$data]);
    }
    function AddToCart(Request $req)
    {
       if($req ->session()->has('user'))
       {
           
        
        $cart= new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        
    }
        else
    {
        return redirect('/login');
        }
    }
    function cartItem()
    {
        
    }
}
