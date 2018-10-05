<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get articles
        $articles = Article::select('id','title','body', 'created_at')
                            ->orderBy('id', 'desc')
                            ->get();
        // return data
        return view('articles.index')->with('articles', json_decode($articles));
    }

    public function create() 
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //create articles
        $article = new Article;
        $article->title  = $request->input('title');
        $article->body = $request->input('body');
        if ($article->save())
            return redirect('/articles')->with('success', 'Article Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get single article
        $article = Article::findOrFail($id);
        return view('articles.show')->with('article', json_decode($article));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit')->with('article', $article);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //update articles
        $article = Article::find($id);
        $article->title  = $request->input('title');
        $article->body = $request->input('body');
        if ($article->save())
            return redirect('/articles')->with('success', 'Article updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles')->with('success', 'Article removed');

    }
}
