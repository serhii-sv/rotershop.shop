@extends('backend.layouts.default')

@section('content')
	<div class="k-content__head	k-grid__item">
		<div class="k-content__head-main">
			<h3 class="k-content__head-title">{{ __('backend/management.products.add.title') }}</h3>
			<div class="k-content__head-breadcrumbs">
				<a href="#" class="k-content__head-breadcrumb-home"><i class="flaticon-home-2"></i></a>
				<span class="k-content__head-breadcrumb-separator"></span>
				<a href="javascript:;" class="k-content__head-breadcrumb-link">{{ __('backend/management.title') }}</a>
				<span class="k-content__head-breadcrumb-separator"></span>
				<a href="{{ route('backend-management-products') }}" class="k-content__head-breadcrumb-link">{{ __('backend/management.products.title') }}</a>
			</div>
		</div>
	</div>

	<div class="k-content__body	k-grid__item k-grid__item--fluid">
		<div class="row">
			<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">{{ __('backend/management.products.add.title') }}</h3>
						</div>
					</div>
					<form method="POST" class="kt-form" action="{{ route('backend-management-product-add-form') }}" enctype="multipart/form-data">
						@csrf
						
						<div class="kt-portlet__body">
							<div class="kt-section kt-section--first">
								<div class="form-group">
									<label for="product_add_name">{{ __('backend/management.products.name') }}</label>
									<input type="text" class="form-control @if($errors->has('product_add_name')) is-invalid @endif" id="product_add_name" name="product_add_name" placeholder="{{ __('backend/management.products.name') }}" value="{{ old('product_add_name') }}" />

									@if($errors->has('product_add_name'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>{{ $errors->first('product_add_name') }}</strong>
										</span>
									@endif
								</div>

								<div class="form-group">
									<label for="product_img">Product Images</label>
									<input type="file" class="form-control" id="product_img" name="product_img[]" accept="image/*" multiple/>
									@if($errors->has('product_img'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>Please add product images</strong>
										</span>
									@endif
									<div class="product-imgs-preview d-flex">
										<input type="hidden" name="main_img_index" id="main_img_index" value="-1">
									</div>
								</div>
								
								<div class="form-group">
									<label for="product_add_short_description">{{ __('backend/management.products.short_description') }}</label>
									<input type="text" class="form-control @if($errors->has('product_add_short_description')) is-invalid @endif" id="product_add_short_description" name="product_add_short_description" placeholder="{{ __('backend/management.products.short_description') }}" value="{{ old('product_add_short_description') }}" />

									@if($errors->has('product_add_short_description'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>{{ $errors->first('product_add_short_description') }}</strong>
										</span>
									@endif
								</div>
								
								<div class="form-group">
									<label for="product_add_category_id">{{ __('backend/management.products.category') }}</label>
									<select name="product_add_category_id" id="product_add_category_id" class="form-control @if($errors->has('product_add_category_id')) is-invalid @endif">
										<option value="0">{{ __('backend/main.please_choose') }}</option>
										@foreach(App\Models\ProductCategory::all() as $productCategory)
										<option value="{{ $productCategory->id }}" @if(old('product_add_category_id') == $productCategory->id) selected @endif>{{ $productCategory->name }}</option>	
										@endforeach
									</select>

									@if($errors->has('product_add_category_id'))
										<span class="invalid-feedback" style="display:block;" role="alert">
											<strong>{{ $errors->first('product_add_category_id') }}</strong>
										</span>
									@endif
								</div>

								<div class="form-group">
									<label for="product_add_description">{{ __('backend/management.products.description') }}</label>
									<textarea class="text-editor form-control @if($errors->has('product_add_description')) is-invalid @endif" id="product_add_description" name="product_add_description" placeholder="{{ __('backend/management.products.description') }}">{{ old('product_add_description') }}</textarea>

									@if($errors->has('product_add_description'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>{{ $errors->first('product_add_description') }}</strong>
										</span>
									@endif
								</div>

								<!-- <div class="form-group">
									<label for="product_add_price_in_cent">{{ __('backend/management.products.price_in_cent') }}</label>
									<input type="text" class="form-control @if($errors->has('product_add_price_in_cent')) is-invalid @endif" id="product_add_price_in_cent" name="product_add_price_in_cent" placeholder="{{ __('backend/management.products.price_in_cent_example') }}" value="{{ old('product_add_price_in_cent') }}" />

									@if($errors->has('product_add_price_in_cent'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>{{ $errors->first('product_add_price_in_cent') }}</strong>
										</span>
									@endif
								</div>
								
								<div class="form-group">
									<label for="product_add_old_price_in_cent">{{ __('backend/management.products.old_price_in_cent') }}</label>
									<input type="text" class="form-control @if($errors->has('product_add_old_price_in_cent')) is-invalid @endif" id="product_add_old_price_in_cent" name="product_add_old_price_in_cent" placeholder="{{ __('backend/management.products.old_price_in_cent_example') }}" value="{{ old('product_add_old_price_in_cent') }}" />

									@if($errors->has('product_add_old_price_in_cent'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>{{ $errors->first('product_add_old_price_in_cent') }}</strong>
										</span>
									@endif
								</div>

								<div class="form-group">
									<label class="k-checkbox k-checkbox--all k-checkbox--solid">
										<input type="checkbox" name="product_add_drop_needed" checked value="1" data-content-visible="false" data-weight-visible="false" />
										<span></span>
										{{ __('backend/management.products.add.drop_needed') }}
									</label>
								</div> -->

								<div style="margin-bottom: 5px;">
									<b>{{ __('backend/management.products.add.options') }}</b>
								</div>
								
								<!-- <div class="form-group">
									<label class="k-radio k-radio--all k-radio--solid">
										<input type="radio" name="product_add_stock_management" value="normal" data-content-visible="false" data-weight-visible="false" />
										<span></span>
										{{ __('backend/management.products.add.normal_stock_management') }}
									</label>
								</div>
								
								<div class="form-group">
									<label class="k-radio k-radio--all k-radio--solid">
										<input type="radio" name="product_add_stock_management" value="weight" data-content-visible="true" data-weight-visible="true" />
										<span></span>
										{{ __('backend/management.products.add.as_weight') }}
									</label>
								</div>
								
								<div class="form-group">
									<label class="k-radio k-radio--all k-radio--solid">
										<input type="radio" name="product_add_stock_management" value="unlimited" data-content-visible="true" data-weight-visible="false" />
										<span></span>
										{{ __('backend/management.products.add.unlimited_available') }}
									</label>
								</div> -->

								<!-- added by Khamid -->
								<div class="form-group">
									<label class="k-radio k-radio--all k-radio--solid">
										<input type="radio" name="product_add_stock_management" checked value="variants"/>
										<span></span>
										{{ __('backend/management.products.add.variant') }}
									</label>
								</div>
								<div class="form-group">
									<label class="k-radio k-radio--all k-radio--solid">
										<input type="radio" name="product_add_stock_management" value="tiered"/>
										<span></span>
										{{ __('backend/management.products.add.tiered') }}
									</label>
								</div>
								<!-- / added by Khamid -->

								<!-- <div class="product_add_weight_div form-group" style="display: none;">
									<label for="product_add_weightchar">{{ __('backend/management.products.weightchar') }}</label>
									<input type="text" class="form-control @if($errors->has('product_add_weightchar')) is-invalid @endif" id="product_add_weightchar" name="product_add_weightchar" placeholder="{{ __('backend/management.products.weightchar') }}" value="{{ old('product_add_weightchar') }}" />

									@if($errors->has('product_add_weightchar'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>{{ $errors->first('product_add_weightchar') }}</strong>
										</span>
									@endif
								</div>

								<div class="product_add_weight_div form-group" style="display: none;">
									<label for="product_add_weight">{{ __('backend/management.products.weight') }}</label>
									<input type="number" class="form-control @if($errors->has('product_add_weight')) is-invalid @endif" id="product_add_weight" name="product_add_weight" placeholder="{{ __('backend/management.products.weight') }}" value="{{ old('product_add_weight') }}" />

									@if($errors->has('product_add_weight'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>{{ $errors->first('product_add_weight') }}</strong>
										</span>
									@endif
								
									<div class="form-group" style="margin-top:20px">
										<label for="product_add_interval">Interval (nur für Produkte mit Gewichtangabe)</label>
										<input type="number" class="form-control @if($errors->has('product_add_interval')) is-invalid @endif" id="product_add_interval" name="product_add_interval" placeholder="" value="{{ old('product_add_interval') ?? '1' }}" />

										@if($errors->has('product_add_interval'))
											<span class="invalid-feedback" style="display:block" role="alert">
												<strong>{{ $errors->first('product_add_interval') }}</strong>
											</span>
										@endif
									</div>
								</div>

								<div class="product_add_content_div form-group" style="display: none;">
									<label for="product_add_content">{{ __('backend/management.products.content') }}</label>
									<textarea class="text-editor form-control @if($errors->has('product_add_content')) is-invalid @endif" id="product_add_content" name="product_add_content" placeholder="{{ __('backend/management.products.content') }}">{{ old('product_add_content') }}</textarea>

									@if($errors->has('product_add_content'))
										<span class="invalid-feedback" style="display:block" role="alert">
											<strong>{{ $errors->first('product_add_content') }}</strong>
										</span>
									@endif
								</div> -->

								<!-- added by Khamid 2023-09-07 -->
								<div class="product_add_variant_div">
									<div class="row">
										<div class="col-9 variant-wrapper">
											<div class="variant-item row">
												<div class="col-5">
													<div class="form-group">
														<label for="">{{ __('backend/management.products.title') }}</label>
														<input type="text" class="form-control product-variant-title" name="product_add_variant_title[]"  />
													</div>
												</div>
												<div class="col-5">
													<div class="form-group">
														<label for="">{{ __('backend/management.products.price') }}</label>
														<input type="number" class="form-control product-variant-price" name="product_add_variant_price[]"  />
													</div>
												</div>
												<div class="col-2">
													<a class="delete-variant cursor-pointer"><i class="la la-trash"></i></a>
												</div>
											</div>
										</div>
										<div class="col-3">
											<button class="btn btn-wide btn-bold btn-primary" id="add_variant_btn" type="button" style="margin-top:22px">Add</button>
										</div>
									</div>
								</div>

								<div class="product_add_tiered_div" style="display: none;">
									<div class="row">
										<div class="col-9 tiered-wrapper">
											<div class="tiered-item row">
												<div class="col-5">
													<div class="form-group">
														<label for="">{{ __('backend/management.products.add.amount') }}</label>
														<input type="number" class="form-control product-tiered-amount" name="product_add_tiered_amount[]" />
													</div>
												</div>
												<div class="col-5">
													<div class="form-group">
														<label for="">{{ __('backend/management.products.add.price') }}</label>
														<input type="number" class="form-control product-tiered-price" name="product_add_tiered_price[]" />
													</div>
												</div>
												<div class="col-2">
													<a class="delete-tiered cursor-pointer"><i class="la la-trash"></i></a>
												</div>
											</div>
										</div>
										<div class="col-3">
											<button class="btn btn-wide btn-bold btn-primary" id="add_tiered_btn" type="button" style="margin-top:22px">Add</button>
										</div>
									</div>
								</div>
								<!-- / added by Khamid -->
							</div>
						</div>
						<div class="kt-portlet__foot">
							<div class="kt-form__actions">
								<button type="submit" class="btn btn-wide btn-bold btn-danger">{{ __('backend/management.products.add.submit_button') }}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('page_scripts')
<script type="text/javascript">
	$(function() {
		$('textarea.text-editor').froalaEditor({
			toolbarSticky: false,
			language: 'de',
      		theme: 'gray',
			toolbarButtons: ['undo', 'redo' , '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'align', '|', 'fontFamily', 'fontSize', 'color', '|', 'emoticons', '|', 'insertLink', 'insertImage', '|', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html']
		});

		$('input[data-content-visible]').change(function() {
			$('.product_add_variant_div').hide();
			if($(this).attr('data-content-visible') == 'true' && $(this).is(':checked')) {
				$('.product_add_content_div').show();
			} else {
				$('.product_add_content_div').hide();
			}
		});

		$('input[data-weight-visible]').change(function() {
			$('.product_add_variant_div').hide();
			if($(this).attr('data-weight-visible') == 'true' && $(this).is(':checked')) {
				$('.product_add_weight_div').show();
			} else {
				$('.product_add_weight_div').hide();
			}
		});

		// added by Khamid
		$('input[name="product_add_stock_management"]').change(function() {
			
			if($(this).val() == "variants"){
				$('.product_add_weight_div').hide();
				$('.product_add_content_div').hide();
				$('.product_add_tiered_div').hide();
				$('.product_add_variant_div').show();

				// set base product price as 0 and make it disabled
				$("#product_add_price_in_cent").val(0).attr("disabled", true);
				$("#product_add_old_price_in_cent").val(0).attr("disabled", true);
			} else if($(this).val() == "tiered") {
				$('.product_add_weight_div').hide();
				$('.product_add_content_div').hide();
				$('.product_add_variant_div').hide();
				$('.product_add_tiered_div').show();

				// set base product price as 0 and make it disabled
				$("#product_add_price_in_cent").val(0).attr("disabled", true);
				$("#product_add_old_price_in_cent").val(0).attr("disabled", true);
			} else {
				$("#product_add_price_in_cent").removeAttr("disabled");
				$("#product_add_old_price_in_cent").removeAttr("disabled");
			}
		})

		$("#add_variant_btn").on("click", function(){
			let html = $(".variant-item:first").clone(true).appendTo('.variant-wrapper');
			$(".variant-item:last").find("input").map(function(){
				$(this).val("");
			});
		})

		$("#add_tiered_btn").on("click", function(){
			let html = $(".tiered-item:first").clone(true).appendTo('.tiered-wrapper');
			$(".tiered-item:last").find("input").map(function(){
				$(this).val("");
			});
		})

		$(".delete-variant").on("click", function(){
			if($(".variant-item").length == 1){
				return;
			}
			$(this).parents(".variant-item").remove();
		})

		$(".delete-tiered").on("click", function(){
			if($(".tiered-item").length == 1){
				return;
			}
			$(this).parents(".tiered-item").remove();
		})

		// image display 
		$("#product_img").on('change', function () {
			if(this.files.length == 0) {
				removeAllPictures();
				return;
			}
			if(this.files.length > 3){
				alert("You can only upload 3 files");
				$(this).val(''); 
				return;
			}

			displayPicture(this);
		});

		var displayPicture = function(input) {
			$(".product-img").remove();
			if (input.files) {
				var filesAmount = input.files.length;

				for (i = 0; i < filesAmount; i++) {
					if(i > 2)
						break;
					var reader = new FileReader();

					reader.onload = function(event) {
						$($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'product-img').appendTo(".product-imgs-preview");
						
						product_img_click_listener();
						select_first_img();
					}

					reader.readAsDataURL(input.files[i]);
				}
			}
			
		};

		var removeAllPictures = function(input) {
			$(input).val('');
			$(".product-img").remove();
		}

		var product_img_click_listener = function(){
			$(".product-img").on("click", function(){
				$(".product-img").removeClass("selected");
				$(this).addClass("selected");
				$("#main_img_index").val($(this).index() - 1);
			})
		}

		function select_first_img() {
			$(".product-img:first").trigger("click");
		}
  	});
</script>
@endsection