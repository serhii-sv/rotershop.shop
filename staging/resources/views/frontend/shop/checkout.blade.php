@extends('frontend.layouts.app')

@section('content')
<form method="POST" action="{{ route('checkout-form') }}" id="mainForm">
@csrf
</form>
<form method="POST" action="{{ route('redeem-coupon-checkout') }}" id="promoForm">
@csrf
</form>

	<div class="small-container">
		<h3 class="page-title text-left bold-page-header-title">{{ __('frontend/v4.checkout_title') }}</h3>
	</div>
	<div class="small-container main-checkout-container">
		<div class="checkout-wrapper">
			@if(!\App\Models\UserCart::hasDroplestProducts(\Auth::user()->id))
			<div class="alert alert-warning">
				{{ __('frontend/shop.start_video_alert') }}
			</div>
			@endif

			<!-- <div class="path">
				<p class="active">Cart</p>  
				<img src="./assets/images/path.svg" alt="">
				<p class="active">Shipping</p>
				<img src="./assets/images/path.svg" alt="">
				<p>Payment</p>
			</div> -->

			<div>
				<div class="auth-box">
					<!-- @if(count(\Auth::user()->getCheckoutCoupons()) <= 0)
						<b>Hast du einen Gutscheincode?</b>
						<form method="POST" action="{{ route('redeem-coupon-checkout') }}">
							@csrf
							<input autofocus type="text" class="form-control{{ $errors->has('coupon_code') ? ' is-invalid' : '' }}" value="{{ old('coupon_code') }}" name="coupon_code" />
							@if ($errors->has('coupon_code'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('coupon_code') }}</strong>
								</span>
							@endif
							<input type="submit" class="btn btn-secondary mt-15" value="Einlösen" />
						</form>
					@else
						<b>Dein Gutscheincode: </b>{{ strtoupper(\Auth::user()->getCheckoutCoupons()[0]->coupon_code) }}<br />
						<a href="{{ route('remove-coupon-checkout') }}">Anderen Gutschein verwenden</a>
					@endif -->

						<!-- @csrf -->

						@if(\App\Models\UserCart::hasDroplestProducts(\Auth::user()->id))
						<b>{{ __('frontend/v4.checkoutinfo1') }}</b>
						
						<ul class="auth-box">
							<li>
								<p class="details-title">{{ __('frontend/shop.delivery_method.title') }}</p>
								
								@php 
									$delivery_methods = App\Models\DeliveryMethod::all()
								@endphp
								
								<select form="mainForm" class="form-control" id="delivery_method_sel" name="product_delivery_method">
									<option value="">{{ __('frontend/shop.delivery_method.select_delivery_method') }}</option>
									@foreach(App\Models\DeliveryMethod::all() as $deliveryMethod)
										@if($deliveryMethod->isAvailableForUsersCart())
											<option value="{{ $deliveryMethod->id }}" >
												{{ __('frontend/shop.delivery_method.row', [
													'name' => $deliveryMethod->name,
													'price' => $deliveryMethod->getFormattedPrice()
												]) }}
											</option>
										@endif
									<!-- <label class="k-radio k-radio--all k-radio--solid">
										<input type="radio" name="product_delivery_method" value="{{ $deliveryMethod->id }}" data-content-visible="false" data-weight-visible="false" @if(!$deliveryMethod->isAvailableForUsersCart()) disabled @endif 
										data-delivery-price="{{ $deliveryMethod->price }}" />
										<span></span>
										{{ __('frontend/shop.delivery_method.row', [
											'name' => $deliveryMethod->name,
											'price' => $deliveryMethod->getFormattedPrice()
										]) }}
									
										@if(!$deliveryMethod->isAvailableForUsersCart())
										<div class="delivery-method-info">
											{{ __('frontend/shop.delivery_method.minmaxinfo', [
												'min' => $deliveryMethod->getFormattedMinAmount(),
												'max' => $deliveryMethod->getFormattedMaxAmount()
											]) }}
										</div>
										@endif
									</label><br /> -->
								@endforeach
								</select>
							</li>
						</ul>

						<ul class="auth-box">
							<li>
								<p class="details-title">{{ __('frontend/shop.order_note') }}</p>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="drop_name">{{ __('frontend/shop.drop.name') }}</label>
										<input form="mainForm" class="form-control" name="drop_name" id="drop_name" placeholder="" value="{{ old('drop_name') ?? \Session::get('dropName') ?? '' }}" required>
									</div>
									<div class="col-sm-6 form-group">
										<label for="drop_street">{{ __('frontend/shop.drop.street') }}</label>
										<input form="mainForm" class="form-control" name="drop_street" id="drop_street" placeholder="" value="{{ old('drop_street') ?? \Session::get('dropStreet') ?? '' }}" required>
									</div>
									<div class="col-sm-6 form-group">
										<label for="drop_postal_code">{{ __('frontend/shop.drop.postal_code') }}</label>
										<input form="mainForm" class="form-control" name="drop_postal_code" id="drop_postal_code" placeholder="" value="{{ old('drop_postal_code') ?? \Session::get('dropPostalCode') ?? '' }}">
									</div>
									<div class="col-sm-6 form-group">
										<label for="drop_city">{{ __('frontend/shop.drop.city') }}</label>
										<input form="mainForm" class="form-control" name="drop_city" id="drop_city" placeholder="" value="{{ old('drop_city') ?? \Session::get('dropCity') ?? '' }}" required>
									</div>
									<div class="col-sm-6 form-group">
										<label for="drop_country">{{ __('frontend/shop.drop.country') }}</label>
										<input form="mainForm" class="form-control" name="drop_country" id="drop_country" placeholder="" value="{{ old('drop_country') ?? \Session::get('dropCountry') ?? '' }}" required>
									</div>
								</div>
							</li>
						</ul>

						<!-- <hr /> -->
						@endif

						<!-- comment -->
						<!-- <b>{{ __('frontend/v4.carttotal') }} </b><br />
						<span id="total_price" data-total_price = "{{ \App\Models\UserCart::getCartSubInCent(\Auth::user()->id) }}">{{ \App\Models\UserCart::getCartSubPrice(\Auth::user()->id, false) }}</span>  <br />
						<br /> -->

						<!-- comment -->
						<!-- @if(count(Auth::user()->getCheckoutCoupons()) > 0)
							<b>{{ __('frontend/v4.amount_rabatt') }} </b><br />
							{{ \App\Models\UserCart::getCartRabatt(\Auth::user()->id) }} <br />
							<br />
						@endif -->

						<!-- comment -->
						<!-- <b>{{ __('frontend/v4.amount_to_pay') }} </b><br />
						<span id="amount_pay" data-amount_pay = "{{ \App\Models\UserCart::getCartSubInCentCheckedCoupon(\Auth::user()->id) }}">
							{{ \App\Classes\Rabatt::priceformat(\App\Models\UserCart::getCartSubInCentCheckedCoupon(\Auth::user()->id)) }} 
						</span><br /> -->
						

						<!-- comment -->
						<!-- @if(\App\Models\UserCart::hasDroplestProducts(\Auth::user()->id))
							<i>{{ __('frontend/v4.zzglversand') }}</i>
							<span id="shipping_cost"></span>
						@endif -->
						
						<!-- comment -->
						<!-- <input type="submit" value="{{ __('frontend/v4.buyconfirmbtn') }}" class="btn btn-primary" /> -->
				</div>
			</div>
		</div>

		<div class="summary">
			<div class="all-summary">
				<div class="text">
					<p>Subtotal</p>
					<p>{{ \App\Models\UserCart::getCartSubPrice(\Auth::user()->id, false) }}</p>
				</div>
				<div class="text discount">
					<p>Discount(-20%)</p>
					<p>00.00</p>
				</div>
				<div class="text">
					<p>Delivery Free</p>
					<p id="shipping_cost">00.00</p>
				</div>

				@if(\App\Models\UserCart::hasDroplestProducts(\Auth::user()->id))
					<div class="text">
						<p>{{ __('frontend/v4.zzglversand') }}</p>
					</div>
				@endif

				<div class="text total">
					<p>Total</p>
					<p id="total_price" data-total_price = "{{ \App\Models\UserCart::getCartSubInCent(\Auth::user()->id) }}">{{ \App\Models\UserCart::getCartSubPrice(\Auth::user()->id, false) }}</p>
				</div>


				@if(count(\Auth::user()->getCheckoutCoupons()) <= 0)
				<!-- <form method="POST" action="{{ route('redeem-coupon-checkout') }}" id="promoForm"> -->
					<!-- @csrf -->
					<div class="promo-code">
						<div class="summary-input-wrapper">
							<input autofocus form="promoForm" type="text" class="form-control{{ $errors->has('coupon_code') ? ' is-invalid' : '' }}" value="{{ old('coupon_code') }}" name="coupon_code" placeholder="Enter Promo Code" />
							<img src="./assets/images/input.svg" alt="">
							@if ($errors->has('coupon_code'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('coupon_code') }}</strong>
								</span>
							@endif
						</div>
						<!-- <a href="#" class="apply">Apply</a> -->
						<input type="submit" form="promoForm" class="btn apply" value="Einlösen" />
					</div> 
				<!-- </form> -->
				@else
					<div class="text applied-discount">
						<p>Dein Gutscheincode:</p>
						<p>{{ strtoupper(\Auth::user()->getCheckoutCoupons()[0]->coupon_code) }}</p>
					</div>
					<a class="primary-link" href="{{ route('remove-coupon-checkout') }}">Anderen Gutschein verwenden</a>
				@endif

				<input type="submit" form="mainForm" value="{{ __('frontend/v4.buyconfirmbtn') }}" class="btn pink-btn btn-block-pink" />
			</div>
		</div>
	</div>
