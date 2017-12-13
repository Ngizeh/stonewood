<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="navbar-brand" href="{{url('/')}}">
                 <img src="{{asset('images/HOME-ASSURED-LOGO.jpg')}}" alt="logo" height="100" width="100">
            Home Assured </h1>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Property<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('property')}}">All Properties</a></li>
                        <li><a href="{{url('commercials')}}">Commercials</a></li>
                        <li><a href="{{url('residentials')}}">Residentials</a></li>
                        <li><a href="{{url('lands')}}">Lands</a></li>
                    </ul>
                </li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#contact">Contacts</a></li>
                @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
