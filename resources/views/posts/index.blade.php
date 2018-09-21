@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post">
            <div class="list-group">
                @if(count($posts)>0)
                {{ $posts->links() }}
                @foreach($posts as $post)
                    <div class="list-group-item" style="background: #ffffff85 !important;">
                        <H3><a href="posts/{{ $post->id }}">{{ $post->title }}</a></H3>
                        <small>Written on {{$post->created_at}} by {{ $post->user->name }}</small>
                    </div>
                    @endforeach
                @else
                    <p>No data</p>                
                @endif
            </div>
        </div>
    </div>
@endsection