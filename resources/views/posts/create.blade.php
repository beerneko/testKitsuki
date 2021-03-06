@extends('layouts.app')

@section('content')
    <div class="hero-image">
        <div class="hero-post w-75 p-3 h-75 d-inline-block">
            @include('inc.messages')
            {!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    <table style="min-width:100%">
                        <tr>
                            <td class="text-lg-center align-bottom">
                                <h2>Create your new post</h2><br />
                                {{Form::text('title','',['style'=>'margin:0 3px','class'=>'form-control align-bottom border border-dark','placeholder'=>'Title','maxlength' => 49])}}
                                <a href="/posts" class="btn btn-primary btn-sm" style="margin:3px">Go Back</a>
                                {{ Form::submit('Submit',['class'=>'btn btn-primary btn-sm']) }}
                                {{ Form::label('cover_image', 'Select Picture',['id'=>'testbrows', 'class'=>'btn btn-sm btn-primary'])}} 
                                {{ Form::file('cover_image',array('id' => 'photo','style'=>'display:none;'))}}
                            </td>
                            <td rowspan="2" class="w-25 p-3">
                                <img src="/storage/cover_images/noimage.png" id="img" class="img align-bottom border border-dark" style="max-height:15vw; margin:0 3px;">
                            </td>
                        </tr>
                    </table>
                    <table style="min-width:100%">  
                            <tr>
                                <td class="text-lg-left border border-dark">
                                    {{ Form::textarea('body','',['id'=>'test','class'=>'form-control','placeholder'=>'Body Text'])}}
                                </td>
                            </tr>
                        </table>
                        </div>
            {!! Form::close() !!}
        </div>
    </div>
    @endsection