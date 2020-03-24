@extends('layouts.app')

@section('content')


<h1>All Posts</h1>
<hr>


<div>
  @if (count($posts)> 0)
  @foreach ($posts as $post)

  <div class="row">
    <div class="col-sm-4">
      <div class="card bg-secondary mb-3">
        <div class="card-body">
          <h3 class="card-title">{{$post->title}}</h3>
          <small>Create at {{$post->created_at}} by {{$post->user->name}}</small>
          <p class="card-text">{{$post->body}}</p>
          <a href="./posts/{{$post->id}}" class="btn btn-primary">Read more</a>

        </div>
      </div>
    </div>
    @endforeach


    {{$posts->links()}}

    @else
    <P>No post found</P>

    @endif


  </div>
  <hr>

  @endsection