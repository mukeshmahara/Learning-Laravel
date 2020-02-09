@extends('layouts.app')

@section('content')
    <h1>Edit post</h1>
    {!!Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
        <div class="form-group">
            {!!Form::label('title','Title')!!}
            {!!Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Tilte' ])!!}
        </div>

        <div class="form-group">
            {!!Form::label('body','Title')!!}
            {!!Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'body'])!!}
        </div> 
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submimt',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    
    
    
@endsection()