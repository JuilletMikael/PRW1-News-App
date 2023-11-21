<h1>{{$article->title}}</h1>
Created date : {{$article->created_at}}
<p>{{$article->body}}</p>

<a href="">update</a>
<form method="POST" action="{{ route('articles.destroy', $article) }}">
    @csrf <!--TODO : info minute 11 https://laracasts.com/series/laravel-8-from-scratch/episodes/45 -->
    @method('DELETE') <!--TODO : info - Define the method-->
    <input type="submit" value="DELETE">
</form>
