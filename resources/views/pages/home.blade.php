@extends('layouts.main-layout')
@section('content')
    
    <h2>
        <a href="{{ route('create') }}">Create new Element</a>
    </h2>

    <ul>
        @foreach ($films as $film)
            <li>
                <a href="{{ route('film', $film->id) }}">
                   Title: 
                   <span>
                        {{ $film->title }}
                   </span>
                   <span>
                       <a href="{{ route('edit', $film->id) }}">EDIT</a>
                   </span>
                   <span class="delete">
                       <a href="{{ route('delete', $film->id) }}">DELETE</a>
                   </span>
                </a>
            </li>
        @endforeach
    </ul>

@endsection