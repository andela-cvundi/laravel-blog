@extends('layouts.master')


@section('content')
    <h1>The Blog</h1>
   
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->body }}</p>
   
    
@endsection