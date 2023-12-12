@extends('backend.layouts.default')

@section('content')
    <div class="k-content__head	k-grid__item">
        <div class="k-content__head-main">
            <h3 class="k-content__head-title">{{ __('backend/management.banners.menu_title') }}</h3>
            <div class="k-content__head-breadcrumbs">
                <a href="#" class="k-content__head-breadcrumb-home"><i class="flaticon-home-2"></i></a>
                <span class="k-content__head-breadcrumb-separator"></span>
                <a href="javascript:;" class="k-content__head-breadcrumb-link">{{ __('backend/management.title') }}</a>
                <span class="k-content__head-breadcrumb-separator"></span>
                <a href="{{ route('backend-management-banners') }}"
                    class="k-content__head-breadcrumb-link">{{ __('backend/management.banners.menu_title') }}</a>
            </div>
        </div>
    </div>
    <div class="k-content__body	k-grid__item k-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">{{ __('backend/management.banners.add.title') }}</h3>
                        </div>
                    </div>
                    <form method="post" class="kt-form" action="{{ route('backend-management-banner-add-form') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label
                                        for="banner_add_title">{{ __('backend/management.banners.banner_title') }}</label>
                                    <input type="text"
                                        class="form-control @if ($errors->has('banner_add_title')) is-invalid @endif"
                                        id="banner_add_title" name="banner_add_title"
                                        placeholder="{{ __('backend/management.banners.banner_title') }}"
                                        value="{{ old('banner_add_title') }}" />

                                    @if ($errors->has('banner_add_title'))
                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            <strong>{{ $errors->first('banner_add_title') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label
                                        for="banner_add_content">{{ __('backend/management.banners.content') }}</label>
                                    <textarea class="text-editor form-control @if ($errors->has('banner_add_content')) is-invalid @endif" id="banner_add_content"
                                        name="banner_add_content" placeholder="{{ __('backend/management.banners.content') }}">{{ old('banner_add_content') }}</textarea>

                                    @if ($errors->has('banner_add_content'))
                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            <strong>{{ $errors->first('banner_add_content') }}</strong>
                                        </span>
                                    @endif
                                </div>

																<div class="form-group">
																	<label for="banner_img">{{ __('backend/management.banners.image') }}</label>
																	<input type="file" class="form-control" id="banner_img" name="banner_img" accept="image/*"/>
																	@if($errors->has('banner_img'))
																		<span class="invalid-feedback" style="display:block" role="alert">
																			<strong>Please add banner image</strong>
																		</span>
																	@endif
																	<div class="banner-imgs-preview d-flex w-100 mt-3">
																		<input type="hidden" name="main_img_index" id="main_img_index" value="-1">
																	</div>
																</div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit"
                                    class="btn btn-wide btn-bold btn-danger">{{ __('backend/management.banners.add.submit_button') }}</button>
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
                toolbarButtons: ['undo', 'redo', '|', 'bold', 'italic', 'underline', 'strikeThrough',
                    'subscript', 'superscript', '|', 'align', '|', 'fontFamily', 'fontSize', 'color',
                    '|', 'emoticons', '|', 'insertLink', 'insertImage', '|', 'outdent', 'indent',
                    'clearFormatting', 'insertTable', 'html'
                ]
            });
						// image display 
						$("#banner_img").on('change', function () {
							removeAllPictures();
							if(this.files.length > 3){
								alert("You can only upload 3 files");
								$(this).val(''); 
								return;
							}

							displayPicture(this);
						});

						var displayPicture = function(input) {
							$(".banner-img").remove();
							if (input.files) {
								var filesAmount = input.files.length;
								for (i = 0; i < filesAmount; i++) {
									if(i > 2)
										break;
									var reader = new FileReader();
									reader.onload = function(event) {
										$($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'banner-img').attr('width', '100%').css('max-height', '300px').appendTo(".banner-imgs-preview");
									}
									reader.readAsDataURL(input.files[i]);
								}
							}
						};

						var removeAllPictures = function(input) {
							$(".banner-img").remove();
						}
        });
    </script>
@endsection
