@extends('layouts.app')

@section('content')


<h1>{{$post->title}}</h1>
<div class="row">
    <div class="col-sm-12">
        <div class="card-block bg-seconadry mb-3">
            <div class="card-body well">
                <h3 class="card-title">{{$post->title}}</h3>

                <p class="card-text">{{$post->body}}</p>

                <small class="text-center">Created at {{$post->created_at}}</small>



            </div>
             
            <div class="pull-right">
                <a href="./" class="btn btn-default ">Go Back</a>
                
                <hr>
            </div>


        </div>



    </div>
</div>



@endsection