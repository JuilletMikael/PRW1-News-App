@extends('layout')
@section('content')
<form method="POST" action="{{ route('articles.store') }}">
    @csrf <!--TODO : info minute 11 https://laracasts.com/series/laravel-8-from-scratch/episodes/45 -->

    <label for="title">title</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="body">body</label>
    <textarea type="text" id="body" name="body" required></textarea>
    <br>
    <input type="submit" value="VALIDATE">
</form>
@endsection
