@extends('layouts.app')
<style>
    *{
        background: radial-gradient(circle, #3f87a6, #f69d3c);
        
    }
    h1{
        text-align: center;
    }
</style>

@section('content')
    <h1>{{$title}}</h1>
    <p>This is the laravel application from scratch</p>
@endsection
