@extends('layouts.master')

@section('content')
<h1>{{ $blog->title }}</h1>
<br>

{!! Form::model($blog, ['method' => 'patch', 'action' => ['BlogsController@update', $blog->id]]) !!}
    <div class="col-md-6">
        @include('errors.formerrors')
        @include('partials.blogform', ['submitButton' => 'Edit Blog'])
        {!! Form::model($blog, ['method' => 'delete', 'action' => ['BlogsController@destroy', $blog->id]]) !!}
            {!! Form::submit('Delete Blog', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
{!! Form::close() !!}

@endsection