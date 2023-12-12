<a href="{{ route('product-page', $product->id) }}" style="text-decoration: none;">
    <div class="dashboard-card mb-15">
        @if($main_img = $product->getMainImage())
        <div>
            <img src="{{ '/files/' . $main_img->img_path }}" class="product-img">
            <!-- <img src="{{ 'http://localhost/blockchain/public/files/' . $main_img->img_path }}" class="product-img"> -->
        </div>
        @endif
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
        
        <div class="dashboard-card-footer">
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
                            @elseif(!$product->asWeight() && !$product->asVariant()  && !$product->asTiered())
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
                <h5>{{ $product->name }}</h5>
            </div>

            @if(strlen($product->short_description) > 0)
                <small>
                    {!! \App\Classes\LangHelper::translate(app()->getLocale(), 'product', 'short_description', 'short_description', $product, true) !!}
                </small>
            @endif

            @if(isset($productShowLongDes) && $productShowLongDes)
                <div>
                    {!! \App\Classes\LangHelper::translate(app()->getLocale(), 'product', 'description', 'description', $product, true) !!}
                </div>
            @endif
                                
            <span>{{ __('frontend/shop.from') }} {{ $product->getBasePrice() }}</span>
        </div>
    </div>
</a>