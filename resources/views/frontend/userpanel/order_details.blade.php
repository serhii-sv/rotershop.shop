@extends('frontend.layouts.app')

@section('content')
<div class="cart-container main-order">
    <div class="path-navigation">
        <a href="#">Home</a>
            <img src="../../public/assets/images/arrow-right.png" alt="">
        <a href="#">Orders</a>
            <img src="../../public/assets/images/arrow-right.png" alt="">
        <a href="#">ID #{{ $shopping -> id }}</a>
    </div>

    <div class="">
        <div class="">
            <!-- <h3 class="page-title">Order Details</h3> -->

            @if($shopping)
                <div class="">
                    <div class="order-title">
                        Order ID: #{{ $shopping -> id }}
                    </div>
                    <div class="">
                        <div class="order-header">
                            <div class="date">
                                {{ __('frontend/shop.order_date') }}:
                                <span>{{ $shopping -> created_at->format('M j, Y') }}</span>
                            </div>
                            <div class="separator"></div>
                            <div class="estimation">
                                <img src="../../public/assets/images/truck.svg" alt="">
                                Estimated delivery: Aug 16, 2023
                            </div>
                        </div>

                        <div class="separator"></div>

                        <div class="order-destinations">
                            <!-- <div class="delivery-step-bar"></div> -->
                            <div class="destination active">
                                <div class="title">Bestellung bestatigt</div>
                                <div class="bullet"></div>
                                <div class="date">Wed, 1th Jan</div>
                            </div>
                            <div class="destination">
                                <div class="title">Versandt</div>
                                <div class="bullet"></div>
                                <div class="date">Wed, 1th Jan</div>
                            </div>
                            <div class="destination">
                                <div class="title">In Zustellung</div>
                                <div class="bullet"></div>
                                <div class="date">Wed, 1th Jan</div>
                            </div>
                            <div class="destination">
                                <div class="title">Zugestellt</div>
                                <div class="bullet"></div>
                                <div class="date">Wed, 1th Jan</div>
                            </div>
                            <div class="cross-line"></div>
                        </div>
                        <div class="table-responsive mt-5">
                        <div class="order-items">
                            @foreach($shopping->getOrders() as $order)
                            <div class="item">
                                <div class="left-side">
                                    @if($product = $order->getProduct())
                                        @if($main_img = $product->getMainImage())
                                            <!-- class="product-img-sm" -->
                                            <img src="{{ '/files/' . $main_img->img_path }}">
                                            <!-- <img src="{{ 'http://localhost/blockchain/public/files/' . $main_img->img_path }}"> -->
                                        @endif
                                    @endif
                                    <div class="text">
                                        <div class="title">{{ $order->name }}</div>
                                        <div class="info">
                                            <span>
                                            @if($order->variant_id)
                                                {{ $order->getVariant()->title }}
                                            @endif
                                            </span> 
                                            <!-- <div class="line">|</div> <span>XL</span> <div class="line">|</div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <div class="price">
                                        {{ $order->getFormattedPrice() }} 
                                    </div>
                                    <div class="quality">
                                        Qty: 
                                        @if($order->variant_id)
                                            1
                                        @else
                                            @if($order->getAmount() > 1)
                                                {{ $order->getAmount() }}
                                            @elseif($order->asWeight())
                                                {{ $order->getWeight() . $order->getWeightChar() }}
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                            <!-- <table class="table table-transactions table-borderless">
                                <tbody>
                                    @foreach($shopping->getOrders() as $order)
                                    <tr class="">
                                        
                                        <td>
                                            <div class="d-flex">
                                                @if($product = $order->getProduct())
                                                    @if($main_img = $product->getMainImage())
                                                        <img src="{{ '/files/' . $main_img->img_path }}" class="product-img-sm">
                                                    @endif
                                                @endif
                                                <div class="product-detail">
                                                    <div>{{ $order->name }}</div>
                                                    <div>
                                                        <span class="text-muted">
                                                            @if($order->variant_id)
                                                                {{ $order->getVariant()->title }}
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end"> 
                                            <div>
                                                {{ $order->getFormattedPrice() }} 
                                            </div>
                                            <div>
                                                Qty: 
                                                <span>
                                                    @if($order->variant_id)
                                                        1
                                                    @else
                                                        @if($order->getAmount() > 1)
                                                            {{ $order->getAmount() }}
                                                        @elseif($order->asWeight())
                                                            {{ $order->getWeight() . $order->getWeightChar() }}
                                                        @endif
                                                    @endif
                                                </span>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> -->
                        </div>

                        <div class="separator"></div>

                        <div class="order-2cols">
                            <div class="left-side">
                                <div class="title">{{ __('frontend/shop.payment') }}</div>
                                <!-- <div class="visa">
                                    Visa **56
                                    <img src="./assets/images/visa.png" alt="">
                                </div> -->
                            </div>
                            <div class="right-side">
                                <div class="title">{{ __('frontend/shop.delivery') }}</div>
                                <div class="address">{{ __('frontend/shop.delivery_method.address') }}</div>
                                <div class="address-info">
                                    @if(strlen($shopping->drop_street) > 0) 
										{!! nl2br(e(decrypt($shopping->drop_street))) !!}
									@endif
                                </div>
                                <div class="address-info">
                                    @if(strlen($shopping->drop_postal_code) > 0) 
                                        {!! nl2br(e(decrypt($shopping->drop_postal_code))) !!} 
                                    @endif
                                </div>
                                <div class="address-info">
                                    @if(strlen($shopping->drop_city) > 0) 
                                        {!! nl2br(e(decrypt($shopping->drop_city))) !!},
                                    @endif
                                </div>
                                <div>
                                    @if(strlen($shopping->drop_country) > 0) 
                                        {!! nl2br(e(decrypt($shopping->drop_country))) !!}
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="separator"></div>

                        <div class="order-2cols order-2cols-bottom">
                            <div class="left-side">
                                <div class="title">{{ __('frontend/shop.need_help') }}</div>
                                <div class="address-info">
                                    write us at admin@clearcart.com
                                </div>
                                <!-- <div class="address-info">
                                    <img src="./assets/images/info.png" alt="">
                                    Order Issues
                                    <img src="./assets/images/arrow-up.png" alt="">
                                </div>
                                <div class="address-info">
                                    <img src="./assets/images/truck.png" alt="">
                                    Delivery Info
                                    <img src="./assets/images/arrow-up.png" alt="">
                                </div>
                                <div class="address-info">
                                    <img src="./assets/images/box.png" alt="">
                                    Returns
                                    <img src="./assets/images/arrow-up.png" alt="">
                                </div> -->
                            </div>
                            <div class="right-side">
                                <div class="title">{{ __('frontend/shop.orders.order_summary') }}</div>
                                <div class="order-summary-text">
                                    <div class="text">
                                        <div class="left">{{ __('frontend/shop.total_price') }}</div>
                                        <div class="righ">{{ $shopping->getFormattedPrice( $shopping->total_price) }}</div>
                                    </div>
                                    <div class="text">
                                        <div class="left">{{ __('frontend/shop.delivery') }}</div>
                                        <div class="righ">{{ $shopping->getFormattedPrice( $shopping->delivery_price) }}</div>
                                    </div>
                                </div>
                                <div class="order-summary-text">
                                    <div class="text big total">
                                        <div class="left">{{ __('frontend/shop.total') }}</div>
                                        <div class="righ">{{ $shopping->getFormattedPriceWithShipping() }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            @else
                <div class="alert alert-warning">
                    {{ __('frontend/user.orders_page.no_orders_exists') }}
                </div>  
            @endif
        </div>
    </div>
</div>
@endsection
