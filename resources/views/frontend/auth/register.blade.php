@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <!-- <h3 class="page-title">{{ __('frontend/user.register.title') }}</h3> -->

            <div class="auth-box">
                <div class="card-header">{{ __('frontend/user.register.title') }}</div>

                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                    <label for="username" class="text-md-right">{{ __('frontend/user.username') }}</label>

                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    
                                    <div class="col-md-12">
                                    <label for="password" class="text-md-right">{{ __('frontend/user.register.password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                
                                    <div class="col-md-12">
                                    <label for="password-confirm" class="text-md-right">{{ __('frontend/user.register.confirm_password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="captcha-flex-left">
                                            {!! HCaptcha::display() !!}
                                        </div>
                                        
                                        @if ($errors->has('h-captcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('h-captcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn pink-btn btn-block-pink">
                                            {{ __('frontend/user.register.submit') }}
                                        </button>
                                        <!-- <a href="{{ route('index') }}" class="btn btn-outline-secondary">
                                            {{ __('frontend/user.register.cancel') }}
                                        </a> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
{!! HCaptcha::renderJs() !!}
@endsection
