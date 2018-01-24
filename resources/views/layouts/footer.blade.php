<div class="footer">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Information</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about">About</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents">Agents</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog">Blog</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Newsletter</h4>
                <p>Get notified about the latest properties in our marketplace.</p>
                <form class="form-horizontal">
                    <input type="text" placeholder="Enter Your email address" class="form-control">
                    <button class="btn btn-success" type="button">Notify Me!</button>
                </form>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Follow us</h4>
                <a href="https://www.facebook.com/homeassuredkenya" target="_blank"><img src="image/facebook.png" alt="facebook"></a>
                <a href="https://twitter.com/homeassured_ltd" target="_blank"><img src="image/twitter.png" alt="twitter"></a>
                <a href="#"><img src="image/linkedin.png" alt="linkedin"></a>
                <a href="#"><img src="image/instagram.png" alt="instagram"></a>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Contact us</h4>
                <p><b>HomeAssured Property</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> Jalaram Rd, Weslands<br>
                    <span class="glyphicon glyphicon-envelope"></span> saleshomeassured.property<br>
                    <span class="glyphicon glyphicon-earphone"></span> +254 20 207 7030</p>
            </div>
        </div>
        <p class="copyright">Copyright 2013. All rights reserved. </p>


    </div>
</div>


<!-- Modal -->
<div id="loginpop" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-6 Rogin">
                    <h4>Login</h4>
                    <form class="" role="form"  method="POST" action="{{ route('login')}}">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="sr-only" for="email">E-mail Address</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required autofocus
                                   placeholder="Enter email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control" id="password"
                                   placeholder="Password"
                                  required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" {{ old('remember') ? 'checked' : '' }} > Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h4>New User Sign Up</h4>
                    <p>Join today and get updated with all the properties deal happening around.</p>
                    <button type="submit" class="btn btn-info" onclick="window.location.href='register.php'">Join Now
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
