@extends('layouts.app')

<a href="/posts" class="btn btn-default">Go Back</a>

@section('content')
    <h1>{{$post->title}}</h1>

@endsection
