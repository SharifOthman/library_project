<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentProduct;
use Illuminate\Support\Facades\Auth;

class CommentProductController extends Controller
{
    public function index($id)
    {
     $comments = CommentProduct::where('product_id', $id)->get();
     $response['data'] = $comments;
     $response['message'] = "This is all comments";
     return  response()->json($response,200);
    }
    public function store(Request $request)
    {
        $comment = new CommentProduct();
		$comment->line = $request->line;
		$comment->user_id = Auth::user()->id;
		$comment->product_id = $request->product_id;

        $comment->save();
        $response['data'] = $comment;
        $response['message'] = "Added Successfully";
        return  response()->json($response,200);
        
    }
    public function update(Request $request , $id){
    {
      
    $comment = CommentProduct::where('id' , $id)->first();
    if (isset($comment))
    {
      if (isset($request->line)){
        $comment->line = $request->line;}
        
        if (isset($request->user_id)){
          $comment->user_id = $request->user_id;}

      if (isset($request->product_id)){
        $comment->product_id = $request->product_id;}

        $comment->save();
        $response['data'] = $comment;
        $response['message'] = "Update Successfully ";
       return  response()->json($response,200);

    }
       $response['data'] = '';
       $response['message'] = "Error Not Found";
       return  response()->json($response,404);

    }

    }

    public function destroy($id)
    {
         $comment = CommentProduct::find($id);
  if (isset($comment)) {
        $comment->delete();
        $response['data'] = '';
        $response['message'] = "Deleted Successfully";
       return  response()->json($response,200);

    }
       $response['data'] = '';
       $response['message'] = "Error Not Found";
       return  response()->json($response,404); 
    
}
}
