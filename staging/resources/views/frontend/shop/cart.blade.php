@extends('frontend.layouts.app')

@section('content')
<div class="cart-container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="path-navigation cart-path">
                <a href="#">Home</a>
                <img src="../public/assets/images/arrow-right.png" alt="">
                <a href="#">Cart</a>
            </div>
            
			<h3 class="page-title text-left bold-page-header-title">Your Cart</h3>

            @if(!\App\Models\UserCart::isEmpty(\Auth::user()->id))
            <div>
                <!-- <div>{{ __('frontend/v4.shopping_cart') }}</div> -->
                    <div class="cart-list-view">
                        <ul>
                            @foreach($cart as $cartItem)
                            <li>
                                <div>
                                    <div>
                                        @if($main_img = $cartItem[0]->getMainImage())
                                            <img src="{{ '/files/' . $main_img->img_path }}" class="product-img-sm">
                                            <!-- <img src="{{ 'http://localhost/blockchain/public/files/' . $main_img->img_path }}" class="product-img-sm"> -->
                                        @endif
                                    </div>
                                    <div>
                                        <h5>{{ htmlspecialchars($cartItem[0]->name) }}</h5>
                                        <small>
                                            @if($cartItem[0]->asWeight())
                                                {{ $cartItem[1] }}{{ $cartItem[0]->getWeightChar() }}
                                            @elseif($cartItem[0]->asVariant())
                                                {{ \App\Models\UserCart::getVariant($cartItem[3]) -> title }}
                                            @else
                                                {{ $cartItem[1] }}
                                            @endif
                                        </small>
                                        <h3>
                                            @if($cartItem[0]->asVariant())
                                                {{ \App\Models\Product::getFormattedPriceFromCent($cartItem[2]) }}
                                            @elseif($cartItem[0]->asTiered())
                                                {{ \App\Models\Product::getFormattedPriceFromCent($cartItem[0]->getTieredPriceFromAmount($cartItem[1] )) }}
                                            @else
                                                {{ $cartItem[0]->getFormattedPrice() }}
                                            @endif
                                        </h3>
                                        <a href="{{ route('cart-item-delete', $cartItem[4]) }}">
                                            <img src="../public/assets/images/delete.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                        <div class="all-summary">
                            <div class="text">
                                <p>Subtotal</p>
                                <p>{{ \App\Models\UserCart::getCartSubPrice(\Auth::user()->id, false) }} </p>
                            </div>
                            <div class="text discount">
                                <p>Discount</p>
                                <p>0.00</p>
                            </div>
                            <div class="text">
                                <p>Delivery Free</p>
                                <p>0.00</p>
                            </div>
                            <div class="separator"></div>
                            <div class="text total">
                                <p>Total</p>
                                <p>{{ \App\Classes\Rabatt::priceformat(\App\Models\UserCart::getCartSubInCentCheckedCoupon(\Auth::user()->id, false)) }}</p> 
                            </div>

                            <div>
                                <p>
                                    @if(\App\Models\UserCart::hasDroplestProducts(\Auth::user()->id))
                                    zzgl. Versandkosten
                                    @endif
                                </p>
                            </div>

                            <a href="{{ route('cart-clear') }}">{{ __('frontend/v4.clearcart') }}</a>

                            <a href="{{ route('checkout') }}" class="btn pink-btn btn-block-pink cart-pink-btn">Complete Order</a>
                        </div>
                        
                        <!-- <div class="table-responsive">
                            <table class="table table-transactions table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">{{ __('frontend/v4.product') }}</th>
                                        <th scope="col">{{ __('frontend/v4.amount') }}</th>
                                        <th scope="col">{{ __('frontend/v4.price') }}</th>
                                        <th scope="col">{{ __('frontend/v4.total1') }}</th>
                                        <th scope="col">{{ __('frontend/v4.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart as $cartItem)
                                    <tr class="">
                                        <td>
                                            <a href="{{ route('product-page', $cartItem[0]->id) }}">
                                                @if($main_img = $cartItem[0]->getMainImage())
                                                    <img src="{{ '/files/' . $main_img->img_path }}" class="product-img-sm">
                                                @endif
                                                {{ htmlspecialchars($cartItem[0]->name) }}
                                            </a>
                                        </td>
                                        <td>
                                            @if($cartItem[0]->asWeight())
                                                {{ $cartItem[1] }}{{ $cartItem[0]->getWeightChar() }}
                                            @elseif($cartItem[0]->asVariant())
                                                {{ \App\Models\UserCart::getVariant($cartItem[3]) -> title }}
                                            @else
                                                {{ $cartItem[1] }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($cartItem[0]->asVariant())
                                                {{ \App\Models\Product::getFormattedPriceFromCent($cartItem[2]) }}
                                            @elseif($cartItem[0]->asTiered())
                                                {{ \App\Models\Product::getFormattedPriceFromCent($cartItem[0]->getTieredPriceFromAmount($cartItem[1] )) }}
                                            @else
                                                {{ $cartItem[0]->getFormattedPrice() }}
                                            @endif
                                        </td>
                                        <td>
                                            {{ \App\Models\Product::getFormattedPriceFromCent($cartItem[2]) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('cart-item-delete', $cartItem[4]) }}">{{ __('frontend/v4.remove') }}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <hr />

                            <a href="{{ route('cart-clear') }}" class="btn btn-secondary">{{ __('frontend/v4.clearcart') }}</a>

                            <hr />
                            
                            <b>{{ __('frontend/v4.subtotal') }} </b>
                            {{ \App\Models\UserCart::getCartSubPrice(\Auth::user()->id, false) }} 
                            <br />
                            
                            <b>{{ __('frontend/v4.carttotal') }} </b>
                            {{ \App\Classes\Rabatt::priceformat(\App\Models\UserCart::getCartSubInCentCheckedCoupon(\Auth::user()->id, false)) }} <br />
							
                            <b>{{ __('frontend/v4.amount_to_pay') }} </b>
                            {{ \App\Classes\Rabatt::priceformat(\App\Models\UserCart::getCartSubInCentCheckedCoupon(\Auth::user()->id)) }} <br />
							
							@if(\App\Models\UserCart::hasDroplestProducts(\Auth::user()->id))
                            zzgl. Versandkosten
                            @endif
                            <hr />

                            <a href="{{ route('checkout') }}" class="btn btn-primary">{{ __('frontend/v4.continue_checkout') }}</a>
                        </div> -->
                    </div>
                </div>
            </div>
            @else
            <div class="alert alert-warning">{{ __('frontend/v4.cart_is_empty') }}</div>
            @endif
        </div>
    </div>
</div>
@endsection
