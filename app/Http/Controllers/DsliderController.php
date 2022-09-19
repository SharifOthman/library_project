<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;


class DsliderController extends Controller
{
  public function index()
    {
     $sliders = Slider::all();
     return view('sliders.index', compact('sliders'));
    // $response['data'] = $sliders;
     //$response['message'] = "This is all sliders";
    // return  response()->json($response,200);
    }
    public function show($id)
    {
    $slider = Slider::find($id);
    if (isset($slider)) {
       $response['data'] = $slider;
       $response['message'] = "Success";
       return  response()->json($response,200);

    }
       $response['data'] = $slider;
       $response['message'] = "Error Not Found";
       return  response()->json($response,404);
    
    }
    public function create()
    {
        return view('sliders.create');
    }
      public function edit($id)
   {
    $slider = Slider::find($id);
    return view('sliders.edit', compact('slider'));

   }
    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->line = $request->line;
        $slider->read_link = $request->read_link;

        $image = $request->file('image');
        $name1 = time().'.'.$image->getClientOriginalExtension();
        $destinationpath1 = public_path('/upload');
        $image->move($destinationpath1 , $name1);
        $slider->image = $name1;


        $slider->save();
        return back();
        
    }
    public function update(Request $request , $id)
    {
    $slider = Slider::where('id' , $id)->first();
    if (isset($slider))
    {
     

         if (isset($request->image)){
       $image = $request->file('image');
        $name1 = time().'.'.$image->getClientOriginalExtension();
        $destinationpath1 = public_path('/upload');
        $image->move($destinationpath1 , $name1);
        $slider->image = $name1;
    }



      if (isset($request->line)){
        $slider->line = $request->line;}

      if (isset($request->read_link)){
        $slider->read_link = $request->read_link;}

        $slider->save();
        return back();
      //  $response['data'] = $slider;
   //     $response['message'] = "Update Successfully ";
   //    return  response()->json($response,200);

    }
      // $response['data'] = '';
       //$response['message'] = "Error Not Found";
      // return  response()->json($response,404);

    }
    public function destroy($id)
    {
         $slider = Slider::find($id);
  if (isset($slider)) {
        $slider->delete();
        return back();
       

    }
    
    
}
}
