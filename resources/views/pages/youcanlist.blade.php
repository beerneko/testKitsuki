@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-text">
            <blockquote class="about-center">
                <H1>{{$title}}</H1>
                <H1>杵築</H1>
            </blockquote>
        </div>
    </div>
        @if (count($youcanlists) > 0)
        <ul class="list-group">
            @foreach($youcanlists as $youcanlist)
                <li class="list-group-item">{{$youcanlist}}</li>
            @endforeach
        </ul>
        @endif
@endsection