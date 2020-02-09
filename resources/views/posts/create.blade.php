@extends('layouts.app')

@section('content')

<div class="bg-success">
    <h1 class="text-center"><strong>Create post</strong></h1>

</div>
<hr>
{!!Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
<div class="form-group">
    {!!Form::label('title','Title')!!}
    {!!Form::text('title','',['class'=>'form-control','placeholder'=>'Tilte' ])!!}
</div>

<div class="form-group">
    {!!Form::label('body','Title')!!}
    {!!Form::textarea('body','',['class'=>'form-control','placeholder'=>'body'])!!}
</div>

{{Form::submit('Submimt',['class'=>'btn btn-primary'])}}
<a href="./" class="btn btn-warning"> Cancel</a>
{!! Form::close() !!}




@endsection()