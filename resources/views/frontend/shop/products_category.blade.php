@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div>
            @if (isset($banner) && $banner)
                <div class="mb-5 mt-2 d-flex align-items-center" id="bannerimage" style="background-image: url({{ asset_dir('../files/banner/'.$banner->img_path) }})">
                    <div class="banner-content w-100 d-flex justify-content-between align-items-center">
                        <div>
                            <p class="mb-0 banner-title" style="height: 30px;">
                                {{ $banner->title }}
                            </p>
                            <div class="mb-0 banner-desc" style="height: 30px;">
                                @php echo decrypt($banner->content) @endphp
                            </div>
                        </div>
                        <a href="{{ $banner->link }}"><button class="btn btn-banner-buy" type="button">Buy Now!</button></a>
                    </div>
                </div>
            @else
                <div class="mb-5 mt-2 banner-content" id="bannerimage" style="background-image: url({{ asset_dir('banner/images.png') }})">
                    
                </div>
            @endif
    </div>

    <div class="small-container">
        @if(count($products))
            <h3 class="page-title text-left">
                @if(isset($productCategory->id))
                {{ \App\Classes\LangHelper::getValue(app()->getLocale(), 'product-category', null, $productCategory->id) ?? $productCategory->name }}
                @else
                {{$productCategory->name}}
                @endif
            </h3>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mt-30">
                        @include('frontend/shop.product_simple_card')
                    </div>
                @endforeach
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="alert alert-warning">
                        {{ __('frontend/shop.no_products_category_exists') }}
                    </div>
                </div>   
            </div>
        @endif
    </div>

</div>
@endsection
