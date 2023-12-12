@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <!-- <h3 class="page-title">{{ __('frontend/user.login.title') }}</h3> -->

            <div class="auth-box">
                <div class="card-header">{{ __('frontend/user.login.title') }}</div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email">{{ __('frontend/user.username') }}</label>

                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="password">{{ __('frontend/user.login.password') }}</label>

                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <div class="captcha-flex-left">
                                {!! HCaptcha::display() !!}
                            </div>
                            
                            @if ($errors->has('h-captcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('h-captcha-response') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('frontend/user.login.remember') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="btn pink-btn btn-block-pink">
                                {{ __('frontend/user.login.submit') }}
                            </button>

                            <!-- <a href="{{ route('register') }}" class="btn btn-outline-secondary">
                                {{ __('frontend/user.login.create_account') }}
                            </a> -->

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('frontend/user.login.forgot_password') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 {!! HCaptcha::renderJs() !!}
@endsection