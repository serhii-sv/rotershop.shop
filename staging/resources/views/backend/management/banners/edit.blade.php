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
                            <h3 class="kt-portlet__head-title">{{ __('backend/management.banners.edit.title') }}</h3>
                        </div>
                    </div>
                    <form method="post" class="kt-form" action="{{ route('backend-management-banner-edit-form') }}" enctype="multipart/form-data">
                        @csrf

                        @if ($lang != null)
                            <input type="hidden" name="translation_lng" value="{{ strtolower($lang) }}" />
                        @endif

                        <input type="hidden" value="{{ $banner->id }}" name="banner_edit_id" />

                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label
                                        for="banner_edit_title">{{ __('backend/management.banners.banner_title') }}</label>
                                    <input type="text"
                                        class="form-control @if ($errors->has('banner_edit_title')) is-invalid @endif"
                                        id="banner_edit_title" name="banner_edit_title"
                                        placeholder="{{ __('backend/management.banners.banner_title') }}"
                                        value="{{ \App\Classes\LangHelper::getValue($lang, 'banner', 'title', $banner->id) ?? $banner->title }}" />

                                    @if ($errors->has('banner_edit_title'))
                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            <strong>{{ $errors->first('banner_edit_title') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label
                                        for="banner_edit_content">{{ __('backend/management.banners.content') }}</label>
                                    <textarea class="text-editor form-control @if ($errors->has('banner_edit_content')) is-invalid @endif" id="banner_edit_content"
                                        name="banner_edit_content" placeholder="{{ __('backend/management.banners.content') }}">{{ \App\Classes\LangHelper::getValue($lang, 'banner', 'content', $banner->id) ?? (strlen($banner->content) > 0 ? decrypt($banner->content) : '') }}</textarea>

                                    @if ($errors->has('banner_edit_content'))
                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            <strong>{{ $errors->first('banner_edit_content') }}</strong>
                                        </span>
                                    @endif
                                </div>

								<div class="form-group">
									<label for="banner_img">{{ __('backend/management.banners.image') }}</label>
									<input type="file" class="form-control" id="banner_img" name="banner_img" accept="image/*" />
									<div class="banner-imgs-preview d-flex w-100 mt-3">
										<div class="banner-img-item w-100" data-img_id="{{ $banner->id }}">
											<img width="100%" src="{{ '/files/banner/' . $banner->img_path }}" style="max-height: 300px;" class="banner-img" data-img_path="{{ $banner->img_path }}">
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit"
                                    class="btn btn-wide btn-bold btn-danger">{{ __('backend/management.banners.edit.submit_button') }}</button>
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
			
			$("#banner_img").on('change', function () {
				removeAllNewAddedPictures();
				if(this.files.length + $('.banner-img').length > 3){
					alert("You can only upload 3 files");
					$(this).val(''); 
					return;
				}

				displayPicture(this);
			});

			var displayPicture = function(input) {
				$(".banner-img-item").remove();
				if (input.files) {
					var filesAmount = input.files.length;

					for (i = 0; i < filesAmount; i++) {
						if(i > 2)
							break;
						var reader = new FileReader();

						reader.onload = function(event) {
							$($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'banner-img-item').attr('width', '100%').css('max-height', '300px').appendTo(".banner-imgs-preview");
						}
						reader.readAsDataURL(input.files[i]);
					}
				}
				
			};

			var removeAllNewAddedPictures = function(input) {
				$(".banner-img").remove();
			}
        });
    </script>
@endsection
