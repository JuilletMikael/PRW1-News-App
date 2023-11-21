<h1>{{$article->title}}</h1>
Created date : {{$article->created_at}}
<p>{{$article->body}}</p>

<a href="">update</a>
<a href="/articles/{{$article->id}}" data-method="delete">delete</a>

