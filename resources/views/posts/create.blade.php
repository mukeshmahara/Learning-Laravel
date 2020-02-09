@extends('layouts.app')

@section('content')
    <h1>Create post</h1>
    {!!Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {!!Form::label('title','Title')!!}
            {!!Form::text('title','',['class'=>'form-control','placeholder'=>'Tilte'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('body','Title')!!}
            {!!Form::textarea('body','',['class'=>'form-control','placeholder'=>'body'])!!}
        </div> 

        {{Form::submit('Submimt',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    
    
    
@endsection()