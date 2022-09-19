<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutuss = AboutUs::all();
       return $aboutuss;
       
    }
    public function show($id)
    {
        $aboutus = AboutUs::find($id);
        if (isset($aboutus)) {
           return $aboutus;
    }
    public function store(Request $request)
    {
        $aboutus = new AboutUs();
        $aboutus->know_more = $request->know_more;
        $aboutus->our_joruny = $request->our_joruny;

        $video = $request->file('video_link');
        $name = time() . '.' . $video->getClientOriginalExtension();
        $destinationpath = public_path('/upload_video');
        $video->move($destinationpath, $name);
        $aboutus->video_link = $name;

        $aboutus->save();
        return $aboutus;
       

    }
   
    public function update(Request $request, $id)
    {
        $aboutus = AboutUs::where('id', $id)->first();
        if (isset($aboutus)) {
            if (isset($request->know_more)) {
                $aboutus->know_more = $request->know_more;
            }

            if (isset($request->our_joruny)) {
                $aboutus->our_joruny = $request->our_joruny;
            }

            if (isset($request->video_link)) {
                $video = $request->file('video_link');
                $name = time() . '.' . $video->getClientOriginalExtension();
                $destinationpath = public_path('/upload_video');
                $video->move($destinationpath, $name);
                $aboutus->video_link = $name;
            }

            $aboutus->save();
            return  $aboutus;
    }
}
    public function destroy($id)
    {
        $aboutus = AboutUs::find($id);
        if (isset($aboutus)) {
            $aboutus->delete();
          
        }
       
}
