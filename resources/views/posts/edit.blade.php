@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post w-75 p-3 h-75 d-inline-block">
            @include('inc.messages')
            {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                <table style="min-width:100%">  
                    <tr>
                        <td class="text-lg-center align-bottom">
                            <h2>Edit your post</h2><br />
                            {{Form::text('title',$post->title,['style'=>'margin:0 3px','class'=>'form-control align-bottom border border-dark','placeholder'=>'Title','maxlength' => 49])}}
                            <a href="/posts" class="btn btn-primary btn-sm" style="margin:3px">Go Back</a>
                            {{ Form::hidden('_method','PUT') }}
                            {{ Form::submit('Submit',['style'=>'margin:0 3px','class'=>'btn btn-primary btn-sm']) }}
                            {{ Form::label('cover_image', 'Select Picture',['id'=>'testbrows', 'class'=>'btn btn-sm btn-primary', 'style'=>'margin:3px;'])}}
                            {{ Form::file('cover_image',array('id' => 'photo','style'=>'display:none;'))}}
                        </td>
                        <td class="w-25 p-3 align-bottom">
                            {{-- <img src="/storage/cover_images/noimage.png" id="img" class="img align-bottom border border-dark" style="max-height:15vw; margin:0 3px;"> --}}
                            <img src="/storage/cover_images/{{ $post->cover_image }}" id="img" class="img align-bottom border border-dark" style="max-height:15vw; margin:0 3px;">
                        </td>
                    </tr>
                </table>
                <table style="min-width:100%">  
                    <tr>
                        <td class="text-lg-left border border-dark">
                            {{Form::textarea('body',$post->body,['id'=>'test','class'=>'form-control','placeholder'=>'Body Text'])}}
                        </td>
                    </tr>
                </table>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection