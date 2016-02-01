@extends('layouts.master')

@section('content')
    <h1>Create Blog</h1>
    <br>
    
    {!! Form::open(['url'=>'blogs']) !!}
    <div class="col-md-6">
        @include('errors.formerrors')
        @include('partials.blogform', ['submitButton' => 'Add Blog'])
    </div>
    
    
    
    {!! Form::close() !!}
@endsection