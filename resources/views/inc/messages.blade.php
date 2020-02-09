@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}    
        </div>   
    @endforeach

@endif


@if(session('sucess'))
    <div class="alert alert-sucess">
        {{session('sucess')}}

    </div>

@endif



@if(session('sucess'))
    <div class="alert alert-danger">
        {{session('errors')}}

    </div>

@endif