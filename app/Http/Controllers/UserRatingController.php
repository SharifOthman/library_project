<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRating;
use Illuminate\Support\Facades\Auth;

class UserRatingController extends Controller
{
    public function index()
    {

     $rates = UserRating::all();
     $response['data'] = UserRating::all()->avg('rating');
     $response['message'] = "This is all ratess";
     return  response()->json($response,200);
    }
    public function store(Request $request)
    {


        $rate = new UserRating();
		$rate->rating = $request->rating;
		$rate->user_id = Auth::user()->id;
		$rate->product_id = $request->product_id;

        $rate->save();
        $response['data'] = $rate;
        $response['message'] = "Added Successfully";
        return  response()->json($response,200);
        
    }
public function destroy($id)
    {
         $rate = UserRating::find($id);
  if (isset($rate)) {
        $rate->delete();
        $response['data'] = '';
        $response['message'] = "Deleted Successfully";
       return  response()->json($response,200);

    }
       $response['data'] = '';
       $response['message'] = "Error Not Found";
       return  response()->json($response,404); 
    
}


}
