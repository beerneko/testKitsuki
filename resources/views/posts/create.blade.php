@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post">
            @include('inc.messages')
            {!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <a href="/posts" class="btn btn-default btn-sm">Go Back</a>
            {{ Form::submit('Submit',['class'=>'btn btn-primary btn-sm']) }}
                <div class="form-group">
                    {{Form::label('title','Title', ['class' => 'label-post']) }}
                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                </div>
                <div class="btn btn-success" style="cursor: pointer;margin:2px !important;" onclick="$('#cke_1_top').hide('fast');">Editer Show / Hide</div>
                <div class="form-group">
                    {{ Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
                </div>
                <div class="form-group">
                    {{ Form::file('cover_image')}}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    @endsection