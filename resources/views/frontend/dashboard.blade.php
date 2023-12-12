@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-12">
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
    </div>
    <div>
        <!-- <div class="col-md-12">
            <h3 class="page-title">{{ __('frontend/main.home') }}</h3>
        </div> -->

        <div>
            <div class="small-container">
                <h3 class="page-title text-left">{{ __('frontend/main.top_seller_title') }}</h3>
                <div class="row">
                    @foreach(App\Models\Product::orderByDesc('sells')->limit(6)->get() as $bestsellerProduct)
                    <div class="col-lg-4 col-sm-6 mt-30">
                        <a href="{{ route('product-page', $bestsellerProduct->id) }}" >
                            <div class="dashboard-card">
                                <div>
                                    @if($main_img = $bestsellerProduct->getMainImage())
                                        <div>
                                            <img src="{{ '/files/' . $main_img->img_path }}" class="product-img">
                                            <!-- <img src="{{ 'http://localhost/blockchain/public/files/' . $main_img->img_path }}" class="product-img"> -->
                                        </div>
                                    @endif
                                </div>
                                <div class="dashboard-card-footer">
                                    <h5> {{ $bestsellerProduct->name }}</h5>
                                    <span>{{ __('frontend/shop.from') }} {{ $bestsellerProduct->getBasePrice() }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
       
    </div>

</div>
@endsection
