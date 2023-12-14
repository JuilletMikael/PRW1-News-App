<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * Do not use where controller in the controller we need to have the intention and not the comportment
     */
    public static function index(Request $request)
    {
        $articles = new Article();
        //$articles = Article::filter($request)->unarchived($request)->get();
        $articles = $request->has('archived') ? $articles->archived() : $articles->unarchived($request);
        if ($request->has('search'))  $articles->searchTitle($request->get('search'));

        return view('articles.index', [
            'articles' => $articles->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create', ['article' => new Article()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //TODO : Info - Create array containing variables and their values
        //TODO : Info - articles.show page show

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // create new method on the class
        $article->archive();
        return redirect()->route('articles.index');
    }
}
