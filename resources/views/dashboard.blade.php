@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Dashboard</strong></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
`
                    @endif

                    <div class="pull-right">
                        <a href="./posts/create" class="btn btn-primary "><span class="glyphicon glyphicon-edit"></span>
                            Create Post</a>
                    </div>
                    <h1>Your Blog Posts</h1>
                    <hr>
                    <div class="container-fluid">

                        @if (count($posts)>0)
                        <table class="table table-hover ">
                            <tr>
                                <th>SN</th>
                                <th>
                                    Title
                                </th>
                                <th>Aurthor Information</th>
                                <th>Actions </th>

                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <th>{{$post->id}}</th>
                                <th>{{$post->title}}</th>
                                <td>Create at {{$post->created_at}} by {{$post->user->name}}</td>

                                <td class="">
                                    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POSt'])!!}

                                    <a href="./posts/{{$post->id}}/edit" class="btn btn-success">Edits</a>
                                    {!! Form::hidden('_method','DELETE')!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger '])!!}
                                    <a href="./posts/{{$post->id}}" class="btn btn-primary">Read more</a>
                                    
                                    {!!Form::close()!!}</td>
                            </tr>

                            @endforeach
                        </table>


                        @else
                        <p>
                            You have no post yet....
                        </p>

                        @endif


                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="./posts" class="btn btn-warning ">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection