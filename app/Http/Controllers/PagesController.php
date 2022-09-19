<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Author;
use App\Models\Owner;
use App\Models\AboutUs;
use App\Models\Slider;
use App\Models\Article;
use App\Models\ViewProducts;
use App\Models\User;
use App\Models\FavoriteProduct;


class PagesController extends Controller
{
    public function index()
    {

        $categories=Category::with('products')->get();
        $owners = Owner::all();
        $sliders = Slider::all();
        return view('web.index', compact('categories', 'owners', 'sliders'));
    }
    public function order_name($id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->orderBy('name', 'asc')->get();
        $owners = Owner::all();
        $sliders = Slider::all();

        return view('order.order', compact('products', 'owners', 'sliders','category'));
    }

     public function order_price($id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->orderBy('price', 'asc')->get();
        $owners = Owner::all();
        $sliders = Slider::all();

        return view('order.order', compact('products', 'owners', 'sliders','category'));
    }
  


    public function authors()
    {
        $authors = Author::all();
        $owners = Owner::all();

        return view('web.authors', compact('authors', 'owners'));
    }
   
    public function articles()
    {

        $owners = Owner::all();
        $articles = Article::with('owner')->get();

        return view('web.articles', compact('owners', 'articles'));
    }
    public function aboutus()
    {
        $owners = Owner::all();
        $aboutus = AboutUs::all();

        return view('web.aboutus', compact('owners', 'aboutus'));
    }
    public function login_user()
    {


        return view('web.login_user');
    }
    public function register_user()
    {


        return view('web.register_user');
    }
    public function dashboard()
    {


        return view('dashboard');
    }
    public function art_photography()
    {
        $category = Category::where('name', 'Art & photography')->with('products')->first();
        $owners = Owner::all();

        return view('category.art', compact('category', 'owners'));
    }
    public function biography()
    {
        $category = Category::where('name', 'Biography')->with('products')->first();
        $owners = Owner::all();

        return view('category.biography', compact('category', 'owners'));
    }
    public function children()
    {
        $category = Category::where('name', 'children')->with('products')->first();
        $owners = Owner::all();

        return view('category.children', compact('category', 'owners'));
    }
    public function fantasy_horror()
    {
        $category = Category::where('name', 'Fantasy & Horror')->with('products')->first();
        $owners = Owner::all();

        return view('category.fantasy', compact('category', 'owners'));
    }
    public function food_drink()
    {
        $category = Category::where('name', 'Food & drink')->with('products')->first();
        $owners = Owner::all();

        return view('category.food_drink', compact('category', 'owners'));
    }
    public function anime()
    {
        $category = Category::where('name', 'graphic Anime & manga')->with('products')->first();
        $owners = Owner::all();

        return view('category.anime', compact('category', 'owners'));
    }
    public function craft_hobbies()
    {
        $category = Category::where('name', 'craft & Hobbies')->with('products')->first();
        $owners = Owner::all();

        return view('category.craft', compact('category', 'owners'));
    }
    public function fiction()
    {
        $category = Category::where('name', 'Fiction')->with('products')->first();
        $owners = Owner::all();

        return view('category.fiction', compact('category', 'owners'));
    }
    public function science_fiction()
    {

        $category = Category::where('name', 'science Fiction')->with('products')->first();
        $owners = Owner::all();

        return view('category.science', compact('category', 'owners'));
    }
    public function crime_thriller()
    {

        $category = Category::where('name', 'crime & Thriller')->with('products')->first();
        $owners = Owner::all();

        return view('category.crime', compact('category', 'owners'));
    }
  public function product_show($id)
    {
        $product = Product::where('id', $id)->with('author')->first();
        $owners = Owner::all();
         $view = ViewProducts::where('product_id', $id)->where('user_id', Auth::user()->id)->first();
        if (!$view) {
            $view = new ViewProducts();
            $view->product_id = $id;
            $view->user_id = Auth()->user()->id;
            $view->save();
            $product = Product::find($id);
            $product->count_view++;
            $product->save();
             return view('single_page.product_show', compact('product', 'owners','view')); 
        } else {
            return view('single_page.product_show', compact('product', 'owners','view')); 
        }
    }
             
     

    public function show_authors($id)
    {
        $author = Author::find($id);
        $owners = Owner::all();

        return view('single_page.author_show', compact('author', 'owners'));
    }
    public function master()
    {
        $owners = Owner::all();
        return view('web.master', compact('owners'));
    }
    public function show_admin($id)
    {
        $owner = Owner::find($id);
        $owners = Owner::all();

        return view('single_page.admin_show', compact('owner', 'owners'));
    }
    public function ourstory()
    {
        $owners = Owner::all();
        return view('web.ourstory', compact('owners'));
    }
    public function termofuse()
    {
        $owners = Owner::all();
        return view('web.termofuse', compact('owners'));
    }
    public function termofsale()
    {
        $owners = Owner::all();
        return view('web.termofsale', compact('owners'));
    }

     public function SearchByProduct(Request $request)
    {
        $owners = Owner::all();
        $data = $request->data;
        $search_products = Product::where('name', 'like', "%{$data}%")->get();
        if (count($search_products)) {
            return view('search.search',compact('search_products','owners'));
        } 
    }
 
   public function store_favorite($id)
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
  return back();
}
    else
{
        $product = Product::find($id);
  if (isset($product)) 
    {
        
        $favorite->delete();
        return back();
       
    } 
  }
 }
    public function favorite()
    {
    $owners = Owner::all();
    $favorites = FavoriteProduct::with('product')->where('user_id',auth()->user()->id)->get();
    return view('favorite.favorite',compact('owners','favorites'));
}

}
