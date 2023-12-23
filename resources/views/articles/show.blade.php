@extends('layout')
@section('content')
<h1>{{$article->title}}</h1>
Created date : {{$article->created_at}}
<p>{{$article->body}}</p>

<form method="POST" action="{{ route('articles.destroy', $article) }}">
    @csrf <!--TODO : info minute 11 https://laracasts.com/series/laravel-8-from-scratch/episodes/45 -->
    @method('DELETE') <!--TODO : info - Define the method-->
    <input class="btn btn-primary" type="submit" value="DELETE">
</form>

@foreach($article->categories()->get() as $category)
    <div>
        <p class="text-primary">
            {{$category->name}}
        </p>
    </div>
@endforeach

<a href="{{ route('articles.edit', $article) }}">modifier</a>

<hr>

<h3>Comments</h3>
<form method="POST" action="{{ route('articles.comments.store', $article) }}">
    @csrf <!--TODO : info minute 11 https://laracasts.com/series/laravel-8-from-scratch/episodes/45 -->
    <div class="form-group">
        <label class="form-check-label" for="comment">comment</label><br>
        <input class="form-control" type="text" id="comment" name="comment" required>
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
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
