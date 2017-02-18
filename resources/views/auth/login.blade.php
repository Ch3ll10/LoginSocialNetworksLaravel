@extends('layouts.app')

@section('content')

<script type="text/javascript" src="js/socialnetworks.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                                <br>
                                <br>
                                <div>
                                    <img id="fb" onmouseover="mOverfb(this)" onmouseout="mOutfb(this)" onclick="fb()" class="img-circle" src="icons/fb2.png" alt="Generic placeholder image" width="80" height="80">

                                    <img id="tr" onmouseover="mOvertr(this)" onmouseout="mOuttr(this)" onclick="tr()" class="img-circle" src="icons/tr2.png" alt="Generic placeholder image" width="80" height="80">

                                    <img id="gl" onmouseover="mOvergl(this)" onmouseout="mOutgl(this)" onclick="gl()" class="img-circle" src="icons/gl2.png" alt="Generic placeholder image" width="80" height="80">

                                    <br>            
                                </div>
                            </div>
                        </div>
                         <label for="email" class="col-md-4 control-label">Login with:</label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
