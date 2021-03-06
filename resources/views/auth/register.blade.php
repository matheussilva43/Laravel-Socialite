@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">

                                    @if(!empty($name))
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $name }}" required autofocus>
                                    @else
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    @endif

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">

                                    @if(!empty($email))
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $email }}" required>
                                    @else
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @endif
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
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            {{--<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">--}}

                                <div class="col-md-6">
                                    @if(!empty($avatar))
                                        <input type="hidden" id="avatar" name="avatar" value="{{ $avatar }}">
                                    @else
                                        <input type="hidden" id="avatar" name="avatar" value="{{ old('avatar') }}">
                                    @endif

                                    @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            {{--</div>--}}

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Ou registre-se com</label>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                                        <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection