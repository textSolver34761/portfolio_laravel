<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show'] ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//voir les tags
    {
        
        $articles = Article::orderBy('created_at','desc')->paginate(5);
        $tags = Tag::all();
        return view('articles.index')->with('articles',$articles)->with('tags',$tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // liés les tags
    {
        $tags = Tag::all();
        return view ('articles.create')->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // enregistrer les tags
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',

        ]);

        //Save Article newly created
        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->content = $request->input('content');
        $articles->save();

        $articles->tags()->sync($request->tags,false);

        return redirect('/articles')->with('success','You have successfully created an article!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::find($id);
        return view ('articles.show')->with('articles',$articles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // modifier les tags
    {
        $articles = Article::find($id);
        $tags = Tag::all();
        $tags2 = array();
        foreach($tags as $tag){
            $tags2[$tag->id] = $tag->name;
        }
        //Check correct users

        if(auth()->user()->role !== 1){
            return redirect ('/articles')->with('error','You are not authorized !');
        }

        return view ('articles.edit')->with('articles',$articles)->with('tags',$tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) 
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required'
        ]);
        //Save updated article
        $articles = Article::find($id);
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->content = $request->input('content');
        $articles->save();

        if(isset($request->tags)){
            $articles->tags()->sync($request->tags);
        }else{
            $articles->tags()->sync(array());
        }

        return redirect('/articles')->with('success','You have successfully updated an article!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // detruire les tags
    {
        $articles = Article::find($id);
        $articles->tags()->detach();

        //Check correct users

        if(auth()->user()->role !== 1){
            return redirect ('/articles')->with('error','You are not authorized !');
        }

        $articles->delete();
        return redirect('/articles')->with('success','You have successfully deleted an article!');


    }
}
