@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if (count($posts)> 0)
        @foreach ($posts as $post)
            {{-- <div class="well"> --}}
            {{-- <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <h3><a href="./{{$post->id}}" class="card-text">{{$post->body}}</a></h3>
                    <small>Create at {{$post->created_at}}</small>

                </div>
            </div> --}}
            <div class="row">
                <div class="col-sm-4">
                  <div class="card bg-secondary mb-3">
                    <div class="card-body well">
                    <h3 class="card-title">{{$post->title}}</h3>
                    <small>Create at {{$post->created_at}}</small>
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

@endsection


