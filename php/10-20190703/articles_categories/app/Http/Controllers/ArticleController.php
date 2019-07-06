<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $article = new Article;
        $title =$article->title =  $request->title;
        $slug = $article->slug =  $request->slug;
        $description = $article->description =$request->description;
        $content = $article->content = $request->content;
        $image_path = $article->image_path = $request->image_path;
        $article->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $newarticle = Article::find($article);
        return view('articles.show',['article'=>$newarticle[0]]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $newarticle = Article::find($article);
        $categories = Category::all();
        return view('articles.edit',['article'=>$newarticle[0],'categories'=>$categories]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $title=  $request->title;
        $slug =  $request->slug;
        $description =$request->description;
        $content =  $request->content;
        $image_path  = $request->image_path;
        Article::find($article)->update([
            'title'=>$title,
            'slug'=>$slug,
            'description'=>$description,
            'content'=>$content,
            'image_path'=>$image_path
        ]);
        return ridirect()->route('articles.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
