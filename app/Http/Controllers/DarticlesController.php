<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Owner;

class DarticlesController extends Controller
{
  public function index()
    {
        $articles = Article::with('owner')->get();
        return view('articles.index', compact('articles'));

        // $response['data'] = $articles;
        //$response['message'] = "This is all articles";
        //return  response()->json($response,200);
    }
    public function show($id)
    {
        $article = Article::find($id);
        if (isset($article)) {
            $response['data'] = $article;
            $response['message'] = "Success";
            return  response()->json($response, 200);
        }
        $response['data'] = $article;
        $response['message'] = "Error Not Found";
        return  response()->json($response, 404);
    }
    public function create()
    {
        $owners = Owner::all();
        return view('articles.create', compact('owners'));
    }
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->line = $request->line;
        $article->owner_id = $request->owner_id;

        $image = $request->file('image');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationpath = public_path('/upload');
        $image->move($destinationpath, $name);
        $article->image = $name;

        $article->save();
        return back();
        // $response['data'] = $article;
        // $response['message'] = "Article Added Successfully";
        // return  response()->json($response,200);

    }
    public function edit($id)
    {
        $article = Article::find($id);
        $owners = Owner::all();
        return view('articles.edit', compact('article', 'owners'));
    }
    public function update(Request $request, $id)
    {
        $article = Article::where('id', $id)->first();
        if (isset($article)) {
            if (isset($request->title)) {
                $article->title = $request->title;
            }

            if (isset($request->line)) {
                $article->line = $request->line;
            }

            if (isset($request->image)) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationpath = public_path('/upload');
                $image->move($destinationpath, $name);
                $article->image = $name;
            }

            $article->save();
            return back();
            //  $response['data'] = $article;
            //  $response['message'] = "Update Successfully ";
            // return  response()->json($response,200);

        }
        // $response['data'] = '';
        // $response['message'] = "Error Not Found";
        // return  response()->json($response,404);
        //
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        if (isset($article)) {
            $article->delete();
            return back();
            // $response['data'] = '';
            //$response['message'] = "Article Deleted Successfully";
            //return  response()->json($response,200);

        }
        //$response['data'] = '';
        //$response['message'] = "Error Not Found";
        //return  response()->json($response,404);

    }
    public function SearchByArticles(Request $request)
    {

        $data = $request->get('data');

        $search_article = Article::where('title', 'like', "%{$data}%")->get();
        if (count($search_article)) {
            $response['data'] = $search_article;
            $response['message'] = "success";
            return response()->json([$response, 200]);
        } else {
            return response()->json(['message' => ' Data not found'], 404);
        }
    }
}
