@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post">
            <div class="list-group">
                <div class="list-group-item">
                    <a href="/posts" class="btn btn-default btn-sm">Go Back</a>
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $post->user_id)
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-default btn-sm">Edit</a>
                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right']) !!}
                                {{ Form::hidden('_method','DELETE') }}
                                {{ Form::submit('Delete',['class'=>'btn btn-default btn-sm']) }}
                            {!! Form::close() !!}
                        @endif
                    @endif
                    <hr>
                    <H3 style="color: #202518 !important;">{{ $post->title }}</H3>
                    <img style="max-width:300px;z-index:0;" src="/storage/cover_images/{{ $post->cover_image }}">
                    <p>{!! $post->body !!}</p>
                    <small>Written on {{ $post->created_at}} by {{ $post->user->name}}</small>
                </div>
            </div>
        </div>
    </div>
@endsection