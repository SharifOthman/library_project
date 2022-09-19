<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorsController extends Controller
{
    public function index()
    {
     $authors = Author::all();
    return $authors;

    }
    public function show($id)
    {
    $author = Author::find($id);
    if (isset($author)) {
      
       return $author;

    }
    
    }
   
    public function store(Request $request)
    {
        $author = new Author();
        $author->full_name = $request->full_name;
		$author->birth_date = $request->birth_date;
		$author->death_date = $request->death_date;
		$author->resum = $request->resum;
		$author->facebook_link = $request->facebook_link;
		$author->instagram_link = $request->instagram_link;
		$author->twitter_link = $request->twitter_link;

        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationpath = public_path('/upload');
        $image->move($destinationpath , $name);
        $author->image = $name;

        $author->save();
        return $author;
        
    }
    public function update(Request $request , $id)
    {
    $author = Author::where('id' , $id)->first();
    if (isset($author))
    {
      if (isset($request->full_name)){
        $author->full_name = $request->full_name;}

      if (isset($request->birth_date)){
        $author->birth_date = $request->birth_date;}

      if (isset($request->death_date)){
        $author->death_date = $request->death_date;}

      if (isset($request->resum)){
        $author->resum = $request->resum;}

      if (isset($request->facebook_link)){
        $author->facebook_link = $request->facebook_link;}

      if (isset($request->instagram_link)){
        $author->instagram_link = $request->instagram_link;}

      if (isset($request->twitter_link)){
        $author->twitter_link = $request->twitter_link;}

      if (isset($request->image)) 
            { 
               $image = $request->file('image');
               $name = time().'.'.$image->getClientOriginalExtension();
               $destinationpath = public_path('/upload');
               $image->move($destinationpath , $name);
               $author->image = $name;
           }

        $author->save();
        return $author;
       
    }
   

    }
    public function destroy($id)
    {
         $author = Author::find($id);
         $author->delete();
    
    }
public function SearchByAuthers(Request $request) 
{

    $data = $request->get('data');

    $search_authers = Author::where('full_name', 'like', "%{$data}%")->get();
    if (count($search_authers)){
        $response['data'] = $search_authers;
       $response['message'] = "success";
       return response()->json([$response,200]);     
   }
   else
   {
    return response()->json(['message' => ' Data not found'], 404);
}

}
}
