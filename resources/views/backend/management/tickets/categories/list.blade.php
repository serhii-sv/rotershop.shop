@extends('backend.layouts.default')
@section('title',__('backend/management.tickets.categories.title'))
@section('content')
	<div class="container-fluid">
		
		<div class="col d-block d-md-none">
			<h1 class="title-header">{{ __('backend/management.tickets.categories.title') }}</h1>
			<button class="btn-go-to-shop">Go to Shop</button>
		</div>

		<div class="row mt-4 g-md-3 g-3">
			<div class="col-lg-12">
				<a data-bs-toggle="offcanvas" data-bs-target="#add-ticketCategory" aria-controls="add-ticketCategory" href="{{ route('backend-management-ticket-category-add') }}" class="btn-go-to-shop goshop_link" style="margin-bottom:15px">{{ __('backend/main.add') }}</a>
			</div>
			<!-- transaction -->
			<div class="col-lg-12">
				<div class="bg-secondary rounded-2 p-3">
					<div class="row d-flex align-items-center title-box-transaction">
						<div class="col-12 col-md-7 d-flex align-items-center">
							<p class="title-table-box d-none d-md-flex">{{ __('backend/management.tickets.title') }} {{ __('backend/management.tickets.categories.title') }}</p>
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
						@if(count($ticketsCategories))
						<table class="table mt-2 table-striped">
							<!-- title table pc -->
							<thead class="d-md-table-header-group table-header-pc">
								<tr class="">
									<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.tickets.categories.id') }} <span class="d-inline d-md-none">:</span></th>
									<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.tickets.categories.name') }} <span class="d-inline d-md-none">:</span></th>
									<th scope="col" class="d-block d-md-flex justify-content-end">{{ __('backend/management.tickets.categories.actions') }} <span class="d-inline d-md-none">:</span></th>
								</tr>
							</thead>
							@foreach($ticketsCategories as $ticketCategory)
								<tr>
									<td scope="row" class="d-block d-md-table-cell">{{ $ticketCategory->id }}</td>
									<td class="fs-20 d-block d-md-table-cell">
										{{ $ticketCategory->name }}
									</td>
									<td class="fs-20 d-block d-md-flex justify-content-end">
										<div class="d-flex">
											<div>
												<a href="{{ route('backend-management-ticket-category-edit', $ticketCategory->id) }}">
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
												</a>
											</div>
											<div>
												<a href="{{ route('backend-management-ticket-category-delete', $ticketCategory->id) }}">
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
						Showing <span class="info-paginition-span">{{ $ticketsCategories->firstItem() }} to {{ $ticketsCategories->lastItem() }}</span> of
						<span class="info-paginition-span">{{$ticketsCategories->total()}}</span> entries
					</div>
					<!-- pagination -->
					<div>
						{!! preg_replace('/' . $ticketsCategories->currentPage() . '\?page=/', '', $ticketsCategories->links()) !!}
					</div>
				</div>
			</div>
		</div>

		<!-- canvas add -->
		<div class="offcanvas offcanvas-end canvas-edit" tabindex="-1" id="add-ticketCategory" aria-labelledby="offcanvasTopLabel">
			<!-- header-canvas-add -->
			<div class="offcanvas-header canvas-header row">
				<div class="d-flex col-md-11 col-11">
					<div class="d-none d-md-block">
						<svg class="btn-close-canvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
							xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
							<path d="M23.75 15H6.25" stroke="white" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" />
							<path d="M15 23.75L6.25 15L15 6.25" stroke="white" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
					</div>
					<div class="k-content__head	k-grid__item">
						<div class="k-content__head-main">
							<h3 class="k-content__head-title">{{ __('backend/management.tickets.categories.add.title') }}</h3>
							<div class="k-content__head-breadcrumbs">
								<a href="#" class="k-content__head-breadcrumb-home"><i class="flaticon-home-2"></i></a>
								<span class="k-content__head-breadcrumb-separator"></span>
								<a href="javascript:;" class="k-content__head-breadcrumb-link">{{ __('backend/management.title') }}</a>
								<span class="k-content__head-breadcrumb-separator"></span>
								<a href="{{ route('backend-management-tickets') }}" class="k-content__head-breadcrumb-link">{{ __('backend/management.tickets.title') }}</a>
								<span class="k-content__head-breadcrumb-separator"></span>
								<a href="{{ route('backend-management-tickets-categories') }}" class="k-content__head-breadcrumb-link">{{ __('backend/management.tickets.categories.title') }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- body-canvas-add -->
			<div class="offcanvas-body">
				<div class="k-content__body	k-grid__item k-grid__item--fluid">
					<div class="row">
						<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
						<div class="kt-portlet">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">{{ __('backend/management.tickets.categories.add.title') }}</h3>
									</div>
								</div>
								<form method="post" class="kt-form" action="{{ route('backend-management-ticket-category-add-form') }}">
									@csrf
									
									<div class="kt-portlet__body">
										<div class="kt-section kt-section--first">
											<div class="form-group">
												<label for="ticket_category_add_name">{{ __('backend/management.tickets.categories.name') }}</label>
												<input type="text" class="form-control @if($errors->has('ticket_category_add_name')) is-invalid @endif" id="ticket_category_add_name" name="ticket_category_add_name" placeholder="{{ __('backend/management.tickets.categories.name') }}" value="{{ old('ticket_category_add_name') }}" />

												@if($errors->has('ticket_category_add_name'))
													<span class="invalid-feedback" style="display:block" role="alert">
														<strong>{{ $errors->first('ticket_category_add_name') }}</strong>
													</span>
												@endif
											</div>
										</div>
									</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<button type="submit" class="btn btn-wide btn-bold btn-danger">{{ __('backend/management.tickets.categories.add.submit_button') }}</button>
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
@endsection

@section('page_scripts')

@endsection