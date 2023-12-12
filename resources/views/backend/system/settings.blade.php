@extends('backend.layouts.default')
@section('title',__('backend/system.settings.title'))
@section('content')
<div class="container-fluid">
    <div class="row mt-4 g-md-3 g-3">
        <div class="col d-flex d-md-none">
            <h1 class="title-header">{{ __('backend/system.settings.title') }}</h1>
        </div>
        <!-- transaction -->
        <div class="col-lg-12 bg-secondary rounded-2 p-3">
            <p class="title-table-box">{{ __('backend/system.settings.title') }}</p>
            <div class="line-row"></div>
            <form method="post" class="kt-form" action="{{ route('backend-system-settings-form') }}" enctype="multipart/form-data">
                @csrf
                <div class="g-3 row">
                    <div class="col-12 col-md-12">
                        <div>
                            <label for="address">{{ __('backend/system.settings.app_name') }}</label>
                            <input type="text" class="form-control @if($errors->has('settings_app_name')) is-invalid @endif" id="settings_app_name" name="settings_app_name" placeholder="{{ __('backend/system.settings.app_name') }}" value="{{ App\Models\Setting::get('app.name') }}" />
							@if($errors->has('settings_app_name'))
							<span class="invalid-feedback" style="display:block" role="alert">
								<strong>{{ $errors->first('settings_app_name') }}</strong>
							</span>
							@endif
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

@endsection