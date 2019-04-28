<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            

           <!-- Right Side Of Navbar -->

          </ul class="loginbutton">
          
              {{-- <a href="login"  class="btn btn-success"><i class="fas fa-sign-in-alt"></i> </a> --}}
              
              {{-- <a href="register"  class="btn btn-success"><i class="fas fa-user-plus"></i> </a> --}}
              <!-- Authentication Links -->
                        @guest
                        <li class="mr-auto"></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('dashboard')}}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('posts')}}">Post</a>
                        </li>
                      </ul class="loginbutton">
                      <li>
                        <a href="{{url('posts/create')}}" class="btn btn-info btn-lg btn-block"><i class="fas fa-plus"></i> </a>
                    </li>
                    &nbsp;
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </div>
      </nav>
<br/>
