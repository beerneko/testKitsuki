@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post">
            <div class="list-group">
                <div class="list-group-item">
                    <a href="/posts" class="btn btn-default btn-sm">Go Back</a>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-default btn-sm">Edit</a>
                    <hr>
                    <H3 style="color: #202518 !important;">{{ $post->title }}</H3>
                    <p>{!! $post->body !!}</p>
                    <small>Written on {{$post->created_at}} by {{ $post->user->name }}</small>
                </div>
            </div>
        </div>
    </div>
@endsection