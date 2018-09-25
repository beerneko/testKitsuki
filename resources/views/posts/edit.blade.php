@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post">
            @include('inc.messages')
            {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <a href="/posts" class="btn btn-default btn-sm">Go Back</a>
            {{ Form::hidden('_method','PUT') }}
            {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
            <div class="form-group">
                    {{Form::label('title','Title', ['class' => 'label-post']) }}
                    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            {{-- <span class="label label-success" style="cursor: pointer;padding:1px;" onclick="$('#cke_1_top').hide('fast');">Editer Show/Hide</span> --}}
            <div class="form-group">
                {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                    {{ Form::file('cover_image')}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection