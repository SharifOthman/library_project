<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Author;


class DproductsController extends Controller
{
  public function index()
    {
    
    $products = Product::with('category')->with('author')->get();
    return view('products.index', compact('products'));

  //  $response['data'] = $Products;
   // $response['message'] = "This is all Products";
    //return  response()->json($response,200);
    }
    public function show($id)
    {
    $product = Product::find($id);
    if (isset($product)) {
       $response['data'] = $product;
       $response['message'] = "Success";
       return  response()->json($response,200);

    }
       $response['data'] = $product;
       $response['message'] = "Error Not Found";
       return  response()->json($response,404);
    
    }
     public function create()
    {
     $categories = Category::all();
     $authors = Author::all();
     return view('products.create',compact('categories','authors'));
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->is_offer = $request->is_offer;
        $product->offer_discount = $request->offer_discount;
        $product->category_id = $request->category_id;
        $product->author_id = $request->author_id;

        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationpath = public_path('/upload');
        $image->move($destinationpath , $name);
        $product->image = $name;

        $file = $request->file('file');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $destinationpath1 = public_path('/upload');
        $file->move($destinationpath1 , $file_name);
        $product->file = $file_name;


        $product->save();
         return back();

       // $response['data'] = $product;
      //  $response['message'] = "Product Added Successfully";
      //  return  response()->json($response,200);
        
    }
         public function edit($id)
   {
    $product = Product::find($id);
    $categories = Category::all();
    $authors = Author::all();
     return view('products.edit',compact('product','categories','authors'));

   }
    public function update(Request $request , $id)
    {
    $product = Product::where('id' , $id)->first();
    if (isset($product))
    {
      if (isset($request->name)){
        $product->name = $request->name;}

      if (isset($request->price)){
        $product->price = $request->price;}

      if (isset($request->description)){
        $product->description = $request->description;}

      if (isset($request->is_offer)){
        $product->is_offer = $request->is_offer;}

      if (isset($request->offer_discount)){
        $product->offer_discount = $request->offer_discount;}

        if (isset($request->category_id)){
          $product->category_id = $request->category_id;}

          if (isset($request->author_id)){
            $product->author_id = $request->author_id;}

      if (isset($request->image)) 
            { 
               $image = $request->file('image');
               $name = time().'.'.$image->getClientOriginalExtension();
               $destinationpath = public_path('/upload');
               $image->move($destinationpath , $name);
               $product->image = $name;
           }
    if (isset($request->file)) 
            { 
              $file = $request->file('file');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $destinationpath1 = public_path('/upload');
        $file->move($destinationpath1 , $file_name);
        $product->file = $file_name;
            }

        $product->save();
        return back();
       // $response['data'] = $product;
      //  $response['message'] = "Update Successfully ";
    //   return  response()->json($response,200);

    }
       $response['data'] = '';
       $response['message'] = "Error Not Found";
       return  response()->json($response,404);

    }
    public function destroy($id)
    {
         $product = Product::find($id);
  if (isset($product)) {
        $product->delete();
        return back();
    //    $response['data'] = '';
     //   $response['message'] = "Product Deleted Successfully";
      // return  response()->json($response,200);

    }
 //      $response['data'] = '';
   //    $response['message'] = "Error Not Found";
     //  return  response()->json($response,404); 
    
}
public function SearchByProduct(Request $request) 
{

    $data = $request->get('data');

    $search_product = Product::where('name', 'like', "%{$data}%")->get();
    if (count($search_product)){
        $response['data'] = $search_product;
       $response['message'] = "success";
       return response()->json([$response,200]);     
   }
   else
   {
    return response()->json(['message' => ' Data not found'], 404);
}

}
}
