<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class DCategoriesController extends Controller
{
 public function index()
    {
     $categories = Category::all();
        return view('categories.index', compact('categories'));

   //  $response['data'] = $categories;
   //  $response['message'] = "This is all categories";
   //  return  response()->json($response,200);
    }
    public function show($id)
    {
    $category = Category::find($id);
    if (isset($category)) {
       $response['data'] = $category;
       $response['message'] = "Success";
       return  response()->json($response,200);

    }
       $response['data'] = $category;
       $response['message'] = "Error Not Found";
       return  response()->json($response,404);

    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return back();

       // $response['data'] = $category;
       // $response['message'] = "Category Created Successfully";
        //return  response()->json($response,200);

    }
       public function edit($id)
   {
    $category = Category::find($id);
    return view('categories.edit', compact('category'));

   }
    public function update(Request $request , $id)
    {
    $category = Category::where('id' , $id)->first();
    if (isset($category))
    {
        if (isset($request->name)){
        $category->name = $request->name;}
        $category->save();
        return back(); 
      //  $response['data'] = $category;
       // $response['message'] = "Update Successfully ";
      // return  response()->json($response,200);

    }
    //   $response['data'] = '';
     //  $response['message'] = "Error Not Found";
     //  return  response()->json($response,404);

    }
    public function destroy($id)
    {
         $category = Category::find($id);
         $category->delete();
         return back();
 // if (isset($category)) {
   //     $category->delete();

    //    $response['data'] = '';
  //      $response['message'] = "Category Deleted Successfully";
  //     return  response()->json($response,200);

  //  }
      // $response['data'] = '';
     //  $response['message'] = "Error Not Found";
     //  return  response()->json($response,404);

}
}
