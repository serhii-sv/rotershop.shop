@extends('backend.layouts.default')
@section('title',__('backend/management.banners.menu_title'))
@section('content')
<div class="container-fluid">
    <div class="row mt-4 g-md-3 g-3">
        <div class="col d-flex d-md-none">
            <h1 class="title-header">{{ __('backend/management.banners.menu_title') }}</h1>
        </div>
        <!-- transaction -->
        <div class="col-lg-12 bg-secondary rounded-2 p-3">
            <p class="title-table-box">{{ __('backend/management.banners.menu_title') }}</p>
            <div class="line-row"></div>
            <form method="post" class="kt-form" action="{{ route('backend-management-banner-edit-form') }}" enctype="multipart/form-data">
                @csrf
                <div class="g-3 row">
                
                    @if ($lang != null)
                    <input type="hidden" name="translation_lng" value="{{ strtolower($lang) }}" />
                    @endif
                    <input type="hidden" value="{{ $banner->id }}" name="banner_edit_id" />
                    <div class="col-12 col-md-12">
                        <div>
                            <label for="address">{{ __('backend/management.banners.banner_title') }}</label>
                            <input type="text" class="form-control input-form-ticker @if ($errors->has('banner_edit_title')) is-invalid @endif" id="banner_edit_title" name="banner_edit_title" placeholder="{{ __('backend/management.banners.banner_title') }}" value="{{ \App\Classes\LangHelper::getValue($lang, 'banner', 'title', $banner->id) ?? $banner->title }}" />
                            @if ($errors->has('banner_edit_title'))
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong>{{ $errors->first('banner_edit_title') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div>
                            <label for="address">{{ __('backend/management.banners.content') }}</label>
                            <textarea
                                    class="text-editor form-control @if ($errors->has('banner_edit_content')) is-invalid @endif"
                                    id="banner_edit_content" name="banner_edit_content"
                                    placeholder="{{ __('backend/management.banners.content') }}">{{ \App\Classes\LangHelper::getValue($lang, 'banner', 'content', $banner->id) ?? (strlen($banner->content) > 0 ? decrypt($banner->content) : '') }}</textarea>

                            @if ($errors->has('banner_edit_content'))
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong>{{ $errors->first('banner_edit_content') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div>
                            <label for="address">{{ __('backend/management.banners.link') }}</label>
                            <textarea
                                    class="text-editor form-control @if ($errors->has('banner_edit_link')) is-invalid @endif"
                                    id="banner_edit_link" name="banner_edit_link"
                                    placeholder="{{ __('backend/management.banners.link') }}">{{ $banner->link }}</textarea>

                            @if ($errors->has('banner_edit_link'))
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong>{{ $errors->first('banner_edit_link') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <label for="address">{{ __('backend/management.banners.image') }}</label>
                            <div class="position-relative">
                                <!-- btn choose file in mobile -->
                                <div id="btn-choose-banner-mobile"
                                    class="btn-choose-file-avt d-block d-md-none btn-choose-file-avt-mobile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none">
                                        <g clip-path="url(#clip0_29_2900)">
                                            <path
                                                d="M19.9603 3.17596C19.8439 2.32837 19.4833 1.61063 18.889 1.04238C18.1614 0.346789 17.259 0 16.3586 0C15.4255 0 14.4939 0.371955 13.7598 1.11335C11.6777 3.21623 9.56976 5.3634 7.53117 7.44061L7.17556 7.8025C6.26919 8.72609 5.76747 9.83139 5.68426 11.0877C5.63325 11.8563 5.64761 12.6414 5.66148 13.4009C5.66346 13.5097 5.66544 13.6189 5.66743 13.7276C5.67535 14.2148 6.04681 14.5702 6.55101 14.5732C7.05224 14.5762 7.56238 14.5752 8.05518 14.5742C8.3048 14.5737 8.55492 14.5727 8.80355 14.5732C9.09478 14.5732 9.39492 14.5405 9.72032 14.4735C10.7163 14.2687 11.5979 13.782 12.3404 13.0275C13.5697 11.7787 14.7989 10.5295 16.0277 9.28025C16.9836 8.30834 17.9395 7.33692 18.8954 6.36551C19.4452 5.80733 19.7978 5.13791 19.9444 4.37638C19.9479 4.35826 19.9484 4.33461 19.9489 4.30944C19.9504 4.24753 19.9524 4.1665 19.9999 4.0905V3.33048C19.9717 3.28166 19.9667 3.23183 19.9628 3.19609C19.9618 3.18955 19.9613 3.1825 19.9603 3.17596ZM15.3289 7.51661C14.2749 8.58265 13.2056 9.66932 12.1715 10.7203L11.1195 11.7888C10.4449 12.4738 9.62374 12.8211 8.67825 12.8211C8.66983 12.8211 8.6619 12.8211 8.65348 12.8211C8.57275 12.8206 8.49202 12.8206 8.41129 12.8211H8.29837H8.2424C8.03735 12.8211 7.83181 12.8206 7.62676 12.8211H7.62131C7.57228 12.8216 7.4965 12.8216 7.43905 12.7617C7.40141 12.7225 7.38308 12.6696 7.38457 12.6037C7.38853 12.43 7.38655 12.2514 7.38457 12.0792C7.37863 11.6202 7.37318 11.1461 7.48214 10.6775C7.62528 10.0619 7.93433 9.50926 8.40138 9.03563L8.55294 8.88162C9.88723 7.52668 11.2666 6.12593 12.6202 4.74431C12.6747 4.68895 12.742 4.63207 12.8317 4.63207C12.8317 4.63207 12.8317 4.63207 12.8322 4.63207C12.9218 4.63207 12.9892 4.68895 13.0427 4.74431C13.8728 5.59694 14.6221 6.35847 15.3343 7.07218C15.3868 7.12502 15.4478 7.19801 15.4478 7.29213C15.4473 7.38373 15.3903 7.4542 15.3289 7.51661ZM18.2734 3.6974C18.2724 4.22639 18.0792 4.69851 17.6998 5.09966C17.5701 5.23656 17.4358 5.37246 17.3056 5.50383C17.1877 5.62311 17.0659 5.74592 16.9485 5.86873C16.9059 5.91303 16.8469 5.96437 16.7662 5.96487C16.7657 5.96487 16.7652 5.96487 16.7652 5.96487C16.6835 5.96487 16.6226 5.91202 16.5839 5.87276C15.9034 5.17667 15.1759 4.43729 14.2259 3.47544C14.1927 3.44222 14.1318 3.37981 14.1328 3.28971C14.1338 3.19962 14.1977 3.13872 14.219 3.11858C14.3334 3.00886 14.4458 2.89108 14.5548 2.77733C14.741 2.58305 14.9332 2.38172 15.1476 2.20606C15.743 1.71935 16.426 1.6217 17.1228 1.9242C17.8301 2.23123 18.2709 2.91021 18.2734 3.6964V3.6974Z"
                                                fill="#363636" />
                                            <path
                                                d="M16.479 14.0392C16.479 13.8741 16.4508 13.7321 16.3923 13.6058C16.2259 13.2459 15.8218 13.0355 15.4518 13.1171C15.0382 13.2082 14.7584 13.5489 14.7559 13.9647C14.751 14.6663 14.752 15.38 14.753 16.0701C14.7535 16.359 14.7535 16.6479 14.7535 16.9373C14.7535 17.8045 14.3196 18.2439 13.4642 18.2439H3.00586H2.96128C2.91571 18.2444 2.86866 18.2449 2.82012 18.2419C2.17774 18.2016 1.72902 17.7371 1.72852 17.1124C1.72605 12.8724 1.72555 8.50563 1.72852 4.13377C1.72902 3.49103 2.19607 3.01489 2.83944 3.0018C2.97713 2.99878 3.1168 2.99979 3.25151 3.00029C3.31243 3.0008 3.37385 3.0008 3.43526 3.0008H4.7443C5.98845 3.0008 7.2326 3.00029 8.47674 3.00231C8.47724 3.00231 8.47823 3.00231 8.47873 3.00231C8.78679 3.00231 9.01908 2.90265 9.18896 2.6978C9.42769 2.4099 9.47276 2.09532 9.32269 1.76313C9.16816 1.42188 8.89229 1.24873 8.50151 1.24823C7.37474 1.24722 6.24797 1.24722 5.12121 1.24722C4.35005 1.24722 3.5789 1.24722 2.80824 1.24722C2.80774 1.24722 2.80725 1.24722 2.80675 1.24722C2.62498 1.24722 2.44371 1.26736 2.2664 1.30712C0.913287 1.60961 0.00345297 2.7582 0.00196713 4.16448C0.00048128 5.67646 0.000976562 7.18793 0.00147184 8.69991L0.00196713 12.0621C0.00196713 13.7221 0.00196713 15.3825 0.000976562 17.0425C0.000976562 17.2423 0.00791052 17.4778 0.061401 17.7109C0.380858 19.0975 1.49277 19.9945 2.89491 19.9965C4.90922 19.999 6.95771 19.9985 8.93835 19.998C9.74417 19.998 10.55 19.9975 11.3558 19.9975C11.5901 19.9975 11.8244 19.998 12.0581 19.999C12.5727 20.0005 13.1047 20.002 13.6277 19.996C15.2428 19.9773 16.4676 18.7291 16.477 17.0928C16.4805 16.4536 16.48 15.8033 16.479 15.1746C16.4785 14.7956 16.4785 14.4176 16.479 14.0392Z"
                                                fill="#363636" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_29_2900">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="box-banner">
                                    <!-- review img banner -->
                                    <img id="box-show-img-banner" class="show-img-banner"
                                        src="@if($banner->img_path){{ '/files/banner/' . $banner->img_path }} @else {{ asset_dir('admin/img/default-banner.png')}} @endif" />
                                    <div id="btn-choose-banner-default" class="box-banner_choose d-none d-md-flex">
                                        <p class="box-banner_title">Add a banner</p>
                                        <p class="box-banner_desc">
                                            Add a banner to your shop
                                        </p>
                                        <button type="button" id="btn-choose-file-banner" class="btn-go-to-shop">
                                            Upload Banner
                                        </button>
                                        <input type="file" id="choose-file-banner" name="banner_img" onchange="readURLBanner(this);"
                                            class="d-none" accept="image/*"/>
                                    </div>
                                    @if($banner->img_path)
                                    <!-- show when choosed file img -->
                                    <div id="btn-next-choose-file-banner"
                                        class="btn-choose-file-avt d-none btn-choose-file-avt-pc d-md-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none">
                                            <g clip-path="url(#clip0_29_2900)">
                                                <path
                                                    d="M19.9603 3.17596C19.8439 2.32837 19.4833 1.61063 18.889 1.04238C18.1614 0.346789 17.259 0 16.3586 0C15.4255 0 14.4939 0.371955 13.7598 1.11335C11.6777 3.21623 9.56976 5.3634 7.53117 7.44061L7.17556 7.8025C6.26919 8.72609 5.76747 9.83139 5.68426 11.0877C5.63325 11.8563 5.64761 12.6414 5.66148 13.4009C5.66346 13.5097 5.66544 13.6189 5.66743 13.7276C5.67535 14.2148 6.04681 14.5702 6.55101 14.5732C7.05224 14.5762 7.56238 14.5752 8.05518 14.5742C8.3048 14.5737 8.55492 14.5727 8.80355 14.5732C9.09478 14.5732 9.39492 14.5405 9.72032 14.4735C10.7163 14.2687 11.5979 13.782 12.3404 13.0275C13.5697 11.7787 14.7989 10.5295 16.0277 9.28025C16.9836 8.30834 17.9395 7.33692 18.8954 6.36551C19.4452 5.80733 19.7978 5.13791 19.9444 4.37638C19.9479 4.35826 19.9484 4.33461 19.9489 4.30944C19.9504 4.24753 19.9524 4.1665 19.9999 4.0905V3.33048C19.9717 3.28166 19.9667 3.23183 19.9628 3.19609C19.9618 3.18955 19.9613 3.1825 19.9603 3.17596ZM15.3289 7.51661C14.2749 8.58265 13.2056 9.66932 12.1715 10.7203L11.1195 11.7888C10.4449 12.4738 9.62374 12.8211 8.67825 12.8211C8.66983 12.8211 8.6619 12.8211 8.65348 12.8211C8.57275 12.8206 8.49202 12.8206 8.41129 12.8211H8.29837H8.2424C8.03735 12.8211 7.83181 12.8206 7.62676 12.8211H7.62131C7.57228 12.8216 7.4965 12.8216 7.43905 12.7617C7.40141 12.7225 7.38308 12.6696 7.38457 12.6037C7.38853 12.43 7.38655 12.2514 7.38457 12.0792C7.37863 11.6202 7.37318 11.1461 7.48214 10.6775C7.62528 10.0619 7.93433 9.50926 8.40138 9.03563L8.55294 8.88162C9.88723 7.52668 11.2666 6.12593 12.6202 4.74431C12.6747 4.68895 12.742 4.63207 12.8317 4.63207C12.8317 4.63207 12.8317 4.63207 12.8322 4.63207C12.9218 4.63207 12.9892 4.68895 13.0427 4.74431C13.8728 5.59694 14.6221 6.35847 15.3343 7.07218C15.3868 7.12502 15.4478 7.19801 15.4478 7.29213C15.4473 7.38373 15.3903 7.4542 15.3289 7.51661ZM18.2734 3.6974C18.2724 4.22639 18.0792 4.69851 17.6998 5.09966C17.5701 5.23656 17.4358 5.37246 17.3056 5.50383C17.1877 5.62311 17.0659 5.74592 16.9485 5.86873C16.9059 5.91303 16.8469 5.96437 16.7662 5.96487C16.7657 5.96487 16.7652 5.96487 16.7652 5.96487C16.6835 5.96487 16.6226 5.91202 16.5839 5.87276C15.9034 5.17667 15.1759 4.43729 14.2259 3.47544C14.1927 3.44222 14.1318 3.37981 14.1328 3.28971C14.1338 3.19962 14.1977 3.13872 14.219 3.11858C14.3334 3.00886 14.4458 2.89108 14.5548 2.77733C14.741 2.58305 14.9332 2.38172 15.1476 2.20606C15.743 1.71935 16.426 1.6217 17.1228 1.9242C17.8301 2.23123 18.2709 2.91021 18.2734 3.6964V3.6974Z"
                                                    fill="#363636" />
                                                <path
                                                    d="M16.479 14.0392C16.479 13.8741 16.4508 13.7321 16.3923 13.6058C16.2259 13.2459 15.8218 13.0355 15.4518 13.1171C15.0382 13.2082 14.7584 13.5489 14.7559 13.9647C14.751 14.6663 14.752 15.38 14.753 16.0701C14.7535 16.359 14.7535 16.6479 14.7535 16.9373C14.7535 17.8045 14.3196 18.2439 13.4642 18.2439H3.00586H2.96128C2.91571 18.2444 2.86866 18.2449 2.82012 18.2419C2.17774 18.2016 1.72902 17.7371 1.72852 17.1124C1.72605 12.8724 1.72555 8.50563 1.72852 4.13377C1.72902 3.49103 2.19607 3.01489 2.83944 3.0018C2.97713 2.99878 3.1168 2.99979 3.25151 3.00029C3.31243 3.0008 3.37385 3.0008 3.43526 3.0008H4.7443C5.98845 3.0008 7.2326 3.00029 8.47674 3.00231C8.47724 3.00231 8.47823 3.00231 8.47873 3.00231C8.78679 3.00231 9.01908 2.90265 9.18896 2.6978C9.42769 2.4099 9.47276 2.09532 9.32269 1.76313C9.16816 1.42188 8.89229 1.24873 8.50151 1.24823C7.37474 1.24722 6.24797 1.24722 5.12121 1.24722C4.35005 1.24722 3.5789 1.24722 2.80824 1.24722C2.80774 1.24722 2.80725 1.24722 2.80675 1.24722C2.62498 1.24722 2.44371 1.26736 2.2664 1.30712C0.913287 1.60961 0.00345297 2.7582 0.00196713 4.16448C0.00048128 5.67646 0.000976562 7.18793 0.00147184 8.69991L0.00196713 12.0621C0.00196713 13.7221 0.00196713 15.3825 0.000976562 17.0425C0.000976562 17.2423 0.00791052 17.4778 0.061401 17.7109C0.380858 19.0975 1.49277 19.9945 2.89491 19.9965C4.90922 19.999 6.95771 19.9985 8.93835 19.998C9.74417 19.998 10.55 19.9975 11.3558 19.9975C11.5901 19.9975 11.8244 19.998 12.0581 19.999C12.5727 20.0005 13.1047 20.002 13.6277 19.996C15.2428 19.9773 16.4676 18.7291 16.477 17.0928C16.4805 16.4536 16.48 15.8033 16.479 15.1746C16.4785 14.7956 16.4785 14.4176 16.479 14.0392Z"
                                                    fill="#363636" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_29_2900">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    @endif
                                </div>
                                <!-- choose-avt -->
                               {{--  <div class="box-choose-avt">
                                    <div id="btn-choose-file-avt" class="btn-choose-file-avt">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none">
                                            <g clip-path="url(#clip0_29_2900)">
                                                <path
                                                    d="M19.9603 3.17596C19.8439 2.32837 19.4833 1.61063 18.889 1.04238C18.1614 0.346789 17.259 0 16.3586 0C15.4255 0 14.4939 0.371955 13.7598 1.11335C11.6777 3.21623 9.56976 5.3634 7.53117 7.44061L7.17556 7.8025C6.26919 8.72609 5.76747 9.83139 5.68426 11.0877C5.63325 11.8563 5.64761 12.6414 5.66148 13.4009C5.66346 13.5097 5.66544 13.6189 5.66743 13.7276C5.67535 14.2148 6.04681 14.5702 6.55101 14.5732C7.05224 14.5762 7.56238 14.5752 8.05518 14.5742C8.3048 14.5737 8.55492 14.5727 8.80355 14.5732C9.09478 14.5732 9.39492 14.5405 9.72032 14.4735C10.7163 14.2687 11.5979 13.782 12.3404 13.0275C13.5697 11.7787 14.7989 10.5295 16.0277 9.28025C16.9836 8.30834 17.9395 7.33692 18.8954 6.36551C19.4452 5.80733 19.7978 5.13791 19.9444 4.37638C19.9479 4.35826 19.9484 4.33461 19.9489 4.30944C19.9504 4.24753 19.9524 4.1665 19.9999 4.0905V3.33048C19.9717 3.28166 19.9667 3.23183 19.9628 3.19609C19.9618 3.18955 19.9613 3.1825 19.9603 3.17596ZM15.3289 7.51661C14.2749 8.58265 13.2056 9.66932 12.1715 10.7203L11.1195 11.7888C10.4449 12.4738 9.62374 12.8211 8.67825 12.8211C8.66983 12.8211 8.6619 12.8211 8.65348 12.8211C8.57275 12.8206 8.49202 12.8206 8.41129 12.8211H8.29837H8.2424C8.03735 12.8211 7.83181 12.8206 7.62676 12.8211H7.62131C7.57228 12.8216 7.4965 12.8216 7.43905 12.7617C7.40141 12.7225 7.38308 12.6696 7.38457 12.6037C7.38853 12.43 7.38655 12.2514 7.38457 12.0792C7.37863 11.6202 7.37318 11.1461 7.48214 10.6775C7.62528 10.0619 7.93433 9.50926 8.40138 9.03563L8.55294 8.88162C9.88723 7.52668 11.2666 6.12593 12.6202 4.74431C12.6747 4.68895 12.742 4.63207 12.8317 4.63207C12.8317 4.63207 12.8317 4.63207 12.8322 4.63207C12.9218 4.63207 12.9892 4.68895 13.0427 4.74431C13.8728 5.59694 14.6221 6.35847 15.3343 7.07218C15.3868 7.12502 15.4478 7.19801 15.4478 7.29213C15.4473 7.38373 15.3903 7.4542 15.3289 7.51661ZM18.2734 3.6974C18.2724 4.22639 18.0792 4.69851 17.6998 5.09966C17.5701 5.23656 17.4358 5.37246 17.3056 5.50383C17.1877 5.62311 17.0659 5.74592 16.9485 5.86873C16.9059 5.91303 16.8469 5.96437 16.7662 5.96487C16.7657 5.96487 16.7652 5.96487 16.7652 5.96487C16.6835 5.96487 16.6226 5.91202 16.5839 5.87276C15.9034 5.17667 15.1759 4.43729 14.2259 3.47544C14.1927 3.44222 14.1318 3.37981 14.1328 3.28971C14.1338 3.19962 14.1977 3.13872 14.219 3.11858C14.3334 3.00886 14.4458 2.89108 14.5548 2.77733C14.741 2.58305 14.9332 2.38172 15.1476 2.20606C15.743 1.71935 16.426 1.6217 17.1228 1.9242C17.8301 2.23123 18.2709 2.91021 18.2734 3.6964V3.6974Z"
                                                    fill="#363636" />
                                                <path
                                                    d="M16.479 14.0392C16.479 13.8741 16.4508 13.7321 16.3923 13.6058C16.2259 13.2459 15.8218 13.0355 15.4518 13.1171C15.0382 13.2082 14.7584 13.5489 14.7559 13.9647C14.751 14.6663 14.752 15.38 14.753 16.0701C14.7535 16.359 14.7535 16.6479 14.7535 16.9373C14.7535 17.8045 14.3196 18.2439 13.4642 18.2439H3.00586H2.96128C2.91571 18.2444 2.86866 18.2449 2.82012 18.2419C2.17774 18.2016 1.72902 17.7371 1.72852 17.1124C1.72605 12.8724 1.72555 8.50563 1.72852 4.13377C1.72902 3.49103 2.19607 3.01489 2.83944 3.0018C2.97713 2.99878 3.1168 2.99979 3.25151 3.00029C3.31243 3.0008 3.37385 3.0008 3.43526 3.0008H4.7443C5.98845 3.0008 7.2326 3.00029 8.47674 3.00231C8.47724 3.00231 8.47823 3.00231 8.47873 3.00231C8.78679 3.00231 9.01908 2.90265 9.18896 2.6978C9.42769 2.4099 9.47276 2.09532 9.32269 1.76313C9.16816 1.42188 8.89229 1.24873 8.50151 1.24823C7.37474 1.24722 6.24797 1.24722 5.12121 1.24722C4.35005 1.24722 3.5789 1.24722 2.80824 1.24722C2.80774 1.24722 2.80725 1.24722 2.80675 1.24722C2.62498 1.24722 2.44371 1.26736 2.2664 1.30712C0.913287 1.60961 0.00345297 2.7582 0.00196713 4.16448C0.00048128 5.67646 0.000976562 7.18793 0.00147184 8.69991L0.00196713 12.0621C0.00196713 13.7221 0.00196713 15.3825 0.000976562 17.0425C0.000976562 17.2423 0.00791052 17.4778 0.061401 17.7109C0.380858 19.0975 1.49277 19.9945 2.89491 19.9965C4.90922 19.999 6.95771 19.9985 8.93835 19.998C9.74417 19.998 10.55 19.9975 11.3558 19.9975C11.5901 19.9975 11.8244 19.998 12.0581 19.999C12.5727 20.0005 13.1047 20.002 13.6277 19.996C15.2428 19.9773 16.4676 18.7291 16.477 17.0928C16.4805 16.4536 16.48 15.8033 16.479 15.1746C16.4785 14.7956 16.4785 14.4176 16.479 14.0392Z"
                                                    fill="#363636" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_29_2900">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
    
                                    <input type="file" id="choose-file-avt" onchange="readURLAvt(this);" class="d-none" />
                                    <div class="avt-ticker">
                                        <img id="review-avt" src="./assets/img/ic-shop.png" alt="" />
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn-go-to-shop">{{
                            __('backend/management.banners.edit.submit_button') }}</button>
                    </div>
                </div>
            </form>
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


<script>
    // Add a click event listener to the custom button choose banner
    document
      .getElementById("btn-choose-file-banner")
      .addEventListener("click", function () {
        // Trigger a click event on the hidden file input
        document.getElementById("choose-file-banner").click();
      });

    // Add a click event listener to the custom button choose banner
    document
      .getElementById("btn-next-choose-file-banner")
      .addEventListener("click", function () {
        // Trigger a click event on the hidden file input
        document.getElementById("choose-file-banner").click();
      });

    // Add a click event listener to the custom button choose avt
    /* document
      .getElementById("btn-choose-file-avt")
      .addEventListener("click", function () {
        // Trigger a click event on the hidden file input
        document.getElementById("choose-file-avt").click();
      }); */
    // Add a click event listener to the custom button choose avt mobile
    document
      .getElementById("btn-choose-banner-mobile")
      .addEventListener("click", function () {
        // Trigger a click event on the hidden file input
        document.getElementById("choose-file-banner").click();
      });
    // readUrlBanner
    function readURLBanner(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $("#box-show-img-banner").attr("src", e.target.result);
          $("#btn-choose-banner-default").addClass("d-md-none");
          $("#btn-next-choose-file-banner").addClass("d-md-block");
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

    // btn-choose-banner-default

    // readUrlBanner
    function readURLAvt(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#review-avt").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>


  <script>
    var selectElement = document.getElementById("mySelect");

    // Kiểm tra nếu là thiết bị di động dựa trên chiều rộng của cửa sổ
    function isMobileDevice() {
      return window.innerWidth < 768; // 768px là ngưỡng bạn có thể điều chỉnh
    }

    // Lắng nghe sự kiện mousedown để chặn mở rộng danh sách tùy chọn
    selectElement.addEventListener("mousedown", function (event) {
      if (isMobileDevice()) {
        event.preventDefault(); // Chặn mở rộng danh sách trên thiết bị di động
      }
    });
    if (isMobileDevice()) {
      var divContainer = document.getElementById("canvas-select");

      // Lấy tất cả các thẻ option trong select
      var options = selectElement.querySelectorAll("option");
      var selectedOption = selectElement.querySelector("option:checked");
      // Tạo các thẻ div tương ứng và thêm vào div có id "abc"
      options.forEach(function (option) {
        var divElement = document.createElement("div");
        divElement.textContent = option.textContent;
        divElement.setAttribute("data-bs-dismiss", "offcanvas");
        divElement.classList.add("canvass-select-item");

        if (option === selectedOption) {
          divElement.classList.add("canvass-select-item-active");
        }

        // Thêm sự kiện click cho thẻ div
        divElement.addEventListener("click", function () {
          // Set giá trị của select thành giá trị của option tương ứng
          selectElement.value = option.value;

          // Xóa class "canvass-select-item-active" khỏi tất cả các thẻ div
          divContainer.querySelectorAll(".canvass-select-item").forEach(function (div) {
            div.classList.remove("canvass-select-item-active");
          });

          // Thêm class "canvass-select-item-active" cho thẻ div được chọn
          divElement.classList.add("canvass-select-item-active");
        });

        divContainer.appendChild(divElement);

      });
    } else {
      var divContainer = document.getElementById("mySelect");
      divContainer.removeAttribute("data-bs-toggle");
      divContainer.removeAttribute("data-bs-target");
      divContainer.removeAttribute("aria-controls");
    }
  </script>
@endsection