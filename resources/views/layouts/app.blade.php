<!DOCTYPE html>
<html lang="{{ config ('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="C:\xampp\htdocs\myapp\node_modules\bootstrap\dist\css\bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('sass/custom.scss') }}" type="text/css">
    <title>{{config('app.name','myapp')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        
        @yield('content') 
    

    </div>
</body>
</html>