@extends('layout')
<?php $submit = "send" ?>

@section('content')
    <form method="POST" action="{{ route('articles.update', $article) }}">
        @method('PUT')
        @csrf <!--TODO : info minute 11 https://laracasts.com/series/laravel-8-from-scratch/episodes/45 -->
        @include('articles.fields')
    </form>
@endsection
