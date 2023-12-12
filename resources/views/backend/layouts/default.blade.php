<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <title>{{ config('backend.name') }}</title>
	<link href="{{ asset_dir('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{ asset_dir('admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
	<link href="{{ asset_dir('admin/css/sidebar.css')}}" rel="stylesheet" />
	<link href="{{ asset_dir('admin/css/appearance.css')}}" rel="stylesheet" />
	<link href="{{ asset_dir('admin/css/global.css')}}" rel="stylesheet" />
	<link href="{{ asset_dir('admin/css/dasbroard.css')}}" rel="stylesheet" />
	<link href="{{ asset_dir('admin/css/product.css')}}" rel="stylesheet" />
	<link href="{{ asset_dir('admin/css/header.css')}}" rel="stylesheet" />
	<link href="{{ asset_dir('admin/css/canvasedit.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset_dir('admin/img/favicon.ico') }}" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.0/dist/apexcharts.min.css" />
</head>

<body>
	<section class="container-fluid main-box">
		<div class="">
			<!-- sidebar -->
			<div class="app-sidebar-wrapper d-none d-md-block">
				<div id="sidebar" class="sidebar">
					<div class="sidebar-container">
						<div class="sidebar-logo-container">
                            <a href="{{ route('backend-dashboard') }}">
                                <img src="{{ asset_dir('admin/img/logo-7.png') }}" >
                            </a>
							{{-- <svg width="39.8" height="39" viewBox="0 0 39.8 39" fill="none" style="margin-right: 17px"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M21.8702 24.0219L14.7072 22.8281L16.0855 14.5582L23.2486 15.752L21.8702 24.0219ZM14.081 31.9314C10.3546 31.6353 7.36925 30.6953 5.223 29.5363C0.0780395 26.7579 -3.35193 19.2464 5.223 15.8166C5.83377 15.5723 6.38833 15.3518 6.89119 15.1538C7.07835 10.9246 8.08429 7.57143 9.35249 5.223C12.1309 0.0780395 19.6424 -3.35193 23.0722 5.223C23.312 5.82265 23.529 6.36812 23.7241 6.86368C28.3937 6.93447 32.0667 7.99273 34.5847 9.35251C39.7297 12.1309 43.1596 19.6424 34.5847 23.0722C33.0419 23.6893 31.8577 24.1547 30.9595 24.4884C30.7038 28.4159 29.7366 31.5487 28.5333 33.777C25.7549 38.922 18.2434 42.3519 14.8136 33.777C14.5402 33.0935 14.2966 32.4804 14.081 31.9314Z"
									fill="white" />
								<circle cx="19.2197" cy="20.2197" r="7.5" fill="white" />
							</svg>
							<svg width="111" height="34" viewBox="0 0 111 34" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M12.2508 9.45597L9.5562 9.93324C9.44351 9.58854 9.26453 9.26042 9.01927 8.94886C8.78063 8.63731 8.45582 8.3821 8.04483 8.18324C7.63385 7.98437 7.12012 7.88494 6.50364 7.88494C5.66178 7.88494 4.95913 8.07386 4.39569 8.4517C3.83224 8.82292 3.55051 9.3035 3.55051 9.89347C3.55051 10.4039 3.73944 10.8149 4.11728 11.1264C4.49512 11.438 5.10497 11.6932 5.94682 11.892L8.37296 12.4489C9.77826 12.7737 10.8256 13.2741 11.515 13.9503C12.2044 14.6264 12.5491 15.5047 12.5491 16.5852C12.5491 17.5 12.2839 18.3153 11.7536 19.0312C11.23 19.7405 10.4975 20.2973 9.5562 20.7017C8.62154 21.1061 7.53773 21.3082 6.30478 21.3082C4.59455 21.3082 3.19919 20.9437 2.1187 20.2145C1.0382 19.4787 0.375326 18.4347 0.13006 17.0824L3.00364 16.6449C3.18262 17.3939 3.55052 17.9607 4.10733 18.3452C4.66415 18.723 5.39 18.9119 6.28489 18.9119C7.25932 18.9119 8.0382 18.7098 8.62154 18.3054C9.20487 17.8944 9.49654 17.3939 9.49654 16.804C9.49654 16.3267 9.31756 15.9257 8.95961 15.6009C8.60828 15.276 8.06803 15.0308 7.33887 14.8651L4.75364 14.2983C3.32845 13.9735 2.27447 13.4564 1.59171 12.7472C0.915572 12.0379 0.577504 11.1397 0.577504 10.0526C0.577504 9.15104 0.829398 8.36222 1.33319 7.68608C1.83697 7.00994 2.533 6.48295 3.42125 6.10511C4.30951 5.72064 5.32703 5.52841 6.47381 5.52841C8.12438 5.52841 9.42362 5.88636 10.3715 6.60227C11.3195 7.31155 11.9459 8.26278 12.2508 9.45597ZM21.3825 21.3381C20.4147 21.3381 19.5397 21.1591 18.7575 20.8011C17.9753 20.4366 17.3555 19.9096 16.8981 19.2202C16.4474 18.5308 16.222 17.6856 16.222 16.6847C16.222 15.8229 16.3877 15.1136 16.7192 14.5568C17.0506 14 17.498 13.5592 18.0615 13.2344C18.6249 12.9096 19.2547 12.6643 19.9507 12.4986C20.6467 12.3329 21.356 12.2069 22.0785 12.1207C22.9933 12.0147 23.7357 11.9285 24.3058 11.8622C24.8759 11.7893 25.2902 11.6733 25.5487 11.5142C25.8072 11.3551 25.9365 11.0966 25.9365 10.7386V10.669C25.9365 9.80066 25.6912 9.12784 25.2007 8.65057C24.7168 8.17329 23.9943 7.93466 23.0331 7.93466C22.0321 7.93466 21.2433 8.15672 20.6666 8.60085C20.0965 9.03835 19.7021 9.52557 19.4834 10.0625L16.6893 9.42614C17.0208 8.49811 17.5047 7.74905 18.141 7.17898C18.784 6.60227 19.5231 6.18466 20.3584 5.92614C21.1936 5.66098 22.0719 5.52841 22.9933 5.52841C23.6032 5.52841 24.2495 5.60133 24.9322 5.74716C25.6216 5.88636 26.2646 6.14489 26.8612 6.52273C27.4644 6.90057 27.9583 7.44081 28.3427 8.14347C28.7272 8.83949 28.9195 9.74432 28.9195 10.858V21H26.016V18.9119H25.8967C25.7045 19.2964 25.4161 19.6742 25.0317 20.0455C24.6472 20.4167 24.1534 20.7249 23.5501 20.9702C22.9469 21.2154 22.2244 21.3381 21.3825 21.3381ZM22.0288 18.9517C22.8508 18.9517 23.5534 18.7893 24.1368 18.4645C24.7267 18.1397 25.1742 17.7154 25.4791 17.1918C25.7907 16.6615 25.9464 16.0947 25.9464 15.4915V13.5227C25.8404 13.6288 25.6349 13.7282 25.33 13.821C25.0317 13.9072 24.6903 13.9834 24.3058 14.0497C23.9213 14.1094 23.5468 14.1657 23.1822 14.2188C22.8177 14.2652 22.5127 14.3049 22.2675 14.3381C21.6908 14.411 21.1638 14.5336 20.6865 14.706C20.2159 14.8783 19.838 15.1269 19.553 15.4517C19.2746 15.7699 19.1354 16.1941 19.1354 16.7244C19.1354 17.4602 19.4071 18.017 19.9507 18.3949C20.4943 18.7661 21.187 18.9517 22.0288 18.9517ZM36.9723 0.636363V21H33.9993V0.636363H36.9723ZM48.6744 21.3082C47.1696 21.3082 45.8737 20.9867 44.7866 20.3438C43.7061 19.6941 42.8709 18.7827 42.2809 17.6094C41.6976 16.4295 41.4059 15.0473 41.4059 13.4631C41.4059 11.8987 41.6976 10.5199 42.2809 9.3267C42.8709 8.13352 43.6928 7.20218 44.7468 6.53267C45.8074 5.86316 47.047 5.52841 48.4656 5.52841C49.3273 5.52841 50.1625 5.67093 50.9712 5.95597C51.78 6.241 52.5058 6.68845 53.1488 7.2983C53.7918 7.90814 54.2989 8.70028 54.6701 9.67472C55.0413 10.6425 55.2269 11.8191 55.2269 13.2045V14.2585H43.0863V12.0312H52.3136C52.3136 11.2491 52.1545 10.5563 51.8363 9.95312C51.5181 9.34328 51.0707 8.86269 50.494 8.51136C49.9239 8.16004 49.2544 7.98438 48.4854 7.98438C47.6502 7.98438 46.9211 8.18987 46.2979 8.60085C45.6815 9.00521 45.2042 9.53551 44.8661 10.1918C44.5347 10.8414 44.369 11.5473 44.369 12.3097V14.0497C44.369 15.0705 44.5479 15.9389 44.9059 16.6548C45.2705 17.3707 45.7776 17.9176 46.4272 18.2955C47.0768 18.6667 47.8358 18.8523 48.7042 18.8523C49.2676 18.8523 49.7814 18.7727 50.2454 18.6136C50.7094 18.4479 51.1104 18.2027 51.4485 17.8778C51.7866 17.553 52.0451 17.152 52.2241 16.6747L55.038 17.1818C54.8126 18.0104 54.4083 18.7363 53.8249 19.3594C53.2482 19.9759 52.5224 20.4564 51.6474 20.8011C50.779 21.1392 49.788 21.3082 48.6744 21.3082ZM62.6186 11.9318V21H59.6456V5.72727H62.4993V8.21307H62.6882C63.0395 7.40436 63.5897 6.75473 64.3388 6.2642C65.0944 5.77367 66.0457 5.52841 67.1924 5.52841C68.2332 5.52841 69.1446 5.74716 69.9268 6.18466C70.709 6.61553 71.3156 7.25852 71.7464 8.11364C72.1773 8.96875 72.3927 10.026 72.3927 11.2855V21H69.4197V11.6435C69.4197 10.5365 69.1314 9.6714 68.5547 9.0483C67.978 8.41856 67.1858 8.10369 66.1782 8.10369C65.4888 8.10369 64.8757 8.25284 64.3388 8.55114C63.8085 8.84943 63.3875 9.28693 63.076 9.86364C62.771 10.4337 62.6186 11.1231 62.6186 11.9318ZM83.9332 21.3082C82.455 21.3082 81.1822 20.9735 80.115 20.304C79.0544 19.6278 78.2391 18.6965 77.669 17.5099C77.0989 16.3234 76.8139 14.9645 76.8139 13.4332C76.8139 11.8821 77.1055 10.5133 77.6889 9.3267C78.2722 8.13352 79.0942 7.20218 80.1548 6.53267C81.2154 5.86316 82.4649 5.52841 83.9034 5.52841C85.0634 5.52841 86.0975 5.74384 87.0056 6.17472C87.9138 6.59896 88.6463 7.19555 89.2031 7.96449C89.7665 8.73343 90.1013 9.63163 90.2073 10.6591H87.3139C87.1548 9.94318 86.7902 9.3267 86.2201 8.80966C85.6567 8.29261 84.901 8.03409 83.9531 8.03409C83.1245 8.03409 82.3986 8.25284 81.7755 8.69034C81.159 9.12121 80.6784 9.73769 80.3338 10.5398C79.9891 11.3352 79.8167 12.2765 79.8167 13.3636C79.8167 14.4773 79.9857 15.4384 80.3238 16.2472C80.6619 17.0559 81.1392 17.6823 81.7556 18.1264C82.3787 18.5705 83.1112 18.7926 83.9531 18.7926C84.5165 18.7926 85.0269 18.6899 85.4843 18.4844C85.9483 18.2723 86.3361 17.9706 86.6477 17.5795C86.9659 17.1884 87.1879 16.7178 87.3139 16.1676H90.2073C90.1013 17.1553 89.7798 18.0369 89.2428 18.8125C88.7059 19.5881 87.9867 20.1979 87.0852 20.642C86.1903 21.0862 85.1396 21.3082 83.9332 21.3082ZM101.089 21.3082C99.5843 21.3082 98.2884 20.9867 97.2013 20.3438C96.1208 19.6941 95.2855 18.7827 94.6956 17.6094C94.1123 16.4295 93.8206 15.0473 93.8206 13.4631C93.8206 11.8987 94.1123 10.5199 94.6956 9.3267C95.2855 8.13352 96.1075 7.20218 97.1615 6.53267C98.2221 5.86316 99.4617 5.52841 100.88 5.52841C101.742 5.52841 102.577 5.67093 103.386 5.95597C104.195 6.241 104.92 6.68845 105.563 7.2983C106.206 7.90814 106.714 8.70028 107.085 9.67472C107.456 10.6425 107.642 11.8191 107.642 13.2045V14.2585H95.501V12.0312H104.728C104.728 11.2491 104.569 10.5563 104.251 9.95312C103.933 9.34328 103.485 8.86269 102.909 8.51136C102.339 8.16004 101.669 7.98438 100.9 7.98438C100.065 7.98438 99.3357 8.18987 98.7126 8.60085C98.0962 9.00521 97.6189 9.53551 97.2808 10.1918C96.9494 10.8414 96.7837 11.5473 96.7837 12.3097V14.0497C96.7837 15.0705 96.9626 15.9389 97.3206 16.6548C97.6852 17.3707 98.1923 17.9176 98.8419 18.2955C99.4915 18.6667 100.251 18.8523 101.119 18.8523C101.682 18.8523 102.196 18.7727 102.66 18.6136C103.124 18.4479 103.525 18.2027 103.863 17.8778C104.201 17.553 104.46 17.152 104.639 16.6747L107.453 17.1818C107.227 18.0104 106.823 18.7363 106.24 19.3594C105.663 19.9759 104.937 20.4564 104.062 20.8011C103.194 21.1392 102.203 21.3082 101.089 21.3082Z"
									fill="white" />
							</svg> --}}
						</div>
						<ul class="sidebar-nav" id="sidebar-nav">
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-dashboard') }}">
									<svg class="" width="22" height="22" viewBox="0 0 22 22"
										fill="#151515" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.5 18.8332V9.6665" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M11 18.8332V4.1665" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M5.5 18.8335V13.3335" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span class="">{{ __('backend/dashboard.title') }}</span>
								</a>
							</li>
							<!-- End Overview Nav -->
                            @if (Auth::user()->hasPermission('manage_products') || Auth::user()->hasPermission('manage_products_categories'))
                            <li class="nav-item">
								<div class="nav-link collapsed">
									<a class="nav-link collapsed" href="{{ route('backend-management-products') }}">
										<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M5.5 2.3335L2.75 6.00016V18.8335C2.75 19.3197 2.94315 19.786 3.28697 20.1299C3.63079 20.4737 4.0971 20.6668 4.58333 20.6668H17.4167C17.9029 20.6668 18.3692 20.4737 18.713 20.1299C19.0568 19.786 19.25 19.3197 19.25 18.8335V6.00016L16.5 2.3335H5.5Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M2.75 6H19.25" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M14.6663 9.6665C14.6663 10.639 14.28 11.5716 13.5924 12.2592C12.9048 12.9469 11.9721 13.3332 10.9997 13.3332C10.0272 13.3332 9.09458 12.9469 8.40695 12.2592C7.71932 11.5716 7.33301 10.639 7.33301 9.6665"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>{{ __('backend/management.products.title') }}</span>
									</a>
									<div class="noti-arrow">
										<svg data-bs-target="#products-nav" data-bs-toggle="collapse"
											class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"
											fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"
												fill="#7D7D7D" />
										</svg>
									</div>
								</div>

								<ul id="products-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
									@if (Auth::user()->hasPermission('manage_products'))
                                    <li>
										<a href="{{ route('backend-management-products') }}">{{ __('backend/management.products.title') }}</a>
									</li>
                                    @endif
                                    @if (Auth::user()->hasPermission('manage_products_categories'))
                                    <li>
										<a href="{{ route('backend-management-products-categories') }}">{{ __('backend/management.products.categories.title') }}</a>
									</li>
                                    @endif
								</ul>
							</li>
							<!-- End Products Nav -->
                            @endif
                            @if (Auth::user()->hasPermission('manage_users'))
							<li class="nav-item">
								<div class="nav-link collapsed">
									<a class="nav-link collapsed" href="{{ route('backend-management-users') }}">
										<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11.0003 12.4167C13.5316 12.4167 15.5837 10.3646 15.5837 7.83333C15.5837 5.30203 13.5316 3.25 11.0003 3.25C8.46902 3.25 6.41699 5.30203 6.41699 7.83333C6.41699 10.3646 8.46902 12.4167 11.0003 12.4167Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.3337 19.7498C18.3337 17.8049 17.561 15.9397 16.1858 14.5644C14.8105 13.1891 12.9452 12.4165 11.0003 12.4165C9.0554 12.4165 7.19014 13.1891 5.81488 14.5644C4.43961 15.9397 3.66699 17.8049 3.66699 19.7498"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>{{ __('backend/management.users.title') }}</span>
									</a>
									{{-- <div class="noti-arrow">
										<div class="noti-box noti-display-none">
											<div>2</div>
										</div>
										<svg data-bs-target="#customers-nav" data-bs-toggle="collapse"
											class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"
											fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"
												fill="#7D7D7D" />
										</svg>
									</div> --}}
								</div>

								{{-- <ul id="customers-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
									<li>
										<a href="customerAllticker.html">Customer all Tickers</a>
									</li>
									<li>
										<a href="customerAllOrder.html">Customer all Order</a>
									</li>
								</ul> --}}
							</li>
							<!-- End Customers Nav -->
                            @endif
							
							<!-- End Orders Nav -->
                            @if (Auth::user()->hasPermission('system_settings'))
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-system-settings') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M19.25 15.1669V7.83357C19.2497 7.51207 19.1648 7.19631 19.0039 6.91797C18.843 6.63962 18.6118 6.40849 18.3333 6.24774L11.9167 2.58107C11.638 2.42016 11.3218 2.33545 11 2.33545C10.6782 2.33545 10.362 2.42016 10.0833 2.58107L3.66667 6.24774C3.38824 6.40849 3.15698 6.63962 2.99609 6.91797C2.8352 7.19631 2.75033 7.51207 2.75 7.83357V15.1669C2.75033 15.4884 2.8352 15.8042 2.99609 16.0825C3.15698 16.3608 3.38824 16.592 3.66667 16.7527L10.0833 20.4194C10.362 20.5803 10.6782 20.665 11 20.665C11.3218 20.665 11.638 20.5803 11.9167 20.4194L18.3333 16.7527C18.6118 16.592 18.843 16.3608 19.0039 16.0825C19.1648 15.8042 19.2497 15.4884 19.25 15.1669Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M11 14.25C12.5188 14.25 13.75 13.0188 13.75 11.5C13.75 9.98122 12.5188 8.75 11 8.75C9.48122 8.75 8.25 9.98122 8.25 11.5C8.25 13.0188 9.48122 14.25 11 14.25Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>{{ __('backend/system.settings.title') }}</span>
								</a>
							</li>
							<!-- End Settings Nav -->
                            @endif
                            {{-- @if (Auth::user()->hasPermission('system_payments'))
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-system-payments') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10.9997 20.6668C16.0623 20.6668 20.1663 16.5628 20.1663 11.5002C20.1663 6.43755 16.0623 2.3335 10.9997 2.3335C5.93706 2.3335 1.83301 6.43755 1.83301 11.5002C1.83301 16.5628 5.93706 20.6668 10.9997 20.6668Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M14.6663 7.8335H9.16634C8.68011 7.8335 8.2138 8.02665 7.86998 8.37047C7.52616 8.71428 7.33301 9.1806 7.33301 9.66683C7.33301 10.1531 7.52616 10.6194 7.86998 10.9632C8.2138 11.307 8.68011 11.5002 9.16634 11.5002H12.833C13.3192 11.5002 13.7856 11.6933 14.1294 12.0371C14.4732 12.381 14.6663 12.8473 14.6663 13.3335C14.6663 13.8197 14.4732 14.286 14.1294 14.6299C13.7856 14.9737 13.3192 15.1668 12.833 15.1668H7.33301"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M11 17V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>{{ __('backend/system.payments.title') }}</span>
								</a>
							</li>
							<!-- End Payments Nav -->
                            @endif --}}
                            @if (Auth::user()->hasPermission('manage_tickets'))
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-management-tickets') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2.75 6.91683V8.75016C3.47935 8.75016 4.17882 9.03989 4.69454 9.55562C5.21027 10.0713 5.5 10.7708 5.5 11.5002C5.5 12.2295 5.21027 12.929 4.69454 13.4447C4.17882 13.9604 3.47935 14.2502 2.75 14.2502V16.0835C2.75 17.0918 3.575 17.9168 4.58333 17.9168H17.4167C17.9029 17.9168 18.3692 17.7237 18.713 17.3799C19.0568 17.036 19.25 16.5697 19.25 16.0835V14.2502C18.5207 14.2502 17.8212 13.9604 17.3055 13.4447C16.7897 12.929 16.5 12.2295 16.5 11.5002C16.5 10.7708 16.7897 10.0713 17.3055 9.55562C17.8212 9.03989 18.5207 8.75016 19.25 8.75016V6.91683C19.25 6.4306 19.0568 5.96428 18.713 5.62047C18.3692 5.27665 17.9029 5.0835 17.4167 5.0835H4.58333C4.0971 5.0835 3.63079 5.27665 3.28697 5.62047C2.94315 5.96428 2.75 6.4306 2.75 6.91683Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.917 5.0835V6.91683" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M11.917 16.0835V17.9168" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M11.917 10.5835V12.4168" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									<span>{{ __('backend/management.tickets.title') }}</span>
								</a>
							</li>
                            @endif
       <!--                     @if (Auth::user()->hasPermission('manage_tickets') || Auth::user()->hasPermission('manage_tickets_categproes'))-->
							<!--<li class="nav-item">-->
							<!--	<div class="nav-link collapsed">-->
							<!--		<a class="nav-link collapsed" href="{{ route('backend-management-tickets') }}">-->
							<!--			<svg width="22" height="22" viewBox="0 0 22 22" fill="none"-->
							<!--				xmlns="http://www.w3.org/2000/svg">-->
							<!--				<path-->
							<!--					d="M2.75 6.91683V8.75016C3.47935 8.75016 4.17882 9.03989 4.69454 9.55562C5.21027 10.0713 5.5 10.7708 5.5 11.5002C5.5 12.2295 5.21027 12.929 4.69454 13.4447C4.17882 13.9604 3.47935 14.2502 2.75 14.2502V16.0835C2.75 17.0918 3.575 17.9168 4.58333 17.9168H17.4167C17.9029 17.9168 18.3692 17.7237 18.713 17.3799C19.0568 17.036 19.25 16.5697 19.25 16.0835V14.2502C18.5207 14.2502 17.8212 13.9604 17.3055 13.4447C16.7897 12.929 16.5 12.2295 16.5 11.5002C16.5 10.7708 16.7897 10.0713 17.3055 9.55562C17.8212 9.03989 18.5207 8.75016 19.25 8.75016V6.91683C19.25 6.4306 19.0568 5.96428 18.713 5.62047C18.3692 5.27665 17.9029 5.0835 17.4167 5.0835H4.58333C4.0971 5.0835 3.63079 5.27665 3.28697 5.62047C2.94315 5.96428 2.75 6.4306 2.75 6.91683Z"-->
							<!--					stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"-->
							<!--					stroke-linejoin="round" />-->
							<!--				<path d="M11.917 5.0835V6.91683" stroke="#BBBBBB" stroke-width="2"-->
							<!--					stroke-linecap="round" stroke-linejoin="round" />-->
							<!--				<path d="M11.917 16.0835V17.9168" stroke="#BBBBBB" stroke-width="2"-->
							<!--					stroke-linecap="round" stroke-linejoin="round" />-->
							<!--				<path d="M11.917 10.5835V12.4168" stroke="#BBBBBB" stroke-width="2"-->
							<!--					stroke-linecap="round" stroke-linejoin="round" />-->
							<!--			</svg>-->
							<!--			<span>{{ __('backend/management.tickets.title') }}</span>-->
							<!--		</a>-->
							<!--		<div class="noti-arrow">-->
							<!--			<div class="noti-box noti-display-none">-->
							<!--				<div style="color: white;font-size: 16px;font-family: Inter;font-weight: 500;word-wrap: break-word;">-->
							<!--					2-->
							<!--				</div>-->
							<!--			</div>-->
							<!--			<div data-bs-target="#tickets-nav" data-bs-toggle="collapse">-->
							<!--				<svg class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"-->
							<!--					fill="none" xmlns="http://www.w3.org/2000/svg">-->
							<!--					<path-->
							<!--						d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"-->
							<!--						fill="#7D7D7D" />-->
							<!--				</svg>-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--	<ul id="tickets-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">-->
							<!--		@if (Auth::user()->hasPermission('manage_tickets'))-->
       <!--                             <li>-->
							<!--			<a href="{{ route('backend-management-tickets') }}">{{ __('backend/management.tickets.title') }}</a>-->
							<!--		</li>-->
       <!--                             @endif-->
       <!--                             @if (Auth::user()->hasPermission('manage_tickets_categories'))-->
       <!--                             <li>-->
							<!--			<a href="{{ route('backend-management-tickets-categories') }}">{{ __('backend/management.tickets.categories.title') }}</a>-->
							<!--		</li>-->
       <!--                             @endif-->
							<!--	</ul>-->
							<!--</li>-->
							<!-- End Tickets Nav -->
       <!--                     @endif-->
                            @if (Auth::user()->hasPermission('manage_orders'))
                            <li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-shoppings') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M3.66699 18.3752C3.66699 17.7674 3.90843 17.1845 4.33821 16.7547C4.76798 16.3249 5.35087 16.0835 5.95866 16.0835H18.3337"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M5.95866 2.3335H18.3337V20.6668H5.95866C5.35087 20.6668 4.76798 20.4254 4.33821 19.9956C3.90843 19.5658 3.66699 18.9829 3.66699 18.3752V4.62516C3.66699 4.01737 3.90843 3.43448 4.33821 3.00471C4.76798 2.57494 5.35087 2.3335 5.95866 2.3335Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>{{ __('backend/orders.title') }}</span>
									
								</a>
							</li>
                            
							<!-- End Tickets Nav -->
                            @endif
                            @if (Auth::user()->hasPermission('manage_faqs'))
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-management-faqs') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10.9997 20.6668C16.0623 20.6668 20.1663 16.5628 20.1663 11.5002C20.1663 6.43755 16.0623 2.3335 10.9997 2.3335C5.93706 2.3335 1.83301 6.43755 1.83301 11.5002C1.83301 16.5628 5.93706 20.6668 10.9997 20.6668Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M8.33203 8.75003C8.54754 8.1374 8.97292 7.6208 9.53282 7.29174C10.0927 6.96268 10.751 6.84239 11.3911 6.95219C12.0312 7.06198 12.6118 7.39476 13.03 7.8916C13.4483 8.38844 13.6772 9.01726 13.6762 9.6667C13.6762 11.5 10.9262 12.4167 10.9262 12.4167"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M11 16.0835H11.01" stroke="#BBBBBB" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round" />
									</svg>
									<span>{{ __('backend/management.faqs.title') }}</span>
									{{-- <div class="noti-arrow">
										<div class="noti-box noti-display-none">
											<div style="color: white;font-size: 16px;font-family: Inter;font-weight: 500;word-wrap: break-word; ">
												2
											</div>
										</div>
										<div>
											<svg data-bs-target="#FAQs-nav" data-bs-toggle="collapse"
												class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"
													fill="#7D7D7D" />
											</svg>
										</div>
									</div> --}}
								</a>
								{{-- <ul id="FAQs-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
									<li>
										<a href="FAQsCategories.html">Category</a>
									</li>
								</ul> --}}
							</li>
							<!-- End FAQs Nav -->
                            @endif
                            @if (Auth::user()->hasPermission('manage_articles'))
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-management-articles') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2.75 6.91683V8.75016C3.47935 8.75016 4.17882 9.03989 4.69454 9.55562C5.21027 10.0713 5.5 10.7708 5.5 11.5002C5.5 12.2295 5.21027 12.929 4.69454 13.4447C4.17882 13.9604 3.47935 14.2502 2.75 14.2502V16.0835C2.75 17.0918 3.575 17.9168 4.58333 17.9168H17.4167C17.9029 17.9168 18.3692 17.7237 18.713 17.3799C19.0568 17.036 19.25 16.5697 19.25 16.0835V14.2502C18.5207 14.2502 17.8212 13.9604 17.3055 13.4447C16.7897 12.929 16.5 12.2295 16.5 11.5002C16.5 10.7708 16.7897 10.0713 17.3055 9.55562C17.8212 9.03989 18.5207 8.75016 19.25 8.75016V6.91683C19.25 6.4306 19.0568 5.96428 18.713 5.62047C18.3692 5.27665 17.9029 5.0835 17.4167 5.0835H4.58333C4.0971 5.0835 3.63079 5.27665 3.28697 5.62047C2.94315 5.96428 2.75 6.4306 2.75 6.91683Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.917 5.0835V6.91683" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M11.917 16.0835V17.9168" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M11.917 10.5835V12.4168" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									<span>{{ __('backend/management.articles.title') }}</span>
								</a>
							</li>
                            @endif
                            @if (Auth::user()->hasPermission('manage_coupons'))
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-management-coupons') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10.9997 20.6668C16.0623 20.6668 20.1663 16.5628 20.1663 11.5002C20.1663 6.43755 16.0623 2.3335 10.9997 2.3335C5.93706 2.3335 1.83301 6.43755 1.83301 11.5002C1.83301 16.5628 5.93706 20.6668 10.9997 20.6668Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M8.33203 8.75003C8.54754 8.1374 8.97292 7.6208 9.53282 7.29174C10.0927 6.96268 10.751 6.84239 11.3911 6.95219C12.0312 7.06198 12.6118 7.39476 13.03 7.8916C13.4483 8.38844 13.6772 9.01726 13.6762 9.6667C13.6762 11.5 10.9262 12.4167 10.9262 12.4167"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M11 16.0835H11.01" stroke="#BBBBBB" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round" />
									</svg>
									<span>{{ __('backend/management.coupons.title') }}</span>
								</a>
							</li>
                            @endif
                            @if (Auth::user()->hasPermission('manage_delivery_methods'))
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-management-delivery-methods') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2.75 6.91683V8.75016C3.47935 8.75016 4.17882 9.03989 4.69454 9.55562C5.21027 10.0713 5.5 10.7708 5.5 11.5002C5.5 12.2295 5.21027 12.929 4.69454 13.4447C4.17882 13.9604 3.47935 14.2502 2.75 14.2502V16.0835C2.75 17.0918 3.575 17.9168 4.58333 17.9168H17.4167C17.9029 17.9168 18.3692 17.7237 18.713 17.3799C19.0568 17.036 19.25 16.5697 19.25 16.0835V14.2502C18.5207 14.2502 17.8212 13.9604 17.3055 13.4447C16.7897 12.929 16.5 12.2295 16.5 11.5002C16.5 10.7708 16.7897 10.0713 17.3055 9.55562C17.8212 9.03989 18.5207 8.75016 19.25 8.75016V6.91683C19.25 6.4306 19.0568 5.96428 18.713 5.62047C18.3692 5.27665 17.9029 5.0835 17.4167 5.0835H4.58333C4.0971 5.0835 3.63079 5.27665 3.28697 5.62047C2.94315 5.96428 2.75 6.4306 2.75 6.91683Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.917 5.0835V6.91683" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M11.917 16.0835V17.9168" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M11.917 10.5835V12.4168" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									<span>{{ __('backend/management.delivery_methods.title') }}</span>
								</a>
							</li>
                            @endif
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-management-banners') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M3.66699 18.3752C3.66699 17.7674 3.90843 17.1845 4.33821 16.7547C4.76798 16.3249 5.35087 16.0835 5.95866 16.0835H18.3337"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M5.95866 2.3335H18.3337V20.6668H5.95866C5.35087 20.6668 4.76798 20.4254 4.33821 19.9956C3.90843 19.5658 3.66699 18.9829 3.66699 18.3752V4.62516C3.66699 4.01737 3.90843 3.43448 4.33821 3.00471C4.76798 2.57494 5.35087 2.3335 5.95866 2.3335Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>{{ __('backend/management.banners.menu_title') }}</span>
								</a>
							</li>
						</ul>
						<ul class="sidebar-footer">
							<li class="foot-item foot-i1">
								<a class="foot-link" href="#">Help</a>
							</li>
							<li class="foot-item foot-i2">
								<a class="foot-link" href="#">Contact us</a>
							</li>
							<li class="foot-item">
								<a href="{{ route('backend-logout') }}" class="foot-link">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M8.25 19.75H4.58333C4.0971 19.75 3.63079 19.5568 3.28697 19.213C2.94315 18.8692 2.75 18.4029 2.75 17.9167V5.08333C2.75 4.5971 2.94315 4.13079 3.28697 3.78697C3.63079 3.44315 4.0971 3.25 4.58333 3.25H8.25"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M14.667 16.0832L19.2503 11.4998L14.667 6.9165" stroke="#BBBBBB"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M19.25 11.5H8.25" stroke="#BBBBBB" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round" />
									</svg>
									<span>Log out</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- canvass-sidebar -->
			<div class="offcanvas offcanvas-start" style="width: 100%" data-bs-backdrop="static" tabindex="-1"
				id="staticBackdrop" aria-labelledby="staticBackdropLabel">
				<div class="offcanvas-header header-canvas">
					<svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
						xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path
							d="M6.7072 5.29289C6.31668 4.90237 5.68351 4.90237 5.29299 5.29289C4.90246 5.68342 4.90246 6.31658 5.29299 6.70711L10.5858 12L5.29289 17.2929C4.90237 17.6834 4.90237 18.3166 5.29289 18.7071C5.68342 19.0976 6.31658 19.0976 6.70711 18.7071L12 13.4142L17.293 18.7071C17.6835 19.0976 18.3167 19.0976 18.7072 18.7071C19.0977 18.3166 19.0977 17.6834 18.7072 17.2929L13.4143 12L18.7071 6.70711C19.0976 6.31658 19.0976 5.68342 18.7071 5.29289C18.3166 4.90237 17.6834 4.90237 17.2929 5.29289L12 10.5857L6.7072 5.29289Z"
							fill="#6F767E" />
					</svg>
					<div class="sidebar-logo-container">
						{{-- <svg width="39.8" height="39" viewBox="0 0 39.8 39" fill="none" style="margin-right: 17px"
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M21.8702 24.0219L14.7072 22.8281L16.0855 14.5582L23.2486 15.752L21.8702 24.0219ZM14.081 31.9314C10.3546 31.6353 7.36925 30.6953 5.223 29.5363C0.0780395 26.7579 -3.35193 19.2464 5.223 15.8166C5.83377 15.5723 6.38833 15.3518 6.89119 15.1538C7.07835 10.9246 8.08429 7.57143 9.35249 5.2
                                23C12.1309 0.0780395 19.6424 -3.35193 23.0722 5.223C23.312 5.82265 23.529 6.36812 23.7241 6.86368C28.3937 6.93447 32.0667 7.99273 34.5847 9.35251C39.7297 12.1309 43.1596 19.6424 34.5847 23.0722C33.0419 23.6893 31.8577 24.1547 30.9595 24.4884C30.7038 28.4159 29.7366 31.5487 28.5333 33.777C25.7549 38.922 18.2434 42.3519 14.8136 33.777C14.5402 33.0935 14.2966 32.4804 14.081 31.9314Z"
								fill="white" />
							<circle cx="19.2197" cy="20.2197" r="7.5" fill="white" />
						</svg>
						<svg width="111" height="34" viewBox="0 0 111 34" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M12.2508 9.45597L9.5562 9.93324C9.44351 9.58854 9.26453 9.26042 9.01927 8.94886C8.78063 8.63731 8.45582 8.3821 8.04483 8.18324C7.63385 7.98437 7.12012 7.88494 6.50364 7.88494C5.66178 7.88494 4.95913 8.07386 4.39569 8.4517C3.83224 8.82292 3.55051 9.3035 3.55051 9.89347C3.55051 10.4039 3.73944 10.8149 4.11728 11.1264C4.49512 11.438 5.10497 11.6932 5.94682 11.892L8.37296 12.4489C9.77826 12.7737 10.8256 13.2741 11.515 13.9503C12.2044 14.6264 12.5491 15.5047 12.5491 16.5852C12.5491 17.5 12.2839 18.3153 11.7536 19.0312C11.23 19.7405 10.4975 20.2973 9.5562 20.7017C8.62154 21.1061 7.53773 21.3082 6.30478 21.3082C4.59455 21.3082 3.19919 20.9437 2.1187 20.2145C1.0382 19.4787 0.375326 18.4347 0.13006 17.0824L3.00364 16.6449C3.18262 17.3939 3.55052 17.9607 4.10733 18.3452C4.66415 18.723 5.39 18.9119 6.28489 18.9119C7.25932 18.9119 8.0382 18.7098 8.62154 18.3054C9.20487 17.8944 9.49654 17.3939 9.49654 16.804C9.49654 16.3267 9.31756 15.9257 8.95961 15.6009C8.60828 15.276 8.06803 15.0308 7.33887 14.8651L4.75364 14.2983C3.32845 13.9735 2.27447 13.4564 1.59171 12.7472C0.915572 12.0379 0.577504 11.1397 0.577504 10.0526C0.577504 9.15104 0.829398 8.36222 1.33319 7.68608C1.83697 7.00994 2.533 6.48295 3.42125 6.10511C4.30951 5.72064 5.32703 5.52841 6.47381 5.52841C8.12438 5.52841 9.42362 5.88636 10.3715 6.60227C11.3195 7.31155 11.9459 8.26278 12.2508 9.45597ZM21.3825 21.3381C20.4147 21.3381 19.5397 21.1591 18.7575 20.8011C17.9753 20.4366 17.3555 19.9096 16.8981 19.2202C16.4474 18.5308 16.222 17.6856 16.222 16.6847C16.222 15.8229 16.3877 15.1136 16.7192 14.5568C17.0506 14 17.498 13.5592 18.0615 13.2344C18.6249 12.9096 19.2547 12.6643 19.9507 12.4986C20.6467 12.3329 21.356 12.2069 22.0785 12.1207C22.9933 12.0147 23.7357 11.9285 24.3058 11.8622C24.8759 11.7893 25.2902 11.6733 25.5487 11.5142C25.8072 11.3551 25.9365 11.0966 25.9365 10.7386V10.669C25.9365 9.80066 25.6912 9.12784 25.2007 8.65057C24.7168 8.17329 23.9943 7.93466 23.0331 7.93466C22.0321 7.93466 21.2433 8.15672 20.6666 8.60085C20.0965 9.03835 19.7021 9.52557 19.4834 10.0625L16.6893 9.42614C17.0208 8.49811 17.5047 7.74905 18.141 7.17898C18.784 6.60227 19.5231 6.18466 20.3584 5.92614C21.1936 5.66098 22.0719 5.52841 22.9933 5.52841C23.6032 5.52841 24.2495 5.60133 24.9322 5.74716C25.6216 5.88636 26.2646 6.14489 26.8612 6.52273C27.4644 6.90057 27.9583 7.44081 28.3427 8.14347C28.7272 8.83949 28.9195 9.74432 28.9195 10.858V21H26.016V18.9119H25.8967C25.7045 19.2964 25.4161 19.6742 25.0317 20.0455C24.6472 20.4167 24.1534 20.7249 23.5501 20.9702C22.9469 21.2154 22.2244 21.3381 21.3825 21.3381ZM22.0288 18.9517C22.8508 18.9517 23.5534 18.7893 24.1368 18.4645C24.7267 18.1397 25.1742 17.7154 25.4791 17.1918C25.7907 16.6615 25.9464 16.0947 25.9464 15.4915V13.5227C25.8404 13.6288 25.6349 13.7282 25.33 13.821C25.0317 13.9072 24.6903 13.9834 24.3058 14.0497C23.9213 14.1094 23.5468 14.1657 23.1822 14.2188C22.8177 14.2652 22.5127 14.3049 22.2675 14.3381C21.6908 14.411 21.1638 14.5336 20.6865 14.706C20.2159 14.8783 19.838 15.1269 19.553 15.4517C19.2746 15.7699 19.1354 16.1941 19.1354 16.7244C19.1354 17.4602 19.4071 18.017 19.9507 18.3949C20.4943 18.7661 21.187 18.9517 22.0288 18.9517ZM36.9723 0.636363V21H33.9993V0.636363H36.9723ZM48.6744 21.3082C47.1696 21.3082 45.8737 20.9867 44.7866 20.3438C43.7061 19.6941 42.8709 18.7827 42.2809 17.6094C41.6976 16.4295 41.4059 15.0473 41.4059 13.4631C41.4059 11.8987 41.6976 10.5199 42.2809 9.3267C42.8709 8.13352 43.6928 7.20218 44.7468 6.53267C45.8074 5.86316 47.047 5.52841 48.4656 5.52841C49.3273 5.52841 50.1625 5.67093 50.9712 5.95597C51.78 6.241 52.5058 6.68845 53.1488 7.2983C53.7918 7.90814 54.2989 8.70028 54.6701 9.67472C55.0413 10.6425 55.2269 11.8191 55.2269 13.2045V14.2585H43.0863V12.0312H52.3136C52.3136 11.2491 52.1545 10.5563 51.8363 9.95312C51.5181 9.34328 51.0707 8.86269 50.494 8.51136C49.9239 8.16004 49.2544 7.98438 48.4854 7.98438C47.6502 7.98438 46.9211 8.18987 46.2979 8.60085C45.6815 9.00521 45.2042 9.53551 44.8661 10.1918C44.5347 10.8414 44.369 11.5473 44.369 12.3097V14.0497C44.369 15.0705 44.5479 15.9389 44.9059 16.6548C45.2705 17.3707 45.7776 17.9176 46.4272 18.2955C47.0768 18.6667 47.8358 18.8523 48.7042 18.8523C49.2676 18.8523 49.7814 18.7727 50.2454 18.6136C50.7094 18.4479 51.1104 18.2027 51.4485 17.8778C51.7866 17.553 52.0451 17.152 52.2241 16.6747L55.038 17.1818C54.8126 18.0104 54.4083 18.7363 53.8249 19.3594C53.2482 19.9759 52.5224 20.4564 51.6474 20.8011C50.779 21.1392 49.788 21.3082 48.6744 21.3082ZM62.6186 11.9318V21H59.6456V5.72727H62.4993V8.21307H62.6882C63.0395 7.40436 63.5897 6.75473 64.3388 6.2642C65.0944 5.77367 66.0457 5.52841 67.1924 5.52841C68.2332 5.52841 69.1446 5.74716 69.9268 6.18466C70.709 6.61553 71.3156 7.25852 71.7464 8.11364C72.1773 8.96875 72.3927 10.026 72.3927 11.2855V21H69.4197V11.6435C69.4197 10.5365 69.1314 9.6714 68.5547 9.0483C67.978 8.41856 67.1858 8.10369 66.1782 8.10369C65.4888 8.10369 64.8757 8.25284 64.3388 8.55114C63.8085 8.84943 63.3875 9.28693 63.076 9.86364C62.771 10.4337 62.6186 11.1231 62.6186 11.9318ZM83.9332 21.3082C82.455 21.3082 81.1822 20.9735 80.115 20.304C79.0544 19.6278 78.2391 18.6965 77.669 17.5099C77.0989 16.3234 76.8139 14.9645 76.8139 13.4332C76.8139 11.8821 77.1055 10.5133 77.6889 9.3267C78.2722 8.13352 79.0942 7.20218 80.1548 6.53267C81.2154 5.86316 82.4649 5.52841 83.9034 5.52841C85.0634 5.52841 86.0975 5.74384 87.0056 6.17472C87.9138 6.59896 88.6463 7.19555 89.2031 7.96449C89.7665 8.73343 90.1013 9.63163 90.2073 10.6591H87.3139C87.1548 9.94318 86.7902 9.3267 86.2201 8.80966C85.6567 8.29261 84.901 8.03409 83.9531 8.03409C83.1245 8.03409 82.3986 8.25284 81.7755 8.69034C81.159 9.12121 80.6784 9.73769 80.3338 10.5398C79.9891 11.3352 79.8167 12.2765 79.8167 13.3636C79.8167 14.4773 79.9857 15.4384 80.3238 16.2472C80.6619 17.0559 81.1392 17.6823 81.7556 18.1264C82.3787 18.5705 83.1112 18.7926 83.9531 18.7926C84.5165 18.7926 85.0269 18.6899 85.4843 18.4844C85.9483 18.2723 86.3361 17.9706 86.6477 17.5795C86.9659 17.1884 87.1879 16.7178 87.3139 16.1676H90.2073C90.1013 17.1553 89.7798 18.0369 89.2428 18.8125C88.7059 19.5881 87.9867 20.1979 87.0852 20.642C86.1903 21.0862 85.1396 21.3082 83.9332 21.3082ZM101.089 21.3082C99.5843 21.3082 98.2884 20.9867 97.2013 20.3438C96.1208 19.6941 95.2855 18.7827 94.6956 17.6094C94.1123 16.4295 93.8206 15.0473 93.8206 13.4631C93.8206 11.8987 94.1123 10.5199 94.6956 9.3267C95.2855 8.13352 96.1075 7.20218 97.1615 6.53267C98.2221 5.86316 99.4617 5.52841 100.88 5.52841C101.742 5.52841 102.577 5.67093 103.386 5.95597C104.195 6.241 104.92 6.68845 105.563 7.2983C106.206 7.90814 106.714 8.70028 107.085 9.67472C107.456 10.6425 107.642 11.8191 107.642 13.2045V14.2585H95.501V12.0312H104.728C104.728 11.2491 104.569 10.5563 104.251 9.95312C103.933 9.34328 103.485 8.86269 102.909 8.51136C102.339 8.16004 101.669 7.98438 100.9 7.98438C100.065 7.98438 99.3357 8.18987 98.7126 8.60085C98.0962 9.00521 97.6189 9.53551 97.2808 10.1918C96.9494 10.8414 96.7837 11.5473 96.7837 12.3097V14.0497C96.7837 15.0705 96.9626 15.9389 97.3206 16.6548C97.6852 17.3707 98.1923 17.9176 98.8419 18.2955C99.4915 18.6667 100.251 18.8523 101.119 18.8523C101.682 18.8523 102.196 18.7727 102.66 18.6136C103.124 18.4479 103.525 18.2027 103.863 17.8778C104.201 17.553 104.46 17.152 104.639 16.6747L107.453 17.1818C107.227 18.0104 106.823 18.7363 106.24 19.3594C105.663 19.9759 104.937 20.4564 104.062 20.8011C103.194 21.1392 102.203 21.3082 101.089 21.3082Z"
								fill="white" />
						</svg> --}}
                        <a href="{{ route('backend-dashboard') }}">
                            <img src="{{ asset_dir('admin/img/logo-7.png') }}" >
                        </a>
					</div>
				</div>
				<div class="offcanvas-body">
					<div id="sidebar" class="sidebar">
						<div class="sidebar-container"></div>
						<ul class="sidebar-nav" id="sidebar-nav">
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-dashboard') }}">
									<svg class="" width="22" height="22" viewBox="0 0 22 22"
										fill="#151515" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.5 18.8332V9.6665" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M11 18.8332V4.1665" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M5.5 18.8335V13.3335" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span class="">{{ __('backend/dashboard.title') }}</span>
								</a>
							</li>
							<!-- End Overview Nav -->

							<li class="nav-item">
								<div class="nav-link collapsed">
									<a class="nav-link collapsed" href="product.html">
										<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M5.5 2.3335L2.75 6.00016V18.8335C2.75 19.3197 2.94315 19.786 3.28697 20.1299C3.63079 20.4737 4.0971 20.6668 4.58333 20.6668H17.4167C17.9029 20.6668 18.3692 20.4737 18.713 20.1299C19.0568 19.786 19.25 19.3197 19.25 18.8335V6.00016L16.5 2.3335H5.5Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M2.75 6H19.25" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path
												d="M14.6663 9.6665C14.6663 10.639 14.28 11.5716 13.5924 12.2592C12.9048 12.9469 11.9721 13.3332 10.9997 13.3332C10.0272 13.3332 9.09458 12.9469 8.40695 12.2592C7.71932 11.5716 7.33301 10.639 7.33301 9.6665"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>Products</span>
									</a>
									<div class="noti-arrow">
										<svg data-bs-target="#products-nav" data-bs-toggle="collapse"
											class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"
											fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"
												fill="#7D7D7D" />
										</svg>
									</div>
								</div>

								<ul id="products-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
									<li>
										<a href="databaseBulk.html">Database</a>
									</li>
								</ul>
							</li>
							<!-- End Products Nav -->

							<li class="nav-item">
								<div class="nav-link collapsed">
									<a class="nav-link collapsed" href="{{ route('backend-management-users') }}">
										<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11.0003 12.4167C13.5316 12.4167 15.5837 10.3646 15.5837 7.83333C15.5837 5.30203 13.5316 3.25 11.0003 3.25C8.46902 3.25 6.41699 5.30203 6.41699 7.83333C6.41699 10.3646 8.46902 12.4167 11.0003 12.4167Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.3337 19.7498C18.3337 17.8049 17.561 15.9397 16.1858 14.5644C14.8105 13.1891 12.9452 12.4165 11.0003 12.4165C9.0554 12.4165 7.19014 13.1891 5.81488 14.5644C4.43961 15.9397 3.66699 17.8049 3.66699 19.7498"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
										<span>{{ __('backend/management.users.title') }}</span>
									</a>
									<div class="noti-arrow">
										<div class="noti-box noti-display-none">
											<div>2</div>
										</div>
										<svg data-bs-target="#customers-nav" data-bs-toggle="collapse"
											class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"
											fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"
												fill="#7D7D7D" />
										</svg>
									</div>
								</div>

								<ul id="customers-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
									<li>
										<a href="customerAllticker.html">Customer all Tickers</a>
									</li>
									<li>
										<a href="customerAllOrder.html">Customer all Order</a>
									</li>
								</ul>
							</li>
							<!-- End Customers Nav -->

							<li class="nav-item">
								<a class="nav-link collapsed" href="order.html">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M3.66699 18.3752C3.66699 17.7674 3.90843 17.1845 4.33821 16.7547C4.76798 16.3249 5.35087 16.0835 5.95866 16.0835H18.3337"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M5.95866 2.3335H18.3337V20.6668H5.95866C5.35087 20.6668 4.76798 20.4254 4.33821 19.9956C3.90843 19.5658 3.66699 18.9829 3.66699 18.3752V4.62516C3.66699 4.01737 3.90843 3.43448 4.33821 3.00471C4.76798 2.57494 5.35087 2.3335 5.95866 2.3335Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>Orders</span>
									<div class="noti-arrow">
										<div class="noti-box">
											<div style="color: white;font-size: 16px;font-family: Inter;font-weight: 500;word-wrap: break-word;">
												2
											</div>
										</div>
										<svg data-bs-target="#orders-nav" data-bs-toggle="collapse"
											class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"
											fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"
												fill="#7D7D7D" />
										</svg>
									</div>
								</a>
								<ul id="orders-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
									<li>
										<a href="#">Lorem ipsum</a>
									</li>
									<li>
										<a href="#">Lorem ipsum</a>
									</li>
								</ul>
							</li>
							<!-- End Orders Nav -->

							<li class="nav-item">
								<a class="nav-link collapsed" href="#">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M19.25 15.1669V7.83357C19.2497 7.51207 19.1648 7.19631 19.0039 6.91797C18.843 6.63962 18.6118 6.40849 18.3333 6.24774L11.9167 2.58107C11.638 2.42016 11.3218 2.33545 11 2.33545C10.6782 2.33545 10.362 2.42016 10.0833 2.58107L3.66667 6.24774C3.38824 6.40849 3.15698 6.63962 2.99609 6.91797C2.8352 7.19631 2.75033 7.51207 2.75 7.83357V15.1669C2.75033 15.4884 2.8352 15.8042 2.99609 16.0825C3.15698 16.3608 3.38824 16.592 3.66667 16.7527L10.0833 20.4194C10.362 20.5803 10.6782 20.665 11 20.665C11.3218 20.665 11.638 20.5803 11.9167 20.4194L18.3333 16.7527C18.6118 16.592 18.843 16.3608 19.0039 16.0825C19.1648 15.8042 19.2497 15.4884 19.25 15.1669Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M11 14.25C12.5188 14.25 13.75 13.0188 13.75 11.5C13.75 9.98122 12.5188 8.75 11 8.75C9.48122 8.75 8.25 9.98122 8.25 11.5C8.25 13.0188 9.48122 14.25 11 14.25Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>{{ __('backend/system.settings.title') }}</span>
								</a>
							</li>
							<!-- End Settings Nav -->

							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-system-payments') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10.9997 20.6668C16.0623 20.6668 20.1663 16.5628 20.1663 11.5002C20.1663 6.43755 16.0623 2.3335 10.9997 2.3335C5.93706 2.3335 1.83301 6.43755 1.83301 11.5002C1.83301 16.5628 5.93706 20.6668 10.9997 20.6668Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M14.6663 7.8335H9.16634C8.68011 7.8335 8.2138 8.02665 7.86998 8.37047C7.52616 8.71428 7.33301 9.1806 7.33301 9.66683C7.33301 10.1531 7.52616 10.6194 7.86998 10.9632C8.2138 11.307 8.68011 11.5002 9.16634 11.5002H12.833C13.3192 11.5002 13.7856 11.6933 14.1294 12.0371C14.4732 12.381 14.6663 12.8473 14.6663 13.3335C14.6663 13.8197 14.4732 14.286 14.1294 14.6299C13.7856 14.9737 13.3192 15.1668 12.833 15.1668H7.33301"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M11 17V6" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span>{{ __('backend/system.payments.title') }}</span>
								</a>
							</li>
							<!-- End Payments Nav -->
							<li class="nav-item">
								<div class="nav-link collapsed">
									<a class="nav-link collapsed" href="tickets.html">
										<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2.75 6.91683V8.75016C3.47935 8.75016 4.17882 9.03989 4.69454 9.55562C5.21027 10.0713 5.5 10.7708 5.5 11.5002C5.5 12.2295 5.21027 12.929 4.69454 13.4447C4.17882 13.9604 3.47935 14.2502 2.75 14.2502V16.0835C2.75 17.0918 3.575 17.9168 4.58333 17.9168H17.4167C17.9029 17.9168 18.3692 17.7237 18.713 17.3799C19.0568 17.036 19.25 16.5697 19.25 16.0835V14.2502C18.5207 14.2502 17.8212 13.9604 17.3055 13.4447C16.7897 12.929 16.5 12.2295 16.5 11.5002C16.5 10.7708 16.7897 10.0713 17.3055 9.55562C17.8212 9.03989 18.5207 8.75016 19.25 8.75016V6.91683C19.25 6.4306 19.0568 5.96428 18.713 5.62047C18.3692 5.27665 17.9029 5.0835 17.4167 5.0835H4.58333C4.0971 5.0835 3.63079 5.27665 3.28697 5.62047C2.94315 5.96428 2.75 6.4306 2.75 6.91683Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M11.917 5.0835V6.91683" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M11.917 16.0835V17.9168" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
											<path d="M11.917 10.5835V12.4168" stroke="#BBBBBB" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span>{{ __('backend/management.tickets.title') }}</span>
									</a>
									<div class="noti-arrow">
										<div class="noti-box noti-display-none">
											<div style="
                            color: white;
                            font-size: 16px;
                            font-family: Inter;
                            font-weight: 500;
                            word-wrap: break-word;
                          ">
												2
											</div>
										</div>
										<div data-bs-target="#tickets-nav" data-bs-toggle="collapse">
											<svg class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"
													fill="#7D7D7D" />
											</svg>
										</div>
									</div>
								</div>
								<ul id="tickets-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
									<li>
										<a href="ticketCategoty.html">Category</a>
									</li>
								</ul>
							</li>
							<!-- End Tickets Nav -->
							<li class="nav-item">
								<a class="nav-link collapsed" href="{{ route('backend-management-faqs') }}">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10.9997 20.6668C16.0623 20.6668 20.1663 16.5628 20.1663 11.5002C20.1663 6.43755 16.0623 2.3335 10.9997 2.3335C5.93706 2.3335 1.83301 6.43755 1.83301 11.5002C1.83301 16.5628 5.93706 20.6668 10.9997 20.6668Z"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path
											d="M8.33203 8.75003C8.54754 8.1374 8.97292 7.6208 9.53282 7.29174C10.0927 6.96268 10.751 6.84239 11.3911 6.95219C12.0312 7.06198 12.6118 7.39476 13.03 7.8916C13.4483 8.38844 13.6772 9.01726 13.6762 9.6667C13.6762 11.5 10.9262 12.4167 10.9262 12.4167"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M11 16.0835H11.01" stroke="#BBBBBB" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round" />
									</svg>
									<span>FAQs</span>
									<div class="noti-arrow">
										<div class="noti-box noti-display-none">
											<div style="
                            color: white;
                            font-size: 16px;
                            font-family: Inter;
                            font-weight: 500;
                            word-wrap: break-word;
                          ">
												2
											</div>
										</div>
										<div>
											<svg data-bs-target="#FAQs-nav" data-bs-toggle="collapse"
												class="collapsed-arrow" width="22" height="22" viewBox="0 0 22 22"
												fill="none" xmlns="http://www.w3.org/2000/svg">
												<path
													d="M10.9997 15.1665C11.3664 15.1665 11.7331 14.9832 11.9164 14.7998L17.9664 8.74984C18.5164 8.19984 18.5164 7.28317 17.9664 6.73317C17.4164 6.18317 16.4997 6.18317 15.9497 6.73317L10.9997 11.6832L6.04974 6.73317C5.49974 6.18317 4.58307 6.18317 4.03307 6.73317C3.48307 7.28317 3.48307 8.19984 4.03307 8.74984L9.89974 14.6165C10.2664 14.9832 10.6331 15.1665 10.9997 15.1665Z"
													fill="#7D7D7D" />
											</svg>
										</div>
									</div>
								</a>
								<ul id="FAQs-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
									<li>
										<a href="FAQsCategories.html">Category</a>
									</li>
								</ul>
							</li>
							<!-- End FAQs Nav -->
						</ul>
						<ul class="sidebar-footer">
							<li class="foot-item foot-i1">
								<a class="foot-link side-bar-menu-item" href="#">Help</a>
							</li>
							<li class="foot-item foot-i2">
								<a class="foot-link side-bar-menu-item" href="#">Contact us</a>
							</li>
							<li class="foot-item">
								<a href="{{ route('backend-logout') }}" class="foot-link">
									<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M8.25 19.75H4.58333C4.0971 19.75 3.63079 19.5568 3.28697 19.213C2.94315 18.8692 2.75 18.4029 2.75 17.9167V5.08333C2.75 4.5971 2.94315 4.13079 3.28697 3.78697C3.63079 3.44315 4.0971 3.25 4.58333 3.25H8.25"
											stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M14.667 16.0832L19.2503 11.4998L14.667 6.9165" stroke="#BBBBBB"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M19.25 11.5H8.25" stroke="#BBBBBB" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round" />
									</svg>
									<span class="side-bar-menu-item">Log out</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- content -->
			<div class="app-main__outer">
				<!-- canvas-notify-header -->
				<div class="offcanvas offcanvas-start off-canvas-noti" tabindex="-1" id="offcanvasBottom"
					aria-labelledby="offcanvasBottomLabel">
					<div class="offcanvas-header d-flex align-items-center">
						<h5 class="offcanvas-title-notify" id="offcanvasBottomLabel">
							{{ __('backend/header.notifications.title') }}
						</h5>
						<svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
							xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path
								d="M6.7072 5.29289C6.31668 4.90237 5.68351 4.90237 5.29299 5.29289C4.90246 5.68342 4.90246 6.31658 5.29299 6.70711L10.5858 12L5.29289 17.2929C4.90237 17.6834 4.90237 18.3166 5.29289 18.7071C5.68342 19.0976 6.31658 19.0976 6.70711 18.7071L12 13.4142L17.293 18.7071C17.6835 19.0976 18.3167 19.0976 18.7072 18.7071C19.0977 18.3166 19.0977 17.6834 18.7072 17.2929L13.4143 12L18.7071 6.70711C19.0976 6.31658 19.0976 5.68342 18.7071 5.29289C18.3166 4.90237 17.6834 4.90237 17.2929 5.29289L12 10.5857L6.7072 5.29289Z"
								fill="#6F767E" />
						</svg>
					</div>
					<div class="offcanvas-body small">
						<ul class="background-dropdow">
							<li>
								<a class="dropdown-item" href="#">
									<div class="d-flex gap-3">
										<div>
											<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}" alt="" />
										</div>
										<div>
											<div class="title-noti">Lorem ipsum dolor sit amet</div>

											<div class="d-flex align-items-center">
												<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}" alt="" />
												<span class="detail-time">2020-05-04 09:18:16 PM</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">
									<div class="d-flex gap-3">
										<div>
											<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}" alt="" />
										</div>
										<div>
											<div class="title-noti">Lorem ipsum dolor sit amet</div>

											<div class="d-flex align-items-center">
												<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}" alt="" />
												<span class="detail-time">2020-05-04 09:18:16 PM</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">
									<div class="d-flex gap-3">
										<div>
											<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_buyed.svg')}}" alt="" />
										</div>
										<div>
											<div class="title-noti">Lorem ipsum dolor sit amet</div>

											<div class="d-flex align-items-center">
												<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}" alt="" />
												<span class="detail-time">2020-05-04 09:18:16 PM</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">
									<div class="d-flex gap-3">
										<div>
											<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}" alt="" />
										</div>
										<div>
											<div class="title-noti">
												consectetur adipiscing elit
											</div>

											<div class="d-flex align-items-center">
												<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}" alt="" />
												<span class="detail-time">2020-05-04 09:18:16 PM</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">
									<div class="d-flex gap-3">
										<div>
											<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}" alt="" />
										</div>
										<div>
											<div class="title-noti">
												Lorem ipsum dolor sit amet, consectetur adipiscing
												elit
											</div>

											<div class="d-flex align-items-center">
												<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}" alt="" />
												<span class="detail-time">2020-05-04 09:18:16 PM</span>
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">
									<div class="d-flex gap-3">
										<div>
											<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}" alt="" />
										</div>
										<div>
											<div class="title-noti">
												consectetur adipiscing elit
											</div>

											<div class="d-flex align-items-center">
												<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}" alt="" />
												<span class="detail-time">2020-05-04 09:18:16 PM</span>
											</div>
										</div>
									</div>
								</a>
							</li>
                            <li>
								<a class="dropdown-item" href="{{ route('backend-notifications') }}">
									<div class="d-flex gap-3">
										<div>
											<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}" alt="" />
										</div>
										<div>
											<div class="title-noti">
												Alle Benachrichtigungen
											</div>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- header -->
				<div class="row header">
					<div class="col d-none d-md-block">
						@hasSection('title')
							<h1 class="title-header">@yield('title') <a href="{{ route('shop') }}" target="_shop" class="btn-go-to-shop goshop_link" style="text-decoration: none;
								color: #000;padding: 8px 10px;font-weight: 400;">{{ __('backend/header.go_to_shop') }}</a></h1>
						@else
							@if(Route::currentRouteName()=="backend-dashboard")
								<h1 class="title-header">Welcome back, {{Auth::user()->name}} </h1>
								<p class="wellcom-user-sub">
									Here’s what’s happening with your store today.
								</p>
							@endif
						@endif
					</div>
					<div class="col d-flex d-md-none">
						<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
							aria-controls="staticBackdrop">
							<svg class="btn-offcanvas" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
								fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M2.9502 6.99421C2.9502 6.41752 3.4177 5.95001 3.99439 5.95001H19.906C20.4827 5.95001 20.9502 6.41752 20.9502 6.99421C20.9502 7.57091 20.4827 8.03841 19.906 8.03841H3.99439C3.4177 8.03841 2.9502 7.57091 2.9502 6.99421ZM2.9502 11.9666C2.9502 11.3899 3.4177 10.9224 3.99439 10.9224H13.9391C14.5158 10.9224 14.9833 11.3899 14.9833 11.9666C14.9833 12.5433 14.5158 13.0108 13.9391 13.0108H3.99439C3.4177 13.0108 2.9502 12.5433 2.9502 11.9666ZM2.9502 16.939C2.9502 16.3623 3.4177 15.8948 3.99439 15.8948H17.917C18.4937 15.8948 18.9612 16.3623 18.9612 16.939C18.9612 17.5157 18.4937 17.9832 17.917 17.9832H3.99439C3.4177 17.9832 2.9502 17.5157 2.9502 16.939Z"
									fill="white" />
							</svg>
						</button>
					</div>
					<div class="col d-flex justify-content-end">
                        @php( $notificationsCount = App\Models\Notification::where('readed', 'false')->get()->count())
						<!-- notify-mobile -->
						<div class="notification d-block d-md-none">
							<svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
								aria-controls="offcanvasBottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
								fill="none" class="ic-header">
								<path
									d="M8 10.6667C8 8.54496 8.84286 6.51012 10.3431 5.00983C11.8434 3.50954 13.8783 2.66669 16 2.66669C18.1217 2.66669 20.1566 3.50954 21.6569 5.00983C23.1571 6.51012 24 8.54496 24 10.6667C24 20 28 22.6667 28 22.6667H4C4 22.6667 8 20 8 10.6667Z"
									stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
								<path
									d="M13.7334 28C13.9566 28.4059 14.2847 28.7445 14.6834 28.9803C15.0821 29.216 15.5368 29.3404 16.0001 29.3404C16.4633 29.3404 16.918 29.216 17.3167 28.9803C17.7155 28.7445 18.0436 28.4059 18.2667 28"
									stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    @if($notificationsCount>0)
                                        <circle class="d-none d-md-block" cx="21.5" cy="8.5" r="5.5" fill="#DA5538" />
                                        <circle class="d-block d-md-none" cy="5" cx="21.5" r="4" fill="#DA5538" stroke="#151515"
                                            stroke-width="1.4" />
                                    @endif
							</svg>
						</div>
						<!-- notify-pc -->
						<div class="notification d-none d-md-block">
							<div class="dropdown user-dropdown">
								<svg id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"
									xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none"
									class="ic-header">
									<path
										d="M8 10.6667C8 8.54496 8.84286 6.51012 10.3431 5.00983C11.8434 3.50954 13.8783 2.66669 16 2.66669C18.1217 2.66669 20.1566 3.50954 21.6569 5.00983C23.1571 6.51012 24 8.54496 24 10.6667C24 20 28 22.6667 28 22.6667H4C4 22.6667 8 20 8 10.6667Z"
										stroke="white" stroke-width="3" stroke-linecap="round"
										stroke-linejoin="round" />
									<path
										d="M13.7334 28C13.9566 28.4059 14.2847 28.7445 14.6834 28.9803C15.0821 29.216 15.5368 29.3404 16.0001 29.3404C16.4633 29.3404 16.918 29.216 17.3167 28.9803C17.7155 28.7445 18.0436 28.4059 18.2667 28"
										stroke="white" stroke-width="3" stroke-linecap="round"
										stroke-linejoin="round" />
                                    @if($notificationsCount>0)
                                        <circle class="d-none d-md-block" cx="21.5" cy="8.5" r="5.5" fill="#DA5538" />
                                        <circle class="d-block d-md-none" cy="5" cx="21.5" r="4" fill="#DA5538"
										stroke="#151515" stroke-width="1.4" />
                                    @endif
								</svg>
								<div class="dropdown-menu dropdown-menu-dark drop-user dropdown-menu-lg-end dropdow-noti" >
									<ul class="background-dropdow" id="notifications-content">
										<li>
											<a class="dropdown-item" href="#">
												<div class="d-flex gap-3">
													<div>
														<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}"
															alt="" />
													</div>
													<div>
														<div class="title-noti">
															Lorem ipsum dolor sit amet
														</div>

														<div class="d-flex align-items-center">
															<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}"
																alt="" />
															<span class="detail-time">2020-05-04 09:18:16 PM</span>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#">
												<div class="d-flex gap-3">
													<div>
														<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_buyed.svg')}}"
															alt="" />
													</div>
													<div>
														<p class="title-noti">
															Lorem ipsum dolor sit amet
														</p>

														<div class="d-flex align-items-center">
															<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}"
																alt="" />
															<span class="detail-time">2020-05-04 09:18:16 PM</span>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#">
												<div class="d-flex gap-3">
													<div>
														<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}"
															alt="" />
													</div>
													<div>
														<div class="title-noti">
															consectetur adipiscing elit
														</div>

														<div class="d-flex align-items-center">
															<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}"
																alt="" />
															<span class="detail-time">2020-05-04 09:18:16 PM</span>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#">
												<div class="d-flex gap-3">
													<div>
														<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}"
															alt="" />
													</div>
													<div>
														<div class="title-noti">
															consectetur adipiscing elit
														</div>

														<div class="d-flex align-items-center">
															<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}"
																alt="" />
															<span class="detail-time">2020-05-04 09:18:16 PM</span>
														</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#">
												<div class="d-flex gap-3">
													<div>
														<img class="ic_noti_detail" src="{{ asset_dir('admin/img/ic_mark.svg')}}"
															alt="" />
													</div>
													<div>
														<div class="title-noti">
															consectetur adipiscing elit
														</div>

														<div class="d-flex align-items-center">
															<img class="ic_time" src="{{ asset_dir('admin/img/ic-time.svg')}}"
																alt="" />
															<span class="detail-time">2020-05-04 09:18:16 PM</span>
														</div>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				@if (\Session::has('errorMessage'))
					<div class="alert alert-danger fade show mt-4" role="alert">
						<div class="alert-text">
							{!! \Session::get('errorMessage') !!}
						</div>
						{{-- <div class="alert-close">
							<button type="button" class="close" data-dismiss="alert"
								aria-label="{{ __('frontend/main.close') }}">
								<span aria-hidden="true"><i class="la la-close"></i></span>
							</button>
						</div> --}}
					</div>
				@endif

				@if (\Session::has('successMessage'))
					<div class="alert alert-success fade show mt-4" role="alert">
						<div class="alert-text">
							{!! \Session::get('successMessage') !!}
						</div>
						{{-- <div class="alert-close">
							<button type="button" class="close" data-dismiss="alert"
								aria-label="{{ __('frontend/main.close') }}">
								<span aria-hidden="true"><i class="la la-close"></i></span>
							</button>
						</div> --}}
					</div>
				@endif
                @section('content')
                @show
			</div>
		</div>
	</section>

	<!-- End Sidebar-->
	<script src="{{ asset_dir('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.0/dist/apexcharts.min.js"></script>
    <script src="{{ asset_dir('admin/vendor/jquery/dist/jquery.js') }}" type="text/javascript"></script>

	<link href="{{ asset_dir('admin/vendor/froala-editor/css/froala_editor.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_dir('admin/vendor/froala-editor/css/froala_style.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_dir('admin/vendor/froala-editor/css/themes/gray.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_dir('admin/vendor/froala-editor/css/plugins/code_view.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_dir('admin/vendor/froala-editor/css/plugins/colors.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_dir('admin/vendor/froala-editor/css/plugins/emoticons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_dir('admin/vendor/froala-editor/css/plugins/image.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_dir('admin/vendor/froala-editor/css/plugins/quick_insert.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_dir('admin/vendor/froala-editor/css/plugins/table.min.css') }}" rel="stylesheet"
        type="text/css" />

    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/froala_editor.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/languages/de.js') }}"></script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/quick_insert.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/image.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/font_size.js') }}"></script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/font_family.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/emoticons.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/colors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/code_view.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/align.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/table.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset_dir('admin/vendor/froala-editor/js/plugins/link.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            var pgurl = window.location.href.replace(/\/categories\/page\/\d+/, '').replace(/\/page\/\d+/, '').replace(/\/edit\/\d+/, 's');
            console.log(pgurl);
            $("#sidebar-nav .nav-link").each(function(){
                //console.log($(this).attr("href"));
                if($(this).attr("href") == pgurl){
                    $(this).find("svg").addClass("nav-link-icon-active");
                    $(this).find("span").addClass("nav-link-name-active");
                }else{
                    //$(this).find("svg").removeClass("nav-link-icon-active");
                    //$(this).find("span").removeClass("nav-link-name-active");
                }
            });
        });
    </script>
	{{-- <script>
		// Define your data series
		var series = [70, 10, 20];

		// Calculate the total value
		var total = series.reduce((acc, val) => acc + val, 0);
		// Define your data
		var options = {
			series: series,
			chart: {
				type: "donut",
				height: 400,
			},
			labels: ["Electronics", "Laptops", "iPhones"],
			dataLabels: {
				enabled: false,
			},
			stroke: {
				show: false,
			},

			title: {
				text: "Sales by category",
				margin: 50,
				offsetX: 10,
				offsetY: 0,
				floating: false,
				style: {
					fontSize: "1.2727272727272727rem",
					fontWeight: "bold",
					fontFamily: "Inter",
					color: "#FFF",
				},
			},
			legend: {
				position: "bottom",
				horizontalAlign: "bottom",
				offsetY: 0,
				fontSize: "14rem",
				showForSingleSeries: true,
				floating: false,
				width: 160,
				height: 90,

				markers: {
					width: 8,
					height: 8,
					radius: 12,
					offsetX: 0,
					offsetY: 0,
				},
			},
			colors: ["#DA5538", "#2A4B52", "#D3F56A"], // Colors for each donut slice
		};

		// Create the donut chart
		var chart = new ApexCharts(document.querySelector("#chart"), options);

		// Render the chart
		chart.render();
	</script> --}}

	{{-- <script>
		// Define your data series
		var series = [
			{
				name: "Revenue",
				data: [
					8000, 3444, 2222, 4232, 4555, 8544, 7444, 6000, 4536, 2456, 1333,
					2444,
				],
			},
			{
				name: "Orders",
				data: [
					2334, 4335, 8976, 6645, 1004, 5523, 3333, 4033, 3222, 5333, 4556,
					6432,
				],
			},
		];

		// Define your chart options
		var optionsreve = {
			chart: {
				height: 350,
				type: "line",
				stacked: false,
				zoom: {
					enabled: false, // Disable zoom
				},
				toolbar: {
					show: false,
				},
			},
			dataLabels: {
				enabled: false,
			},
			noData: {
				text: "No data available", // Optional message when there is no data
			},
			colors: ["#DA5538", "#D3F56A"],
			series: series,
			stroke: {
				width: [4, 4],
			},
			tooltip: {
				custom: function ({ seriesIndex, dataPointIndex, ctx }) {
					// Return today's date and time
					var currentTime = new Date();
					// returns the year (four digits)
					var year = currentTime.getFullYear();
					var xLabel = ctx.w.globals.categoryLabels[dataPointIndex]; // Get the x-axis label
					var yValue = ctx.w.globals.series[seriesIndex][
						dataPointIndex
					].toLocaleString("en-US", {
						style: "currency",
						currency: "USD",
						minimumFractionDigits: 2,
					}); // Get the y-axis value
					return (
						'<div class="custom-tooltip"><div class="custom-tooltip-day">' +
						xLabel +
						". " +
						year +
						'</div> <div class="custom-tooltip-value">' +
						yValue +
						"</div></div>"
					);
				},
				shared: false, // Disable shared tooltip
			},
			xaxis: {
				categories: [
					"Jan",
					"Feb",
					"Mar",
					"Apr",
					"May",
					"Jun",
					"Jul",
					"Aug",
					"Sep",
					"Oct",
					"Nov",
					"Dec",
				],
				axisBorder: {
					color: "#303030", // Set the color of the x-axis line
				},
				grid: {
					show: false, // Hide x-axis ticks (grid lines)
				},
				axisTicks: {
					show: false,
				},
				labels: {
					style: {
						margin: 20, // Add margin to the x-axis labels
					},
				}
			},
			legend: {
				position: "top",
				horizontalAlign: "right",
				offsetY: -15,
				fontSize: "14rem",
				showForSingleSeries: true,
				floating: false,
				labels: "#7D7D7D",
				tooltipHoverFormatter: function (seriesName, opts) {
					return (seriesName);
				},
				markers: {
					width: 8,
					height: 8,
					radius: 12,
					offsetX: 0,
					offsetY: 0,
				},
			},
			stroke: {
				show: true,
				curve: "smooth",
				lineCap: "butt",
				colors: undefined,
				width: 2,
				dashArray: 0,
			},
			title: {
				text: "Revenue vs Orders",
				align: "left",
				margin: 0,
				offsetX: 10,
				offsetY: 40,
				floating: false,
				style: {
					fontSize: "1.2727272727272727rem",
					fontWeight: "bold",
					fontFamily: "Inter",
					color: "#FFF",
				},
			},
			grid: {
				show: true,
				borderColor: "#303030",
				strokeDashArray: 2,
				position: "back",
				xaxis: {
					lines: {
						show: false,
					},

				},
				yaxis: {
					lines: {
						show: true,
					},
				},
				padding: {
					top: 0,
					right: 10,
					bottom: 10,
					left: 20,
				},
			},
		};

		var chartreve = new ApexCharts(
			document.querySelector("#chart-revenue-and-orders"),
			optionsreve
		);


		chartreve.render();

		// Add a custom class to the x-axis tooltip text
		const xaxisTooltipText = document.querySelector('.apexcharts-xaxistooltip text');
		xaxisTooltipText.classList.add('custom-tooltip-text');
	</script> --}}

@section('page_scripts')

@show
<!--end::Page Scripts -->
</body>

</html>