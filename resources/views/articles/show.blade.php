@extends('layout')
@section('content')
<h1>{{$article->title}}</h1>
Created date : {{$article->created_at}}
<p>{{$article->body}}</p>

<form method="POST" action="{{ route('articles.destroy', $article) }}">
    @csrf <!--TODO : info minute 11 https://laracasts.com/series/laravel-8-from-scratch/episodes/45 -->
    @method('DELETE') <!--TODO : info - Define the method-->
    <input type="submit" value="DELETE">
</form>

<a href="{{ route('articles.edit', $article) }}">modifier</a>

<hr>

<h3>Comments</h3>
<form method="POST" action="{{ route('articles.comments.store', $article) }}">
    @csrf <!--TODO : info minute 11 https://laracasts.com/series/laravel-8-from-scratch/episodes/45 -->
    <label for="comment">comment</label><br>
    <input type="text" id="comment" name="comment" required>
    <input type="number" id="article_id" name="article_id" hidden="hidden" value="{{$article->id}}">
    <input type="submit" value="Submit">
</form>

<h3>has commented</h3>
<!-- TODO : is it ok to do thigs like that ? -->
@foreach($article->comments()->get() as $comment)
    <div>
        <p>
            {{$comment->comment}}
        </p>
    </div>
@endforeach

@endsection
