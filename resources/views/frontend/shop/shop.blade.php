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
</div>

<div class="container">
	<div class="small-container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="page-title text-left">{{ __('frontend/main.shop') }}</h3>
			</div>
		</div>
		
		@if(count($categories))
			<div class="row">
				@foreach($categories as $category)
					<div class="col-md-4 mt-30">
						<a class="product-category" href="{{ route('product-category', [$category->slug]) }}">
							<div class="card-product-category d-flex align-items-center justify-content-center" style="background-image: url({{ asset_dir('product-category/category.png') }})">
								<div class="text-center">
									<p class="mb-0 product-category-title">
										{{ \App\Classes\LangHelper::getValue(app()->getLocale(), 'product-category', null, $category->id) ?? $category->name }}
									</p>
									<p class="mb-0 product-category-desc" style="height: 30px;">
										{{ \App\Classes\LangHelper::getValue(app()->getLocale(), 'product-category', null, $category->id) ?? $category->meta_tags_desc }}
									</p>
								</div>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		@else
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="alert alert-warning">
						{{ __('frontend/shop.no_products_exists') }}
					</div>
				</div>   
			</div>
		@endif
	</div>
</div>
@endsection
