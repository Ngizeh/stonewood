<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h4 class="navbar-brand" href="#">
                <img src="{{asset('images/HOME-ASSURED-LOGO.jpg')}}" alt="logo" height="100" width="100">
            Home Assured </h4>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{url('/')}}">About</a></li>
                <li><a href="#sourcing">Sourcing</a></li>
                <li><a href="{{url('/property')}}">Property</a></li>
                <li><a href="#management">Management</a></li>
                <li><a href="{{url('/')}}">Contact Us</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>