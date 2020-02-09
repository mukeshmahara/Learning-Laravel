@extends('layouts.app')

@section('content')


<h1>{{$post->body}}</h1>
<div class="row">
    <div class="col-sm-12">
        <div class="card bg-seconadry mb-3">
            <div class="card-body well">
                <h3 class="card-title">{{$post->title}}</h3>

                <p class="card-text">{{$post->body}}</p>

                <small class="text-center">Create at {{$post->created_at}}</small>



            </div>
             
            <div class="pull-right">

                {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POSt'])!!}
                <a href="./" class="btn btn-secondary ">Go Back</a>
                <a href="./{{$post->id}}/edit" class="btn btn-dark">Edits</a>
                {{ Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
                {!!Form::close()!!}
                <hr>
            </div>


        </div>



    </div>
</div>



@endsection