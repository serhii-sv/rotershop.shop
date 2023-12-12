@extends('backend.layouts.default')
@section('title','Shopping #'.$shopping->id)
@section('content')
<div class="container-fluid">
	<div class="row mt-4 g-md-3 g-3">
		<div class="col-lg-12">
			<div class="bg-secondary rounded-2 p-3">
				<div class="row d-flex align-items-center title-box-transaction">
					<div class="col-12 col-md-7">
						<p class="title-table-box">Bestellungen</p>
					</div>
				</div>
				<!-- table pc -->
				<div class="mt-30 table-pc">
					<table class="table mt-2 table-striped">
						<!-- title table pc -->
						<thead class="d-md-table-header-group table-header-pc">
							<tr>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/orders.table.id') }} <span
										class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/orders.table.product') }}
									<span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/orders.table.amount') }}
									<span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-flex justify-content-end">{{
									__('backend/orders.table.price') }} <span class="d-inline d-md-none">:</span></th>
							</tr>
						</thead>
							@php
							$index = 0;
							@endphp

							@foreach($shopping->getOrders() as $order)
							@php
							$index++;
							@endphp
							<tr>
								<th scope="row">{{ $index }}</th>
								<td>{{ $order->name }}</td>
								<td>
									@if($order->weight > 0)
									{{ $order->weight }}{{ $order->weight_char }}
									@elseif($order->is_variant_type)
									{{ $order->getVariant() -> title }}
									@else
									{{ $order->getAmount() }}
									@endif
								</td>
								<td class="fs-20 d-block d-md-flex justify-content-end">
									{{ $order->getFormattedPrice() }}
								</td>
								<!-- <td style="font-size: 20px;">
												<a href="{{ route('backend-order-id', $order->id) }}" data-toggle="tooltip" data-original-title="{{ __('backend/orders.view') }}"><i class="la la-eye"></i></a>
												
												@if($order->getStatus() != 'completed' && $order->getStatus() != 'cancelled')
												<a href="{{ route('backend-order-complete', $order->id) }}" data-toggle="tooltip" data-original-title="{{ __('backend/orders.complete') }}"><i class="la la-check"></i></a>
												@endif
												
												@if($order->getStatus() != 'cancelled')
												<a href="{{ route('backend-order-cancel', $order->id) }}" data-toggle="tooltip" data-original-title="{{ __('backend/orders.cancel') }}"><i class="la la-close"></i></a>
												@endif
												
												<a href="{{ route('backend-order-delete', $order->id) }}" data-toggle="tooltip" data-original-title="{{ __('backend/orders.delete') }}"><i class="la la-trash"></i></a>
											</td> -->
							</tr>
							@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-4 g-md-3 g-3">
		<div class="col-lg-12">
			<div class="bg-secondary rounded-2 p-3">
				<div class="row d-flex align-items-center title-box-transaction" style="color: #fff;">
					<div class="col-lg-6 col-sm-12">
						<div class="k-portlet k-portlet--height-fluid">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<h3 class="k-portlet__head-title">{{ __('backend/orders.shipping.shipping_method') }}</h3>
								</div>
							</div>
							<div class="k-portlet__body">
								<div>
									<strong class="">{{ __('backend/orders.table.delivery_method') }}:</strong> <span>{{
										$shopping->delivery_method }}</span>
								</div>
								<div>
									<strong class="">{{ __('backend/orders.table.notes') }}:</strong>
									<div class="ml-3">
										<label>{{ __('backend/orders.shipping.drop.name') }}:</label>
										<span>
											@if(strlen($shopping->drop_name) > 0)
											{!! nl2br(e(decrypt($shopping->drop_name))) !!}
											@endif
										</span><br>
										<label>{{ __('backend/orders.shipping.drop.street') }}:</label>
										<span>
											@if(strlen($shopping->drop_street) > 0)
											{!! nl2br(e(decrypt($shopping->drop_street))) !!}
											@endif
										</span><br>
										<label>{{ __('backend/orders.shipping.drop.postal_code') }}:</label>
										<span>
											@if(strlen($shopping->drop_postal_code) > 0)
											{!! nl2br(e(decrypt($shopping->drop_postal_code))) !!}
											@endif
										</span><br>
										<label>{{ __('backend/orders.shipping.drop.city') }}:</label>
										<span>
											@if(strlen($shopping->drop_city) > 0)
											{!! nl2br(e(decrypt($shopping->drop_city))) !!}
											@endif
										</span><br>
										<label>{{ __('backend/orders.shipping.drop.country') }}:</label>
										<span>
											@if(strlen($shopping->drop_country) > 0)
											{!! nl2br(e(decrypt($shopping->drop_country))) !!}
											@endif
										</span>
									</div>
								</div>
								<div>
									<strong class="">{{ __('backend/orders.shipping.delivery_price') }}:</strong>
									<span>
										{{ $shopping->getFormattedPrice($shopping->delivery_price) }}
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-sm-12">
						<div class="k-portlet k-portlet--height-fluid">
							<div class="k-portlet__head">
								<div class="k-portlet__head-label">
									<h3 class="k-portlet__head-title">Overview</h3>
								</div>
							</div>
							<div class="k-portlet__body">
								<div>
									<strong class="text-">{{ __('backend/orders.total_price') }}:</strong> <span>{{
										$shopping->getFormattedPrice($shopping->total_price) }}</span>
								</div>
								<div>
									<strong class="text-">{{ __('backend/orders.date_time') }}:</strong> <span>{{
										$shopping->created_at->format('d.m.Y H:i') }}</span>
								</div>
								<div>
									<strong class="text-">{{ __('backend/orders.user_name') }}:</strong> <span>{{
										$shopping->getUser()->username }}</span>
								</div>
								<div>
									<strong class="">{{ __('backend/orders.table.status') }}:</strong>
									<span>
										{{ $shopping->isDone() ? 'Ja' : 'Nein' }}
									</span>
								</div>
							</div>
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