@extends('layouts.main-layout')
@section('content')
    
    <ul>
        @foreach ($films as $film)
            <li>
                <a href="{{ route('film', $film->id) }}">
                   Title: 
                   <span>
                        {{ $film->title }}
                   </span>
                </a>
            </li>
        @endforeach
    </ul>

@endsection