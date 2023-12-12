@extends('backend.layouts.default')
@section('title',__('backend/management.tickets.title'))
@section('content')
<div class="container-fluid">

	<div class="col d-block d-md-none">
		<h1 class="title-header">{{ __('backend/management.tickets.title') }}</h1>
		<button class="btn-go-to-shop">Go to Shop</button>
	</div>

	<div class="row mt-4 g-md-3 g-3">

		<!-- transaction -->
		<div class="col-lg-12">
			<div class="bg-secondary rounded-2 p-3">
				<div class="row d-flex align-items-center title-box-transaction">
					<div class="col-12 col-md-7 d-flex align-items-center">
						<p class="title-table-box d-none d-md-flex">{{ __('backend/management.tickets.title') }}</p>
					</div>
					<div class="col-12 col-md-5 input-mt input-search-ticket">
						<div class="position-relative">
							<!-- Occupies 8 columns (3/3 width) on medium screens and up -->
							<svg class="ic-input ic-white" xmlns="http://www.w3.org/2000/svg" width="19" height="19"
								viewBox="0 0 19 19" fill="none">
								<circle cx="8" cy="8" r="7" stroke="#7D7D7D" stroke-width="2" />
								<path d="M13 13L17.5 18" stroke="#7D7D7D" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
							<input type="text" class="form-control input-ic-p" placeholder="Search" />
						</div>
					</div>
				</div>

				<!-- table mobile -->
				<div class="mt-30 table-mobile">
					<!-- table item -->
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb"><span>#2212</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">User :</div>
							<div class="value-table-mb"><span>Marvin McKinney</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Subject :</div>
							<div class="value-table-mb"><span>Business Consulting</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Category :</div>
							<div class="value-table-mb"><span>Other Coin </span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Status :</div>
							<div class="value-table-mb"><span class="state-open">Open</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Date :</div>
							<div class="value-table-mb"><span>2020-05-05 10:21:13</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Action :</div>
							<div class="value-table-mb">
								<div class="d-flex">
									<div>
										<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path
												d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
									<div><svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg></div>
								</div>
							</div>
						</div>
					</div>
					<!-- table item -->
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb"><span>#2212</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">User :</div>
							<div class="value-table-mb"><span>Marvin McKinney</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Subject :</div>
							<div class="value-table-mb"><span>Business Consulting</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Category :</div>
							<div class="value-table-mb"><span>Other Coin </span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Status :</div>
							<div class="value-table-mb"><span class="state-closed">Closed</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Date :</div>
							<div class="value-table-mb"><span>2020-05-05 10:21:13</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Action :</div>
							<div class="value-table-mb">
								<div class="d-flex">
									<div>
										<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path
												d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
									<div><svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- table pc -->
				<div class="mt-30 table-pc">
					<!-- table item -->
					@if(count($tickets))
					<table class="table mt-2 table-striped">
						<!-- title table pc -->
						<thead class="d-md-table-header-group table-header-pc">
							<tr class="">
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.tickets.id') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.tickets.user') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.tickets.subject') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.tickets.status') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.tickets.date') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-flex justify-content-end">{{ __('backend/management.tickets.actions') }} <span class="d-inline d-md-none">:</span></th>
							</tr>
						</thead>
						@foreach($tickets as $ticket)
							<tr>
								<td scope="row" class="d-block d-md-table-cell">{{ $ticket->id }}</td>
								<td class="fs-20 d-block d-md-table-cell">
									{{ $ticket->getUser()->username }}
								</td>
								<td class="fs-20 d-block d-md-table-cell">{{ $ticket->subject }}</td>
								<td class="fs-20 d-block d-md-table-cell">
									@if($ticket->isClosed())
									<span class="state-closed">{{
										__('backend/management.tickets.status_data.closed') }}</span>
									@elseif($ticket->isReplied())
									<span class="state-Answered">{{
										__('backend/management.tickets.status_data.replied') }}</span>
									@else
									<span class="state-open">{{
										__('backend/management.tickets.status_data.open') }}</span>
									@endif
								</td>
								<td class="fs-20 d-block d-md-table-cell">
									{{ $ticket->created_at->format('d.m.Y H:i') }}
								</td>
								<td class="fs-20 d-block d-md-flex justify-content-end">
									<div class="d-flex">
										<div>
											<a href="#">
											<svg data-bs-toggle="offcanvas" data-bs-target="#edit-ticket_{{$ticket->id}}"
												aria-controls="edit-ticket" class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
												fill="none">
												<path
													d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
													stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
													stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
											</a>
										</div>
										<div>
											<a href="{{ route('backend-management-ticket-delete', $ticket->id) }}">
											<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
												fill="none">
												<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											</a>
										</div>
									</div>
									<!-- canvas edit -->
									<div class="offcanvas offcanvas-end canvas-edit" tabindex="-1" id="edit-ticket_{{$ticket->id}}" aria-labelledby="offcanvasTopLabel">
										<!-- header-canvas-edit -->
										<div class="offcanvas-header canvas-header row">
											<div class="d-flex">
												<div class="d-none d-md-block">
													<svg class="btn-close-canvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
														xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
														<path d="M23.75 15H6.25" stroke="white" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
														<path d="M15 23.75L6.25 15L15 6.25" stroke="white" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
													</svg>
												</div>

												<div>
													<p class="name-canvas">{{ __('backend/management.tickets.edit.title') }}</p>
												</div>

												<div>

												</div>
											</div>
											<div class="col-1 d-md-none">
												<svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" xmlns="http://www.w3.org/2000/svg"
													width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path
														d="M6.7072 5.29289C6.31668 4.90237 5.68351 4.90237 5.29299 5.29289C4.90246 5.68342 4.90246 6.31658 5.29299 6.70711L10.5858 12L5.29289 17.2929C4.90237 17.6834 4.90237 18.3166 5.29289 18.7071C5.68342 19.0976 6.31658 19.0976 6.70711 18.7071L12 13.4142L17.293 18.7071C17.6835 19.0976 18.3167 19.0976 18.7072 18.7071C19.0977 18.3166 19.0977 17.6834 18.7072 17.2929L13.4143 12L18.7071 6.70711C19.0976 6.31658 19.0976 5.68342 18.7071 5.29289C18.3166 4.90237 17.6834 4.90237 17.2929 5.29289L12 10.5857L6.7072 5.29289Z"
														fill="#6F767E" />
												</svg>
											</div>
										</div>
										<!-- body-canvas-edit -->
										<div class="offcanvas-body">

											<div class="k-content__body	k-grid__item k-grid__item--fluid">
												<div class="row">
													<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
														@if(!$ticket->isClosed())
														    <a href="{{ route('backend-management-ticket-close', $ticket->id) }}">
    														    <button class="bg-danger btn-upper btn-go-to-shop m-0">{{ __('backend/management.tickets.edit.close') }}</button>
    														</a>
														@else
    														<a href="{{ route('backend-management-ticket-open', $ticket->id) }}">
    														    <button class="btn-go-to-shop m-0 btn-upper">{{ __('backend/management.tickets.edit.open') }}</button>
    														</a>
														@endif

														<div class="k-portlet k-portlet--height-fluid">
															<div class="k-portlet__head">
																<div class="k-portlet__head-label mt-2">
																	<h3 class="k-portlet__head-title">
																		{{ $ticket->subject }}
																	</h3>
																</div>
															</div>
															<div class="k-portlet__body k-portlet__body--fluid">
																<div class="chat-management-tickets" style="width: 100%">
																    <ol class="chat">
    																	<li class="other">
                                                                          <div class="msg">
                                                                              <div class="user">{{ $ticket->getUser()->name }}</div>
                                                                            <p>{!! nl2br(strlen($ticket->content) > 0 ? e(decrypt($ticket->content)) : '') !!}</p>
                                                                            <time>{{ $ticket->getDateTime() }}</time>
                                                                          </div>
                                                                        </li>
    																</ol>

                                                                    <ol class="chat">
    																	@foreach($ticket->ticketReplies as $ticketReply)
    																	<li class="other">
                                                                          <div class="msg">
                                                                              <div class="user">{{ $ticketReply->getUser()->name }}</div>
                                                                            <p>{!! nl2br(strlen($ticketReply->content) > 0 ? e(decrypt($ticketReply->content)) : '') !!}</p>
                                                                            <time>{{ $ticketReply->getDateTime() }}</time>
                                                                          </div>
                                                                        </li>
    																	@endforeach
    																</ol>

																	<h5 class="mt-4">{{ __('backend/management.tickets.edit.title_reply') }}</h5>

																	<form method="POST" class="kt-form" action="{{ route('backend-management-ticket-reply-form') }}"
																		style="width: 100%">
																		@csrf

																		<input type="hidden" name="ticket_reply_id" value="{{ $ticket->id}}" />

																		<div class="form-group" style="width: 100%">
																			<label for="ticket_reply_msg">{{ __('backend/management.tickets.edit.message')
																				}}</label>
																			<textarea style="width: 100%"
																				class="form-control @if($errors->has('ticket_reply_msg')) is-invalid @endif"
																				id="ticket_reply_msg" name="ticket_reply_msg"
																				placeholder="{{ __('backend/management.tickets.edit.message') }}">{{ old('ticket_reply_msg') }}</textarea>

																			@if($errors->has('ticket_reply_msg'))
																			<span class="invalid-feedback" style="display:block" role="alert">
																				<strong>{{ $errors->first('ticket_reply_msg') }}</strong>
																			</span>
																			@endif
																		</div>

                                                                        <div class="mt-2">
                                											<button type="submit" class="btn-go-to-shop m-0">{{ __('backend/management.tickets.edit.submit_button') }}</button>
                                										</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</td>
							</tr>
						@endforeach
					</table>
					@else
						<i>{{ __('backend/main.no_entries') }}</i>
					@endif
				</div>
				<div class="col-lg-12 d-block d-md-none">
					<button class="btn-load-more mt-2">
						Load more
					</button>
				</div>
			</div>
		</div>


		<!-- pagination & info -->
		<div class="col-lg-12 d-none d-md-block">
			<div class="bg-secondary rounded-2 p-3 d-flex justify-content-between align-items-center">
				<div class="f-flex info-paginition">
					Showing <span class="info-paginition-span">{{ $tickets->firstItem() }} to {{ $tickets->lastItem() }}</span> of
					<span class="info-paginition-span">{{$tickets->total()}}</span> entries
				</div>
				<!-- pagination -->
				<div>
					{!! preg_replace('/' . $tickets->currentPage() . '\?page=/', '', $tickets->links()) !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('page_scripts')

@endsection