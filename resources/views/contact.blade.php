@extends('layouts.master')


@section('content')

    @forelse ($people as $person)
        {{ $person }}
    @empty
        The database is empty
    @endforelse
    
    
    
@endsection
