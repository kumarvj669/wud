@extends('layouts.app')

@section('content')


<div class="login-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a class="logo" href="javascript:void(0)"><img src="{{ url('public/images/logo.png') }}"  alt="#"></a>

                <div class="account-sec">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" placeholder="User Name" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                        <button type="submit" class="login-btn">
                            {{ __('Login') }}
                        </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
