<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FavoriteProduct;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
class FavoriteController extends Controller
{
public function index(){
    
    $favorites = FavoriteProduct::with('product')->where('user_id',auth()->user()->id)->get();
    
     return $favorites;
}


    public function store($id)
 {
    $favorite=FavoriteProduct::where('product_id',$id)->where('user_id',Auth::user()->id)->first();
    if(!$favorite)
    {
  $favorite=new FavoriteProduct();
  $favorite->value=1;
  $favorite->product_id=$id;
  $favorite->user_id=auth()->user()->id;
  $favorite->save();
  $product=Product::find($id);
  $product->save();
    }
  if (isset($product)) {
    
    return $product ;
    }
    else
  {
        $product = Product::find($id);
  if (isset($product)) 
    {
        
        $favorite->delete();
        
    } 
  }
 }
}
