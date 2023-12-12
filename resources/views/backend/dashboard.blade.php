@extends('backend.layouts.default')

@section('content')
	<!-- chart and Top products -->
	<div class="row mt-4 container-fluid g-md-4 g-3">
		<!-- statistical -->
		<div class="col-12">
			<p class="text-overview d-block d-md-none">{{ __('backend/dashboard.title') }}</p>
			<div class="row mt-4 parent-box-statistical">
				<!-- Total sales -->
				<div class="col-lg-3 col-6 card-synthetic card-synthetic-info-active">
					<div class="card-synthetic-bg">
						<svg xmlns="http://www.w3.org/2000/svg" width="183" height="100"
							viewBox="0 0 183 100" fill="none">
							<path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_29_235)"
								fill-opacity="0.5" />
							<defs>
								<linearGradient id="paint0_linear_29_235" x1="77.5" y1="1.17382e-06"
									x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="183" height="100"
							viewBox="0 0 183 100" fill="none">
							<path d="M91.5 0L183 100H0L91.5 0Z" fill="url(#paint0_linear_29_235)"
								fill-opacity="0.5" />
							<defs>
								<linearGradient id="paint0_linear_29_235" x1="77.5" y1="1.17382e-06"
									x2="97.5" y2="100" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
					</div>
					<div class="card-body">
						<div class="d-flex align-items-center">
							<svg class="card-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"
								fill="none">
								<circle cx="18" cy="18" r="18" fill="#1D1D1D" />
								<path d="M16 19H20" stroke="white" stroke-width="1.5" />
								<rect x="8.75" y="10.75" width="18.5" height="4.5" rx="2.25" stroke="white"
									stroke-width="1.5" />
								<path
									d="M10.75 15.75H25.25V24C25.25 24.6904 24.6904 25.25 24 25.25H12C11.3096 25.25 10.75 24.6904 10.75 24V15.75Z"
									stroke="white" stroke-width="1.5" />
							</svg>
							<p class="name-card name-active">{{ __('backend/dashboard.total_orders.widget_title') }}</p>
						</div>
						<div class="card-price-active">{{ App\Models\Setting::get('shop.total_sells', 0) }}</div>
						<div class="name-active mt-2">
                			<p>{{ __('backend/dashboard.today_profit') }}</p>
                			<span>{{ App\Models\UserOrder::getFormattedTodayWin() }}</span>
                		</div>
						{{-- <div class="d-flex flex-wrap box-precent">
							<div class="d-flex align-items-center card-precent-active">
								<svg xmlns="http://www.w3.org/2000/svg" class="ic-precent-active"
									width="0.5rem" height="0.5rem" viewBox="0 0 12 12" fill="none">
									<path d="M1.5 1.5H10.5V10" stroke-width="1.5" />
									<path d="M10.5 1.5L1.5 10.5" stroke-width="1.5" />
								</svg>
								20.9%
							</div>

							<div class="d-flex align-items-center card-view-active">
								+18.4K this week
							</div>
						</div> --}}
					</div>
				</div>
				<!-- Visitors -->
				<div class="col-lg-3 col-6 card-synthetic card-synthetic-info">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<svg class="card-icon" viewBox="0 0 36 36" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<circle cx="18" cy="18" r="18" fill="#363636" />
								<g clip-path="url(#clip0_29_383)">
									<path
										d="M9.51883 25C9.68536 22.7539 11.4264 20.9005 13.6784 20.6278C16.224 20.3197 18.5304 22.0168 18.9692 24.525C18.9968 24.6819 19.0143 24.8407 19.0237 25H20.5388C20.5237 24.7274 20.4831 24.4553 20.4342 24.1839C19.842 20.8862 16.6033 18.5877 13.294 19.1655C10.945 19.5757 9.31223 20.9179 8.41633 23.1193C8.16904 23.7244 8.01252 24.3563 8 25H9.51883Z"
										fill="white" />
									<path
										d="M21.318 20.8065C22.1025 20.5599 22.892 20.5307 23.6971 20.6789C25.7568 21.058 27.3877 22.9369 27.4998 25H28.9998C28.9566 23.9572 28.6636 22.9779 28.0983 22.0802C27.0434 20.4068 25.5308 19.4095 23.5512 19.1436C22.6177 19.0185 21.6993 19.0969 20.804 19.3958C20.4666 19.5085 20.2594 19.7625 20.2431 20.0669C20.2118 20.6421 20.7126 20.9964 21.318 20.8065Z"
										fill="white" />
									<path
										d="M17.7786 14.4801C17.788 16.3926 16.2128 17.9714 14.2908 17.977C12.3694 17.9819 10.7843 16.4293 10.7774 14.5342C10.7699 12.5776 12.3269 11.0025 14.2714 11C16.1959 10.9975 17.7692 12.5583 17.7786 14.4801ZM14.2695 12.5103C13.1658 12.5147 12.2724 13.4043 12.2755 14.495C12.2787 15.5801 13.1915 16.4816 14.2796 16.476C15.3821 16.4704 16.2667 15.5826 16.2654 14.4844C16.2642 13.3844 15.3764 12.5053 14.2695 12.5103Z"
										fill="white" />
									<path
										d="M26.2402 14.4819C26.2414 16.4081 24.6813 17.9726 22.7555 17.9763C20.8172 17.9807 19.2364 16.4112 19.2383 14.4851C19.2402 12.5701 20.8172 11.0006 22.7405 11C24.6675 10.9994 26.2395 12.5632 26.2402 14.4819ZM22.733 12.5103C21.6242 12.5159 20.749 13.395 20.7515 14.4994C20.7546 15.592 21.6599 16.4866 22.7524 16.476C23.8517 16.4654 24.7476 15.5664 24.742 14.4801C24.7357 13.3875 23.8361 12.5053 22.733 12.5103Z"
										fill="white" />
								</g>
								<defs>
									<clipPath id="clip0_29_383">
										<rect width="21" height="14" fill="white"
											transform="translate(8 11)" />
									</clipPath>
								</defs>
							</svg>
							<p class="name-card">{{ __('backend/dashboard.users_total.widget_title') }}</p>
						</div>
						<div class="card-price">{{ App\Models\User::count() }}</div>
						{{-- <div class="d-flex flex-wrap box-precent">
							<div class="d-flex align-items-center card-precent">
								<svg xmlns="http://www.w3.org/2000/svg" class="ic-precent" width="0.5rem"
									height="0.5rem" viewBox="0 0 12 12" fill="none">
									<path d="M1.5 1.5H10.5V10" stroke-width="1.5" />
									<path d="M10.5 1.5L1.5 10.5" stroke-width="1.5" />
								</svg>
								13%
							</div>

							<div class="d-flex align-items-center card-view">
								+3.5K this week
							</div>
						</div> --}}
					</div>
				</div>
				<!-- Total Orders -->
				<div class="col-lg-3 col-6 card-synthetic card-synthetic-info">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<svg class="card-icon" viewBox="0 0 36 36" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<circle id="Ellipse 33" cx="18" cy="18" r="18" fill="#363636" />
								<path
									d="M23.6421 27.3242L23.6424 27.3244C23.6754 27.3427 23.6977 27.344 23.7135 27.3425C23.7329 27.3407 23.7589 27.3324 23.7861 27.312C23.8394 27.2719 23.8773 27.2025 23.8618 27.1059L23.8617 27.1055L22.957 21.4496L22.957 21.4494C22.8711 20.9113 23.0428 20.3566 23.4299 19.9657L23.4304 19.9653L27.3891 15.9754L27.3894 15.9751C27.445 15.9192 27.4651 15.8399 27.4388 15.754C27.4128 15.6694 27.3617 15.6358 27.3101 15.6278L27.31 15.6278L21.8686 14.7846L21.8664 14.7843C21.3158 14.6973 20.8553 14.3377 20.6224 13.8408L20.6223 13.8405L18.2106 8.68982L18.2105 8.6896C18.1889 8.64338 18.1644 8.62205 18.1464 8.61086C18.1261 8.59819 18.1013 8.59083 18.0745 8.59074C18.0477 8.59065 18.0226 8.59786 18.0017 8.61068C17.9831 8.62206 17.958 8.64368 17.9357 8.69021L17.9357 8.69029L15.4773 13.824L15.4771 13.8242C15.2402 14.3186 14.7768 14.6763 14.2232 14.7579L14.2236 14.7578L14.1138 14.0159L14.2231 14.7579L23.6421 27.3242ZM23.6421 27.3242L18.7835 24.6392L18.7827 24.6387M23.6421 27.3242L18.7827 24.6387M18.7827 24.6387C18.2951 24.37 17.7079 24.3673 17.2176 24.6329L17.2169 24.6332M18.7827 24.6387L17.2169 24.6332M17.2169 24.6332L12.334 27.2854L12.3339 27.2854M17.2169 24.6332L12.3339 27.2854M12.3339 27.2854C12.3 27.3039 12.2773 27.305 12.2616 27.3034C12.2424 27.3014 12.2168 27.2931 12.1902 27.2728C12.1384 27.2333 12.1008 27.1642 12.1173 27.0668L12.1173 27.0666M12.3339 27.2854L12.1173 27.0666M12.1173 27.0666L13.0737 21.417L13.0738 21.4163M12.1173 27.0666L13.0738 21.4163M13.0738 21.4163C13.1642 20.879 12.9982 20.3227 12.6127 19.9283M13.0738 21.4163L12.6127 19.9283M12.6127 19.9283C12.6126 19.9282 12.6126 19.9281 12.6125 19.928L12.6127 19.9283ZM8.69001 15.913L8.68989 15.9129L8.15341 16.437L8.69001 15.913Z"
									stroke="white" stroke-width="1.5" />
							</svg>
							<p class="name-card">{{ __('backend/dashboard.products_total.widget_title') }}</p>
						</div>
						<div class="card-price">{{ App\Models\Product::count() }}</div>
						{{-- <div class="d-flex flex-wrap box-precent">
							<div class="d-flex align-items-center card-precent">
								<svg xmlns="http://www.w3.org/2000/svg" class="ic-precent" width="0.5rem"
									height="0.5rem" viewBox="0 0 12 12" fill="none">
									<path d="M1.5 1.5H10.5V10" stroke-width="1.5" />
									<path d="M10.5 1.5L1.5 10.5" stroke-width="1.5" />
								</svg>
								4.2%
							</div>

							<div class="d-flex align-items-center card-view">
								+5K this week
							</div>
						</div> --}}
					</div>
				</div>
				<!-- Refund -->
				<div class="col-lg-3 col-6 card-synthetic card-synthetic-info">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<svg class="card-icon" viewBox="0 0 36 36" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<circle cx="18" cy="18" r="18" fill="#363636" />
								<g clip-path="url(#clip0_29_246)">
									<path
										d="M11.8085 16.262C12.6703 17.0722 13.4809 17.8359 14.294 18.5979C14.6351 18.9173 14.7629 19.2924 14.6141 19.7274C14.3867 20.3912 13.5131 20.652 12.9131 20.2402C12.8328 20.1851 12.7593 20.12 12.6883 20.0532C11.2419 18.6977 9.79554 17.3422 8.35042 15.9856C7.88272 15.5465 7.88148 14.8926 8.34918 14.4541C9.80543 13.087 11.2635 11.7222 12.7191 10.3551C13.0386 10.0554 13.4099 9.92765 13.8535 10.0421C14.2773 10.1512 14.5436 10.4167 14.6431 10.8145C14.7426 11.2146 14.6017 11.5532 14.2959 11.8401C13.5365 12.5504 12.7797 13.263 12.0235 13.9761C11.9666 14.0296 11.8906 14.0708 11.8597 14.1765C11.953 14.1765 12.034 14.1765 12.1155 14.1765C15.2986 14.1765 18.4817 14.1753 21.6648 14.1771C24.6335 14.1783 27.1271 16.0257 27.8271 18.739C28.6742 22.0238 26.3066 25.3719 22.7541 25.916C22.434 25.9648 22.1146 25.9997 21.7896 25.9997C19.0538 25.9985 16.3174 25.9997 13.5816 25.9991C13.0009 25.9991 12.5196 25.6117 12.4559 25.1007C12.388 24.5559 12.7371 24.0779 13.3018 23.9391C13.4161 23.9107 13.531 23.9153 13.6459 23.9153C16.3125 23.9147 18.9791 23.9182 21.6463 23.9136C23.5925 23.9101 25.192 22.7294 25.6542 20.9685C26.2319 18.7692 24.56 16.528 22.1739 16.2957C21.928 16.2719 21.6827 16.262 21.4362 16.262C18.3303 16.262 15.2239 16.262 12.118 16.262C12.0358 16.262 11.9543 16.262 11.8085 16.262Z"
										fill="white" />
								</g>
								<defs>
									<clipPath id="clip0_29_246">
										<rect width="20" height="16" fill="white"
											transform="translate(8 10)" />
									</clipPath>
								</defs>
							</svg>

							<p class="name-card">{{ __('backend/dashboard.tickets_total.widget_title') }}</p>
						</div>
						<div class="card-price">{{ App\Models\UserTicket::where('status', 'open')->count() }}</div>
						{{-- <div class="d-flex flex-wrap box-precent">
							<div class="d-flex align-items-center card-precent-reduce">
								<svg xmlns="http://www.w3.org/2000/svg" class="ic-precent" width="12"
									height="12" viewBox="0 0 12 12" fill="none">
									<path d="M10.5 1.5L10.5 10.5L2 10.5" stroke="#DA5538"
										stroke-width="1.5" />
									<path d="M10.5 10.5L1.5 1.5" stroke="#DA5538" stroke-width="1.5" />
								</svg>
								9.1%
							</div>

							<div class="d-flex align-items-center card-view">
								+66K this week
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>

		{{-- <div class="col-12 order-md-0 col-md-9">
			<div id="chart-revenue-and-orders" class="chart-line"></div>
		</div> --}}
		<!-- Top products -->
		<div class="col-12 order-md-2 col-md-">
			<div class="bg-secondary rounded-2 p-3">
				<div class="row d-flex align-items-center">
					<div class="col-12 col-md-4">
						<p class="title-table-box">{{ __('backend/dashboard.recent_orders.title') }}</p>
					</div>
					<div class="col-12 col-md-6 px-md-2 input-mt">
						<div class="position-relative">
							<!-- Occupies 8 columns (3/3 width) on medium screens and up -->
							<svg class="ic-input" xmlns="http://www.w3.org/2000/svg" width="19" height="19"
								viewBox="0 0 19 19" fill="none">
								<circle cx="8" cy="8" r="7" stroke="#7D7D7D" stroke-width="2" />
								<path d="M13 13L17.5 18" stroke="#7D7D7D" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<input type="text" class="form-control input-ic-p" placeholder="Search" />
						</div>
					</div>
					<div class="col-12 col-md-2 select-mt">
						<div>
							<select class="form-select custom-select" aria-label="Default select example">
								<option selected>This week</option>
								<option value="1">yesterday</option>
								<option value="2">last week</option>
								<option value="3">last month</option>
							</select>
						</div>
					</div>
				</div>

				<!-- table mobile -->
				<div class="mt-30 table-mobile">
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb">
								<div class="d-flex align-items-center gap-2 fs-20">
									<svg xmlns="http://www.w3.org/2000/svg" class="ic-table"
										viewBox="0 0 22 17" fill="none">
										<path
											d="M2.75 2C2.75 1.30964 3.30964 0.75 4 0.75H18C18.6904 0.75 19.25 1.30964 19.25 2V11.25H2.75V2Z"
											stroke="white" stroke-width="1.5" />
										<rect x="0.75" y="11.75" width="20.5" height="4.5" rx="2.25"
											stroke="white" stroke-width="1.5" />
									</svg>
									MackBook Air AAPL
								</div>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Order ID :</div>
							<div class="value-table-mb">
								<span>#719261</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Price :</div>
							<div class="value-table-mb">
								<span>$1,846</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Sales :</div>
							<div class="value-table-mb">
								<span>9,971</span>
							</div>
						</div>
					</div>
				</div>

				<!-- table pc -->
				<div class="mt-30 table-pc" id="k_recent_orders">
					<!-- table item -->
					<table class="table mt-2">
						<!-- title table pc -->
						<thead class="d-md-table-header-group table-header-pc">
							<tr>
								<th scope="col" class="d-block d-md-table-cell">
									Order ID <span class="d-inline d-md-none">:</span>
								</th>
								<th scope="col" class="d-block d-md-table-cell">
									{{ __('backend/dashboard.recent_orders.user_name') }} <span class="d-inline d-md-none">:</span>
								</th>
								<th scope="col" class="d-block d-md-table-cell">
									{{ __('backend/dashboard.recent_orders.price_with_shipping') }} <span class="d-inline d-md-none">:</span>
								</th>
								<th scope="col" class="d-block d-md-flex justify-content-end">
									{{ __('backend/dashboard.recent_orders.date') }} <span class="d-inline d-md-none">:</span>
								</th>
							</tr>
						</thead>
						@if($recentOrders)
							@foreach ($recentOrders as $order)
								<tr>
									<td class="fs-20 d-block d-md-table-cell">{{$order->id}}</td>
									<td scope="row" class="d-block d-md-table-cell">
										<div class="d-flex align-items-center gap-2 fs-20">@if($order->user) {{$order->user->username}} @endif</div>
									</td>
									<td class="fs-20 d-block d-md-table-cell">{{$order->getFormattedPriceWithShipping()}}</td>
									<td class="fs-20 d-block d-md-flex justify-content-end">
										{{$order->created_at->format('d.m.Y H:i')}}
									</td>
								</tr>
							@endforeach
						@endif
					</table>
				</div>
			</div>
		</div>
		<div class="order-md-3 col-md-12">
			<div class="bg-secondary rounded-2 p-3">
				<div class="row d-flex align-items-center">
					<div class="col-12 col-md-4">
						<p class="title-table-box">{{ __('backend/dashboard.recent_tickets.title') }}</p>
					</div>
					{{-- <div class="col-12 col-md-6 px-md-2 input-mt">
						<div class="position-relative">
							<!-- Occupies 8 columns (3/3 width) on medium screens and up -->
							<svg class="ic-input" xmlns="http://www.w3.org/2000/svg" width="19" height="19"
								viewBox="0 0 19 19" fill="none">
								<circle cx="8" cy="8" r="7" stroke="#7D7D7D" stroke-width="2" />
								<path d="M13 13L17.5 18" stroke="#7D7D7D" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<input type="text" class="form-control input-ic-p" placeholder="Search" />
						</div>
					</div>
					<div class="col-12 col-md-2 select-mt">
						<div>
							<select class="form-select custom-select" aria-label="Default select example">
								<option selected>This week</option>
								<option value="1">yesterday</option>
								<option value="2">last week</option>
								<option value="3">last month</option>
							</select>
						</div>
					</div> --}}
				</div>

				<!-- table mobile -->
				<div class="mt-30 table-mobile">
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb">
								<div class="d-flex align-items-center gap-2 fs-20">
									<svg xmlns="http://www.w3.org/2000/svg" class="ic-table"
										viewBox="0 0 22 17" fill="none">
										<path
											d="M2.75 2C2.75 1.30964 3.30964 0.75 4 0.75H18C18.6904 0.75 19.25 1.30964 19.25 2V11.25H2.75V2Z"
											stroke="white" stroke-width="1.5" />
										<rect x="0.75" y="11.75" width="20.5" height="4.5" rx="2.25"
											stroke="white" stroke-width="1.5" />
									</svg>
									MackBook Air AAPL
								</div>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Order ID :</div>
							<div class="value-table-mb">
								<span>#719261</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Price :</div>
							<div class="value-table-mb">
								<span>$1,846</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Sales :</div>
							<div class="value-table-mb">
								<span>9,971</span>
							</div>
						</div>
					</div>
				</div>

				<!-- table pc -->
				<div class="mt-30 table-pc" >
					<!-- table item -->
					<table class="table mt-2">
						<!-- title table pc -->
						<thead class="d-md-table-header-group table-header-pc">
							<tr>
								<th scope="col" class="d-block d-md-table-cell">
									{{ __('backend/dashboard.recent_tickets.user') }} <span class="d-inline d-md-none">:</span>
								</th>
								<th scope="col" class="d-block d-md-table-cell">
									{{ __('backend/dashboard.recent_tickets.subject') }} <span class="d-inline d-md-none">:</span>
								</th>
								<th scope="col" class="d-block d-md-table-cell">
									{{ __('backend/dashboard.recent_tickets.status') }} <span class="d-inline d-md-none">:</span>
								</th>
								<th scope="col" class="d-block d-md-table-cell">
									{{ __('backend/dashboard.recent_tickets.date') }} <span class="d-inline d-md-none">:</span>
								</th>
								<th scope="col" class="d-block d-md-flex justify-content-end">
									{{ __('backend/dashboard.recent_tickets.actions') }} <span class="d-inline d-md-none">:</span>
								</th>
							</tr>
						</thead>
						@if($tickets)
							@foreach ($tickets as $ticket)
								<tr>
									<td class="fs-20 d-block d-md-table-cell">{{$ticket->getUser()->username}}</td>
									<td scope="row" class="d-block d-md-table-cell">
										<div class="d-flex align-items-center gap-2 fs-20">{{ $ticket->subject }}</div>
									</td>
									<td scope="row" class="d-block d-md-table-cell">
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
									<td class="fs-20 d-block d-md-table-cell">{{ $ticket->created_at->format('d.m.Y H:i') }}</td>
									<td class="fs-20 d-block d-md-flex justify-content-end">
										<div class="d-flex">
											<div>
												<a href="{{ route('backend-management-ticket-edit', $ticket->id) }}">
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
										</div>
									</td>
								</tr>
							@endforeach
						@endif
					</table>
				</div>
			</div>
		</div>
		{{-- <div class="col-12 order-md-1 col-md-3 position-relative">
			<div id="chart" class="chart-sale"></div>
			<div class="more-chart">
				More
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
					<path d="M7.27197 1L14.544 8.27203L7.67597 15.14" stroke="white"
						stroke-width="1.71403" />
					<path d="M14.544 8.27203H-5.2385e-05" stroke="white" stroke-width="1.71403" />
				</svg>
			</div>
			<div id="center-text">$35.7K</div>
		</div> --}}
		
	</div>

	<div class="row mt-4"></div>
@endsection

@section('page_scripts')
	<script type="text/javascript">
		var KDashboard = function() {

			var recentTicketsInit = function() {
				if ($('#k_recent_tickets').length === 0) {
					return;
				}

				var datatable = $('#k_recent_tickets').KDatatable({
					sort: null,
				
					translate: {
						records: {
							processing: 'Bitte warten...',
							noRecords: 'Keine Einträge vorhanden.',
						},
						toolbar: {
							pagination: {
								items: {
									default: {
										first: 'Erste Seite',
										prev: 'Zurück',
										next: 'Weiter',
										last: 'Letzte Seite',
										more: 'Weitere Seiten',
										input: 'Seitennummer',
										select: 'Select page size',
									}
								},
							},
						},
					},

					data: {
						type: 'remote',
						source: {
							read: {
								url: '/admin/api/recent-tickets',
							},
						},
						pageSize: 10,
						serverPaging: true,
						serverFiltering: true,
						serverSorting: true
					},

					layout: {
						scroll: true,
						footer: false,
						height: 430
					},

					sortable: false,
					pagination: false,
					search: null,

					columns: [{
						field: 'id',
						title: '#',
						sortable: false,
						width: 20,
						type: 'number',
						selector: {class: 'k-checkbox--solid k-checkbox--brand'},
						textAlign: 'center',
					}, {
						field: 'user',
						title: '{{ __('backend/dashboard.recent_tickets.user') }}'
					}, {
						field: 'subject',
						title: '{{ __('backend/dashboard.recent_tickets.subject') }}'
					}, {
						field: 'status',
						title: '{{ __('backend/dashboard.recent_tickets.status') }}',
						template: function(response) {
							if(response['status'] == 'closed') {
								return '\
									<span class="kt-badge kt-badge--danger kt-badge--dot kt-badge--md"></span>\
									<span class="kt-label-font-color-2 kt-font-bold">{{ __('backend/dashboard.recent_tickets.status_data.closed') }}</span>\
								';
							} else if(response['status'] == 'replied') {
								return '\
									<span class="kt-badge kt-badge--brand kt-badge--dot kt-badge--md"></span>\
									<span class="kt-label-font-color-2 kt-font-bold">{{ __('backend/dashboard.recent_tickets.status_data.replied') }}</span>\
								';
							}

							return '\
								<span class="kt-badge kt-badge--success kt-badge--dot kt-badge--md"></span>\
								<span class="kt-label-font-color-2 kt-font-bold">{{ __('backend/dashboard.recent_tickets.status_data.open') }}</span>\
							';
						}
					}, {
						field: 'hire_date',
						title: '{{ __('backend/dashboard.recent_tickets.date') }}'
					}, {
						field: 'actions',
						title: '{{ __('backend/dashboard.recent_tickets.actions') }}',
						sortable: false,
						width: 80,
						overflow: 'visible',
						textAlign: 'center',
						autoHide: false,
						template: function(response) {
							return '\
								<a href="' + response['url'] + '" class="btn btn-clean  btn-sm btn-icon-md">\
									<i class="la la-edit"></i> {{ __('backend/dashboard.recent_tickets.edit') }}\
								</a>\
							';
						}
					}]
				});
			};
			
			var recentOrdersInit = function() {
				if ($('#k_recent_orders').length === 0) {
					return;
				}

				var datatable = $('#k_recent_orders').KDatatable({
					sort: null,
				
					translate: {
						records: {
							processing: 'Bitte warten...',
							noRecords: 'Keine Einträge vorhanden.',
						},
						toolbar: {
							pagination: {
								items: {
									default: {
										first: 'Erste Seite',
										prev: 'Zurück',
										next: 'Weiter',
										last: 'Letzte Seite',
										more: 'Weitere Seiten',
										input: 'Seitennummer',
										select: 'Select page size',
									}
								},
							},
						},
					},

					data: {
						type: 'remote',
						source: {
							read: {
								url: '/admin/api/recent-orders',
							},
						},
						pageSize: 10,
						serverPaging: true,
						serverFiltering: true,
						serverSorting: true
					},

					layout: {
						scroll: true,
						footer: false,
						height: 430
					},

					sortable: false,
					pagination: false,
					search: null,

					columns: [{
						field: 'id',
						title: '#',
						sortable: false,
						width: 20,
						type: 'number',
						// selector: {class: 'k-checkbox--solid k-checkbox--brand'},
						textAlign: 'center',
					}, {
						field: 'customer_name',
						title: '{{ __('backend/dashboard.recent_orders.user_name') }}'
					}, {
						field: 'price',
						title: '{{ __('backend/dashboard.recent_orders.price_with_shipping') }}'
					}, {
						field: 'hire_date',
						title: '{{ __('backend/dashboard.recent_orders.date') }}'
					}]
				});

				$('#k_form_status').on('change', function() {
					datatable.search($(this).val().toLowerCase(), 'status');
				});

				$('#k_form_type').on('change', function() {
					datatable.search($(this).val().toLowerCase(), 'type');
				});

				$('#k_form_status,#k_form_type').selectpicker();

				if (KLayout.getAsideSecondaryToggler && KLayout.getAsideSecondaryToggler()) {
					KLayout.getAsideSecondaryToggler().on('toggle', function() {
						datatable.redraw();
					});
				}

				datatable.closest('.k-content__body').find('[data-toggle="tab"]').on('shown.bs.tab', function(e) {
					datatable.redraw();
				});
			};

			return {
				init: function() {
					recentOrdersInit();
					recentTicketsInit();
				}
			};
		}();

		jQuery(document).ready(function() {
			KDashboard.init();
		});
	</script>
@endsection
