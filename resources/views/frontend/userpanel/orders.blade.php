@extends('frontend.layouts.app')

@section('content')
<div class="cart-container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="page-title text-left bold-page-header-title">{{ __('frontend/user.orders') }}</h3>

            @if(count($user_orders))
                <div class="cart-list-view">
                    <!-- <div class="card-header">{{ __('frontend/user.orders') }}</div> -->
                        <ul>
                            @foreach($user_orders as $order_shopping)
                            <li>
                                <div>
                                    <div>
                                    @if($first_order = $order_shopping->getFirstOrder())
                                        @if($product = $first_order->getProduct())
                                            @if($main_img = $product->getMainImage())
                                                <img src="{{ '/files/' . $main_img->img_path }}" class="product-img-sm">
                                                <!-- <img src="{{ 'http://localhost/blockchain/public/files/' . $main_img->img_path }}" class="product-img-sm"> -->
                                            @endif
                                        @endif
                                    @endif
                                    </div>
                                    <div>
                                        <h3 class="my-order-sub-title">
                                            {{ __('frontend/shop.order_id') }} <span class="text-danger">#{{ $order_shopping->id }}</span> -
                                            {{ \App\Models\Product::getFormattedPriceFromCent($order_shopping->total_price + $order_shopping->delivery_price)  }}
                                        </h3>
                                        <div>
                                        @foreach($order_shopping->getOrders() as $order)
                                            <div>
                                                <label>{{ $order->name }}:</label>
                                                <small class="inline-block">
                                                    @if($order->getAmount() > 1)
                                                        {{ $order->getAmount() }}
                                                    @endif
                                                    @if($order->asWeight())
                                                        {{ $order->getWeight() . $order->getWeightChar() }}
                                                    @endif
                                                    @if($order->is_variant_type)
                                                    {{ $order->getVariant()->title}}
                                                    @endif
                                                </small>
                                            </div>
                                            <a href="{{ route('order-detail-page', $order_shopping->id) }}">View {{ __('frontend/v4.details') }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                        <!-- <div>
                            <div class="table-responsive">
                                <table class="table table-transactions table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">{{ __('frontend/v4.product') }}</th>
                                            <th scope="col">{{ __('frontend/v4.price') }}</th>
                                            <th scope="col">{{ __('frontend/v4.details') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user_orders as $order_shopping)
                                        <tr class="">
                                            <td>
                                                <div class="d-flex">
                                                    <div>
                                                        @if($first_order = $order_shopping->getFirstOrder())
                                                            @if($product = $first_order->getProduct())
                                                                @if($main_img = $product->getMainImage())
                                                                    <img src="{{ '/files/' . $main_img->img_path }}" class="product-img-sm">
                                                                @endif
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <div>
                                                        {{ __('frontend/shop.order_id') }} <span class="text-danger">#{{ $order_shopping->id }}</span>
                                                        <div>
                                                        @foreach($order_shopping->getOrders() as $order)
                                                            <div>
                                                                <span class="product-name text-dark">{{ $order->name }}</span> 
                                                                <span class="product-quantity text-muted">
                                                                    @if($order->getAmount() > 1)
                                                                        {{ $order->getAmount() }}
                                                                    @endif
                                                                    @if($order->asWeight())
                                                                        {{ $order->getWeight() . $order->getWeightChar() }}
                                                                    @endif
                                                                    @if($order->is_variant_type)
                                                                    {{ $order->getVariant()->title}}
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        @endforeach
                                                        </div>
                                                    </div>
                                            </td>
                                            <td>
                                                {{ \App\Models\Product::getFormattedPriceFromCent($order_shopping->total_price + $order_shopping->delivery_price)  }}
                                            </td>
                                            <td>
                                                <a href="{{ route('order-detail-page', $order_shopping->id) }}">{{ __('frontend/v4.details') }}</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    </div>
                </div>

                {!! preg_replace('/' . $user_orders->currentPage() . '\?page=/', '', $user_orders->links()) !!}
            @else
                <div class="alert alert-warning">
                    {{ __('frontend/user.orders_page.no_orders_exists') }}
                </div>  
            @endif
        </div>
    </div>
</div>
@endsection
