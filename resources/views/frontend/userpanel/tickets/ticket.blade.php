@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <!-- <h3 class="page-title text-left">{{ __('frontend/user.tickets.ticket_details') }}</h3> -->

            <div class="auth-box">
                <div class="card-header">{{ $ticket->subject }}</div>
                <div>
					<div class="ticket-section">
					<div class="ticket-reply">
						{!! nl2br(strlen($ticket->content) > 0 ? e(decrypt($ticket->content)) : '') !!}

						<span class="ticket-reply-span">{{ $ticket->getDateTime() }}</span>
					</div>

					<!-- @if(count($ticketReplies) > 0)
					<hr />
					@endif -->

					@foreach($ticketReplies as $ticketReply)
					<div class="ticket-reply @if($ticketReply->user_id == Auth::user()->id)  @else ticket-reply-answer @endif">
						{!! nl2br(strlen($ticketReply->content) > 0 ? e(decrypt($ticketReply->content)) : '') !!}

						<span class="ticket-reply-span">{{ $ticketReply->getDateTime() }}</span>
					</div>
					@endforeach
					</div>

					@if(!$ticket->isClosed())
						<!-- <hr /> -->

						<h5>{{ __('frontend/user.tickets.reply_title') }}</h5>

						<form method="POST" action="{{ route('ticket-reply', $ticket->id) }}">
							@csrf

							<div class="form-group">
								<label for="message">{{ __('frontend/user.tickets.message') }}</label>
								<textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" id="message" rows="3" required autofocus>{{ old('message') }}</textarea>
								
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
								<input type="submit" value="{{ __('frontend/user.tickets.reply_button') }}" class="btn pink-btn btn-block-pink" />
							</div>
						</form>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
 {!! HCaptcha::renderJs() !!}
@endsection
