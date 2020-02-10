<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Learning Laravel</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./">Home</a></li>
      <li><a href="./portfolio">Portfolio</a></li>

      <li><a href="./about">About</a></li>
      <li><a href="./posts">Blog</a></li>

    </ul>


    <!-- Authentication Links -->
    <ul class="nav navbar-nav navbar-right">


      @guest

      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}"><span
            class="glyphicon glyphicon-log-in">&nbsp;</span>{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}"><span
            class="glyphicon glyphicon-user">&nbsp;</span>{{ __('Register') }}</a>
      </li>

      @endif
      @else
      <li class="nav-item dropdown">

        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <ul class="list-unstyled pull-left " >
           
                <div class="btn">
                  <a href="./dashboard" class="btn btn-success" >Dashboard</a>
            
                </div>
                
                <div class="btn">
                  <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
                </div>
              
            

          </ul>


          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>

      @endguest


    </ul>

  </div>
</nav>