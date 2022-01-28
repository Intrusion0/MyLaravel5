@extends('layouts.main-layout')
@section('content')
    
<div class="container-film">
    <div class="title">
        Title: 
        <span>
            {{ $film->title }}
        </span>
    </div>
    <div class="subtitle">
        Subtile:
        <span>
            {{ $film->subtitle }}
        </span>
    </div>
    <div class="release_date">
        Release date: 
        <span>
            {{ $film->release_date }}
        </span>
    </div>
</div>

@endsection