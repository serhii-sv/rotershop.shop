<div class="small-container product-details-box">

    <a href="{{ url('/') }}" class="back-btn-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5303 5.46967C10.8232 5.76256 10.8232 6.23744 10.5303 6.53033L5.81066 11.25H20C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H5.81066L10.5303 17.4697C10.8232 17.7626 10.8232 18.2374 10.5303 18.5303C10.2374 18.8232 9.76256 18.8232 9.46967 18.5303L3.46967 12.5303C3.17678 12.2374 3.17678 11.7626 3.46967 11.4697L9.46967 5.46967C9.76256 5.17678 10.2374 5.17678 10.5303 5.46967Z" fill="#0D0E0E" stroke="black"/>
        </svg>
        <span>Back</span>
    </a>

    @if($product->isSale())
    <div class="product-tag product-tag-sale">
        <span class="product-tag-percent">
            {{ __('frontend/shop.sale', ['percent' => $product->getSalePercent()]) }}
        </span>
        {{ __('frontend/shop.tags.sale') }}
        <span class="product-tag-old-price">
            <s>{{ $product->getFormattedOldPrice() }}</s>
        </span>
    </div>
    @endif

    @if($images = $product->getImages())
    <div>
        <div class="product-slider">
            @foreach($images as $image)
                <div class="dashboard-card">
                    <img src="{{ '/files/' . $image->img_path }}" class="product-img">
                    <!-- <img src="{{ 'http://localhost/blockchain/public/files/' . $image->img_path }}" class="product-img"> -->
                </div>
            @endforeach
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-md-8">
            <div>
                <div class="stock-header">
                    <div class="row">
                        <div class="col-xs-12 col-lg-12">
                            @if($product->asWeight())
                                <span>
                                    {{ __('frontend/shop.amount_with_char', [
                                        'amount_with_char' => $product->getWeightAvailable() . $product->getWeightChar()
                                    ]) }}
                                </span>
                            @elseif($product->isUnlimited())
                                {{ __('frontend/v4.unlimited_ava') }}
                            @elseif(!$product->asWeight() && !$product->asVariant() && !$product->asTiered())
                                {{ __('frontend/v4.stock_ava', [
                                    'amount' => $product->getStock()
                                ]) }}
                            @endif

                            @if($product->getInterval() > 1)
                                <span class="delimiter">|</span>
                                <span>
                                    {{ __('frontend/v4.interval') }} {{ $product->getInterval() }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <h2>{{ $product->name }}</h2>
            </div>

            @if(strlen($product->short_description) > 0)
                <div>
                {!! \App\Classes\LangHelper::translate(app()->getLocale(), 'product', 'short_description', 'short_description', $product, true) !!}
                </div>
            @endif

            <div>
                <!-- <b>{{ __('frontend/shop.category') }}</b> -->
                <a href="{{ route('product-category', [$product->getCategory()->slug]) }}" class="category-tag">
                    {{ \App\Classes\LangHelper::translate(app()->getLocale(), 'product', null, 'name', $product->getCategory()) }}
                </a>
            </div>
            <!-- <div>
                <a href="{{ route('product-page', $product->id) }}">{{ __('frontend/shop.details_button') }}</a>
            </div> -->

            @if(isset($productShowLongDes) && $productShowLongDes)
                <div class="row mt-3">
                    <div class="col-md-12">
                        <small>Description</small>
                        <div class="product-description">
                            {!! \App\Classes\LangHelper::translate(app()->getLocale(), 'product', 'description', 'description', $product, true) !!}
                        </div>
                    </div>
                </div>
            @endif

            @if($product->asTiered())
                @php
                    $tiered_prices = $product->getTieredPrices()
                @endphp
                <div>
                    <div class="table-responsive">
                        <table class="table table-transactions table-striped">
                            <thead>
                                <tr>
                                    <th width="50%" scope="col">{{ __('frontend/shop.starting_from') }}</th>
                                    <th width="50%" scope="col">{{ __('frontend/shop.price') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tiered_prices as $price)
                                <tr>
                                    <td>{{ $price->amount }}</td>
                                    <td> {{ \App\Models\Product::getFormattedPriceFromCent($price->price)}} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-md-4">
            <ul class="list-group list-group-flush text-right">
                <li class="list-group-item">

                    <form method="POST" class="mt-15" action="{{ route('buy-product-form') }}">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="product_id" />

                        <div>
                            @if($product->asVariant())
                                @php
                                    $variants = $product->getVariants()
                                @endphp
                                <div>
                                    <select class="form-control dropdown-new" id="variant_select" required>
                                        <option value="">{{ __('frontend/shop.select_variant') }}</option>
                                        @foreach($variants as $variant)
                                        <option value="{{$variant->id}}">{{$variant->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--<<div class="col-xs-5 col-lg-6 text-start pt-1">-->
                                <!--    <label class="price-label">{{ __('frontend/shop.price') }}<span class="ml-2" id="variant_price" data-price-in-cent=""></span> EUR</label>-->
                                <!--</div>-->
                            @elseif($product->asTiered())
                                <!-- class="col-xs-7 col-lg-6 d-flex" -->
                                <div class="add-ons-product">
                                    <button type="button" class="btn" id="decrease_amount_btn">-</button>
                                    <input type="number" id="product_amount_tiered" name="product_amount"  cart-amount="{{ $product->id }}" class="form-control form-control-round" min="{{$tiered_prices[0]->amount}}" value="{{$tiered_prices[0]->amount}}">
                                    <button type="button" class="btn" id="increase_amount_btn">+</button>
                                </div>
                                <!--<div class="col-xs-5 col-lg-6 text-start pt-1">-->
                                <!--    <label class="price-label">Price:<span class="ml-2" id="product_price" data-price-in-cent=""></span> EUR</label>-->
                                <!--</div>-->
                            @else
                                <div class="col-xs-6 col-lg-6 only-p-right">
                                    <div class="form-control form-control-round text-left price-control">
                                        {{ $product->getFormattedPrice() }}
                                    </div>
                                </div>
                                <div class="col-xs-6 col-lg-6">
                                    @if(!$product->asWeight() && !$product->isUnlimited())
                                        <input type="text" name="product_amount" cart-amount="{{ $product->id }}" class="form-control form-control-round" placeholder="{{ __('frontend/shop.amount_placeholder') }}" @if($product->getStock() == 0) value="{{ __('frontend/shop.sold_out') }}" disabled @endif />
                                    @elseif($product->asWeight() || $product->isUnlimited())
                                        <input type="text" name="product_amount" cart-amount="{{ $product->id }}" class="form-control form-control-round" placeholder="@if($product->asWeight()){{ __('frontend/shop.weight_placeholder') }}@else{{ __('frontend/shop.amount_placeholder') }}@endif" @if(!$product->isAvailable()) value="{{ __('frontend/shop.sold_out') }}" disabled @endif />
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="mt-15">
                            <div>
                                @if($product->asVariant())
                                    <a href="javascript:;" cart-btn="{{ $product->id }}" onClick="addVariantToCart({{ $product->id }});" class="btn btn-icon btn-block btn-block-pink pink-btn @if(!$product->isAvailable()) disabled @endif" @if(!$product->isAvailable()) disabled="true" @endif>
                                        {{ __('frontend/shop.add_cart') }}
                                        <label class="price-label">(<span id="variant_price" data-price-in-cent="">0</span> EUR)</label>
                                    </a>
                                @elseif($product->asTiered())
                                    <a href="javascript:;" cart-btn="{{ $product->id }}" onClick="addTieredProductToCart({{ $product->id }}, 'input[cart-amount={{ $product->id }}]');" class="btn btn-icon btn-block btn-block-pink pink-btn @if(!$product->isAvailable()) disabled @endif" @if(!$product->isAvailable()) disabled="true" @endif>
                                        {{ __('frontend/shop.add_cart') }}
                                        <label class="price-label">(<span id="product_price" data-price-in-cent="">0</span> EUR)</label>
                                    </a>
                                @else
                                    <a href="javascript:;" cart-btn="{{ $product->id }}" onClick="addToCart({{ $product->id }}, 'input[cart-amount={{ $product->id }}]');" class="btn btn-icon btn-block btn-primary @if(!$product->isAvailable()) disabled @endif" @if(!$product->isAvailable()) disabled="true" @endif><ion-icon name="cart"></ion-icon>amin 2</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

@section('page_scripts')
<script type="text/javascript">
	$(function() {
        @if($product->asVariant())
            var variants = [];
            @foreach($variants as $variant)
                variants.push({'id' : {{$variant->id}}, 'price': {{$variant->price}} });
            @endforeach
        @endif

        @if($product->asTiered())
            var tiered_prices = [];
            @foreach($tiered_prices as $price)
                tiered_prices.push({'amount' : {{$price->amount}}, 'price': {{$price->price}} });
            @endforeach
        @endif


        $("#variant_select").on("change", function(){
            if(!$(this).val()){
                $("#variant_price").html("");
                return;
            }

            const selected_id = $(this).val();
            variants.forEach((item) => {
                if(item.id == selected_id){

                    let formated_price = getFormattedPriceFromCent(item.price);
                    $("#variant_price").attr("data-price-in-cent", item.price).html(formated_price);
                }
            })
        })

        $("#product_amount_tiered").on("keyup", function(){
            const amount = parseInt($(this).val());
            const min_value = parseInt($("#product_amount_tiered").attr("min"));

            if(amount){
                if(tiered_prices.length > 0){
                    // sort by amount
                    tiered_prices = tiered_prices.sort((a, b) => b.amount - a.amount);

                    for(let i = 0; i < tiered_prices.length; i++){
                        if(amount >= tiered_prices[i].amount){
                            let total_price = tiered_prices[i].price * amount;
                            let formated_price = getFormattedPriceFromCent(total_price);
                            $("#product_price").attr("data-price-in-cent", total_price).html(formated_price);
                            return;
                        }
                    }
                    let total_price = tiered_prices[tiered_prices.length - 1].price * amount;
                    let formated_price = getFormattedPriceFromCent(total_price);
                    $("#product_price").attr("data-price-in-cent", total_price).html(formated_price);
                }
            } else {
                $("#product_price").attr("data-price-in-cent", "").html("");
            }

        })

        $("#decrease_amount_btn").on("click", function(){
            let amount = parseInt($("#product_amount_tiered").val());

            const min_value = parseInt($("#product_amount_tiered").attr("min"));
            if(amount > 0 && amount > min_value){
                amount--;
                $("#product_amount_tiered").val(amount).trigger("keyup");
            }
        })

        $("#increase_amount_btn").on("click", function(){
            let amount = parseInt($("#product_amount_tiered").val());

            amount++;
            $("#product_amount_tiered").val(amount).trigger("keyup");
        })

        $("#product_amount_tiered").trigger("keyup");
  	});
</script>
@endsection
