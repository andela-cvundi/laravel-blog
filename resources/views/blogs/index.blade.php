@extends('layouts.master')


@section('content')
<h1>All Blogs</h1>

    @foreach ($blogs as $blog)
        <a href="{{ action('BlogsController@show', [$blog->id]) }}"><h2>{{ $blog->title }}</h2></a>
        <p>{{ $blog->body }}</p>
    @endforeach
    
@endsection