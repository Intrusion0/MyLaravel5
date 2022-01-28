@extends('layouts.main-layout')
@section('content')
    
    @foreach ($films as $film)
        <ul>
            <li>
                <a href="{{ route('film', $film->id) }}">
                   Title: 
                   <span>
                        {{ $film->title }}
                   </span>
                </a>
            </li>
        </ul>
    @endforeach

@endsection