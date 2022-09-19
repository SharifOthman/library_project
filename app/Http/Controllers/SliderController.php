<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
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


        $background = $request->file('background');
        $name = time().'.'.$background->getClientOriginalExtension();
        $destinationpath = public_path('/upload');
        $background->move($destinationpath , $name);
        $slider->background = $name;

        $image1 = $request->file('image1');
        $name1 = time().'.'.$image1->getClientOriginalExtension();
        $destinationpath1 = public_path('/upload');
        $image1->move($destinationpath1 , $name1);
        $slider->image1 = $name1;


        $image2 = $request->file('image2');
        $name2 = time().'.'.$image2->getClientOriginalExtension();
        $destinationpath2 = public_path('/upload');
        $image2->move($destinationpath2 , $name2);
        $slider->image2 = $name2;


         $image3 = $request->file('image3');
        $name3 = time().'.'.$image3->getClientOriginalExtension();
        $destinationpath3 = public_path('/upload');
        $image3->move($destinationpath3 , $name3);
        $slider->image3 = $name3;

        



        $slider->save();
        $response['data'] = $slider;
        $response['message'] = "Slider Added Successfully";
        return  response()->json($response,200);
        
    }
    public function update(Request $request , $id)
    {
    $slider = Slider::where('id' , $id)->first();
    if (isset($slider))
    {
      if (isset($request->background)){
         $background = $request->file('background');
        $name = time().'.'.$background->getClientOriginalExtension();
        $destinationpath = public_path('/upload');
        $background->move($destinationpath , $name);
        $slider->background = $name;}


         if (isset($request->image1)){
       $image1 = $request->file('image1');
        $name1 = time().'.'.$image1->getClientOriginalExtension();
        $destinationpath1 = public_path('/upload');
        $image1->move($destinationpath1 , $name1);
        $slider->image1 = $name1;
    }


         if (isset($request->image2)){
        $image2 = $request->file('image2');
        $name2 = time().'.'.$image2->getClientOriginalExtension();
        $destinationpath2 = public_path('/upload');
        $image2->move($destinationpath2 , $name2);
        $slider->image2 = $name2;
    }


         if (isset($request->image3)){

        $image3 = $request->file('image3');
        $name3 = time().'.'.$image3->getClientOriginalExtension();
        $destinationpath3 = public_path('/upload');
        $image3->move($destinationpath3 , $name3);
        $slider->image3 = $name3;

        
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
        $response['data'] = '';
        $response['message'] = "Slider Deleted Successfully";
       return  response()->json($response,200);

    }
       $response['data'] = '';
       $response['message'] = "Error Not Found";
       return  response()->json($response,404); 
    
}
}
