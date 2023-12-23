@extends('layout')
<?php $submit = "send" ?>

@section('content')
    <form method="POST" action="{{ route('articles.store') }}">
        @csrf <!--TODO : info minute 11 https://laracasts.com/series/laravel-8-from-scratch/episodes/45 -->
        @include('articles.fields', ['categories' => $categories])
    </form>
@endsection
