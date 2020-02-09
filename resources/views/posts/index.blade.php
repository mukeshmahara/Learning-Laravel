@extends('layouts.app')

@section('content')
    <h1>This is the post page</h1>

    @if (count($posts)> 1)
        @foreach ($posts as $post)
            <div class="well">
            <h3><a href="{{$post->id}}">{{$post->title}}</a></h3>
            <small>Create at {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <P>No post found</P>
        
    @endif
@endsection
