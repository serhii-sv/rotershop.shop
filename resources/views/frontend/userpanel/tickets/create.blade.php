@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="page-title">{{ __('frontend/user.tickets.ticket_create') }}</h3>

            <div class="auth-box">
                <!-- <div class="card-header">{{ __('frontend/user.tickets.ticket_create') }}</div> -->
                <div class="card-body">
					
						@if (\Session::has('errorMessageTicketForm'))
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-12">
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="{{ __('frontend/main.close') }}">
												<span aria-hidden="true">×</span>
											</button>

											{!! \Session::get('errorMessageTicketForm') !!}
										</div>
									</div>
								</div>
							</div>
						@endif

						@if (\Session::has('successMessageTicketForm'))
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-12">
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="{{ __('frontend/main.close') }}">
												<span aria-hidden="true">×</span>
											</button>

											{!! \Session::get('successMessageTicketForm') !!}
										</div>
									</div>
								</div>
							</div>
						@endif
						
						<form method="POST" action="{{ route('ticket-create') }}">
							@csrf

							<div class="form-group">
								<label for="subject">{{ __('frontend/user.tickets.subject') }}</label>
								<input class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" value="{{ old('subject') }}" name="subject" id="subject" required autofocus />

								@if ($errors->has('subject'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('subject') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<label for="message">{{ __('frontend/user.tickets.message') }}</label>
								<textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" id="message" rows="3" required>{{ old('message') }}</textarea>

								@if ($errors->has('message'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
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

							<div class="text-left">
								<input type="submit" value="{{ __('frontend/user.tickets.create_button') }}" class="btn pink-btn btn-block-pink" />
							</div>
						</form>
                </div>
            </div>
        </div>
    </div>
</div>
{!! HCaptcha::renderJs() !!}
@endsection
