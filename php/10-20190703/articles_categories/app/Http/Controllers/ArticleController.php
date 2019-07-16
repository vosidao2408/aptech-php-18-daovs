<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(5);
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
        $article = new Article;
        $title =$article->title =  $request->title;
        $slug = $article->slug =  str_replace(' ','-',$request->slug);
        $description = $article->description =$request->description;
        $content = $article->content = $request->content;
        $image_path = $article->image_path = $request->image_path;
        $article->save();
         $article->categories()->sync($request->categories, false);
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $newarticle = Article::where('slug',$slug)->get();
        return view('articles.show',['article'=>$newarticle[0]]);   
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $newarticle = Article::where('slug',$slug)->get();
        $categories = Category::all();
        $cats = array();
        foreach ($newarticle[0]->categories as $category)
         $cats[$category->id] = $category->name;
        //  dd($cats);
        return view('articles.edit',['article'=>$newarticle[0],'categories'=>$categories,'cats'=>$cats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $title=  $request->title;
        $slug =  str_replace(' ','-',$request->slug);
        $description =$request->description;
        $content =  $request->content;
        $image_path  = $request->image_path;
        Article::where('slug',$slug)->update([
            'title'=>$title,
            'slug'=>$slug,
            'description'=>$description,
            'content'=>$content,
            'image_path'=>$image_path
        ]);
        $article = Article::where('slug',$slug)->get();
        if(isset($request->categories)){
            $article[0]->categories()->sync($request->categories);
        }
        else{
            $article[0]->categories()->sync(array());
        }
        return redirect()->route('articles.show',$slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();
        $article->delete();
        return redirect()->route('articles.index');
    }
}
