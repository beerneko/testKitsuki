@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post">
            <div class="list-group">
                @if(count($posts)>0)
                {{ $posts->links() }}
                @foreach($posts as $post)
                    <div class="well">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="max-height:90px;z-index:0;" src="/storage/cover_images/{{ $post->cover_image }}">
                            </div>
                            <div class="col-md-4 col-sm-4">
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