<!-- </form> -->
@endsection


@section('page_scripts')
<script type="text/javascript">
	$(function() {
        // $("input[name=product_delivery_method]").on("click", function(){
		// 	const shipping_price = parseInt($("input[name=product_delivery_method]:checked").attr("data-delivery-price"));
		// 	let total_price = parseInt($("#total_price").attr('data-total_price'));

		// 	$("#total_price").html(getFormattedPriceFromCent(total_price + shipping_price) + " EUR");
		// 	$("#shipping_cost").html("(+" + getFormattedPriceFromCent(shipping_price) + " EUR)");
		// })
		var delivery_methods = [];
		@foreach($delivery_methods as $method)
			delivery_methods.push({'id' : {{$method->id}}, 'price': {{$method->price}} });
		@endforeach

		$("#delivery_method_sel").on("change", function(){
			const sel_method_id = $(this).val();
			delivery_methods.forEach((item) => {
				if(item.id == sel_method_id) {
					const shipping_price = item.price;
					let total_price = parseInt($("#total_price").attr('data-total_price'));

					$("#total_price").html(getFormattedPriceFromCent(total_price + shipping_price) + " EUR");
					$("#shipping_cost").html("(+" + getFormattedPriceFromCent(shipping_price) + " EUR)");
					return;
				}
			})
		})

		$("#delivery_method_sel").trigger("change");
  	});
</script>
@endsection