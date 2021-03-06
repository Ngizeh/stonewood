
<!-- Modal -->
<div id="loginpop" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-6 col-lg-offset-3 Rogin">
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
                            <input type="password" name="password" class="form-control" id="password"
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
                {{--<div class="col-sm-6">--}}
                    {{--<h4>New User Sign Up</h4>--}}
                    {{--<p>Join today and get updated with all the properties deal happening around.</p>--}}
                    {{--<button type="submit" class="btn btn-info" onclick="window.location.href='/register'">Join Now--}}
                    {{--</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>