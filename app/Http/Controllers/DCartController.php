<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
class DCartController extends Controller
{
    public function index()
    {
    $carts = Cart::all()->where('user_id',auth()->user()->id);
    return $carts ;

    }
public function store(Request $request ,$id)
    {
        $cart = new Cart();
        $cart->total_value = 0;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $id;
        $cart->save();
      return $cart;
      

    }
public function destroy($id)
    {
         $category = Cart::find($id);
         $category->delete();
         
 

}
}
