<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Article $article)
    {
        //TODO : change by directly getting the objects
        $validated = $request->validate([
            'comment' => 'required'
        ]);

        $validated['article_id'] = $article->id;
        Comment::create($validated);

        return redirect()->route('articles.index');
    }

}
