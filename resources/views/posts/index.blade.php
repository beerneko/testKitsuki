@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post w-75 p-3 h-75 d-inline-block">
            <div class="list-group">
                @if(count($posts)>0)
                {{ $posts->links() }}
                @foreach($posts as $post)
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <img class="border border-dark" style="max-height:135px;z-index:0;" src="/storage/cover_images/{{ $post->cover_image }}">
                            </div>
                            <div class="col-md-8 col-sm-8 text-left">
                                <H3><a href="posts/{{ $post->id }}">{{ $post->title }}</a></H3>
                                <small>Written on {{$post->created_at}} by {{ $post->user->name }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>No data</p>                
                @endif
            </div>
        </div>
    </div>
@endsection