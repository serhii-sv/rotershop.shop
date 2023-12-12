<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        @if(isset($productCategory) && $productCategory != null && !$productCategoryUncategorized)
        @include('meta::manager', [
            'title'         => config('app.name') . ' - ' . $productCategory->name,
            'description'   => $productCategory->meta_tags_desc,
            'keywords'   => $productCategory->keywords
        ])
        @else
        @include('meta::manager', [
            'title'         => $metaTITLE ?? config('app.name'),
            'description'   => $metaDESC ?? '',
            'keywords'   => $metaKEYS ?? ''
        ])
        @endif

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

        <link rel="icon" href="@if(strlen(App\Models\Setting::get('theme.favicon')) > 0){{ App\Models\Setting::get('theme.favicon') }}@else{{ asset_dir('favicon.svg') }}@endif" sizes="any" />

        <!-- Bootstrap -->
        <link href="{{ asset_dir('vendor/bootstrap-4.1.3/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset_dir('css/app.css') }}" rel="stylesheet" />
        
        @if(App\Models\Setting::get('theme.color.enable', 0))
        <link href="{{ route('custom-colors') }}" rel="stylesheet" />
        @endif

        @if(strlen(App\Models\Setting::get('theme.background')) > 0)
        <style type="text/css">
            body {
                background-image: url('{{ App\Models\Setting::get('theme.background') }}');
            }
        </style>
        @endif

        <link href="{{ asset_dir('css/theme.css') }}" rel="stylesheet" />

        <link href="{{ route('custom-css') }}" rel="stylesheet" />

        <!-- Custom CSS -->
		<link href="{{ asset_dir('css/custom.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset_dir('admin/vendor/jquery/dist/jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset_dir('admin/vendor/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>

        
    </head>
    <body>
        <div id="app">
            <div class="">
                <div class="">
                    <div class="">
                        <nav class="navbar navbar-expand-lg navbar-light nav-shop nav-log">
                            <div class="container">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    @if(strlen(App\Models\Setting::get('theme.logo')) > 0)
                                    <img src="{{ App\Models\Setting::get('theme.logo') }}" alt="logo" style="max-width: 200px;" />
                                    @else
                                    {{ config('app.name') }}
                                    @endif
                                </a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('frontend/main.toggle_navigation') }}">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/') }}">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 12.1631C4 10.3324 4 9.41702 4.41536 8.65819C4.83072 7.89937 5.58956 7.42841 7.10723 6.4865L8.70723 5.4935C10.3115 4.49783 11.1137 4 12 4C12.8863 4 13.6885 4.49783 15.2928 5.4935L16.8928 6.4865C18.4104 7.42841 19.1693 7.89937 19.5846 8.65819C20 9.41702 20 10.3324 20 12.1631V13.38C20 16.5007 20 18.061 19.0627 19.0305C18.1255 20 16.617 20 13.6 20H10.4C7.38301 20 5.87452 20 4.93726 19.0305C4 18.061 4 16.5007 4 13.38V12.1631Z" stroke="#7D8A9B" stroke-width="1.8"></path>
                                                <path d="M12 14L12 16" stroke="#7D8A9B" stroke-width="1.8" stroke-linecap="round"></path>
                                            </svg>
                                                <span>{{ __('frontend/main.home') }}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('shop') }}">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.74941 18.5545C4.94791 20 7.17852 20 11.6397 20H12.3603C16.8215 20 19.0521 20 20.2506 18.5545M3.74941 18.5545C2.55091 17.1091 2.96198 14.9146 3.78414 10.5257C4.36881 7.40452 4.66115 5.84393 5.771 4.92196M3.74941 18.5545C3.74941 18.5545 3.74941 18.5545 3.74941 18.5545ZM20.2506 18.5545C21.4491 17.1091 21.038 14.9146 20.2159 10.5257C19.6312 7.40452 19.3389 5.84393 18.229 4.92196M20.2506 18.5545C20.2506 18.5545 20.2506 18.5545 20.2506 18.5545ZM18.229 4.92196C17.1191 4 15.5328 4 12.3603 4H11.6397C8.46716 4 6.88086 4 5.771 4.92196M18.229 4.92196C18.229 4.92196 18.229 4.92196 18.229 4.92196ZM5.771 4.92196C5.771 4.92196 5.77101 4.92196 5.771 4.92196Z" stroke="#7D8A9B" stroke-width="1.5"></path>
                                            <path d="M9 8C9.43668 9.16519 10.615 10 12 10C13.385 10 14.5633 9.16519 15 8" stroke="#7D8A9B" stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                            <span>{{ __('frontend/main.shop') }}</span>    
                                        </a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('faq') }}">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="9" stroke="#7D8A9B" stroke-width="1.5"></circle>
                                            <path d="M14.0688 11.0224L14.0697 11.0213C14.2934 10.7136 14.45 10.3033 14.45 9.68841C14.45 8.34601 13.3448 7.27536 12 7.27536C10.6552 7.27536 9.55 8.34601 9.55 9.68841C9.55 9.7218 9.53657 9.75581 9.50946 9.78239L9.8465 10.1259L9.50946 9.7824C9.48204 9.8093 9.44284 9.82609 9.4 9.82609C9.35716 9.82609 9.31796 9.8093 9.29054 9.7824L8.94038 10.1393L9.29054 9.78239C9.26343 9.75581 9.25 9.7218 9.25 9.68841C9.25 8.97852 9.53736 8.29572 10.0521 7.79078C10.5671 7.28552 11.2676 7 12 7C12.7324 7 13.4329 7.28552 13.9479 7.79078C14.4626 8.29572 14.75 8.97852 14.75 9.68841C14.75 10.3497 14.5815 10.8154 14.3186 11.1735L14.3173 11.1752C14.0581 11.5312 13.7128 11.7733 13.3895 11.9907L13.3895 11.9906L13.386 11.993L13.3531 12.0156C13.3418 12.0232 13.3305 12.0308 13.3192 12.0384C13.0187 12.2407 12.7397 12.4286 12.5261 12.6847L12.5261 12.6847L12.5239 12.6873C12.3039 12.9546 12.15 13.3023 12.15 13.8333V14.1522C12.15 14.1856 12.1366 14.2196 12.1095 14.2462C12.082 14.2731 12.0428 14.2899 12 14.2899C11.9572 14.2899 11.918 14.2731 11.8905 14.2462C11.8634 14.2196 11.85 14.1856 11.85 14.1522V13.8333C11.85 13.2476 12.0215 12.8394 12.2867 12.5195C12.5231 12.2344 12.8363 12.021 13.1338 11.8213L13.2074 11.7727L13.2074 11.7727L13.2123 11.7694C13.5354 11.5508 13.841 11.3339 14.0688 11.0224ZM12.2244 16.9096C12.1665 16.9664 12.0859 17 12 17C11.9141 17 11.8335 16.9664 11.7756 16.9096C11.7181 16.8531 11.6875 16.7786 11.6875 16.7029C11.6875 16.6272 11.7181 16.5527 11.7756 16.4962C11.8335 16.4394 11.9141 16.4058 12 16.4058C12.0859 16.4058 12.1665 16.4394 12.2244 16.4962C12.2819 16.5527 12.3125 16.6272 12.3125 16.7029C12.3125 16.7786 12.2819 16.8531 12.2244 16.9096Z" fill="white" stroke="#7D8A9B"></path>
                                            </svg>
                                            <span>{{ __('frontend/main.faq') }}</span>
                                        </a>
                                        </li>

                                        @auth
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdownShop" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="9" stroke="#7D8A9B" stroke-width="1.5"></circle>
                                                <path d="M14.0688 11.0224L14.0697 11.0213C14.2934 10.7136 14.45 10.3033 14.45 9.68841C14.45 8.34601 13.3448 7.27536 12 7.27536C10.6552 7.27536 9.55 8.34601 9.55 9.68841C9.55 9.7218 9.53657 9.75581 9.50946 9.78239L9.8465 10.1259L9.50946 9.7824C9.48204 9.8093 9.44284 9.82609 9.4 9.82609C9.35716 9.82609 9.31796 9.8093 9.29054 9.7824L8.94038 10.1393L9.29054 9.78239C9.26343 9.75581 9.25 9.7218 9.25 9.68841C9.25 8.97852 9.53736 8.29572 10.0521 7.79078C10.5671 7.28552 11.2676 7 12 7C12.7324 7 13.4329 7.28552 13.9479 7.79078C14.4626 8.29572 14.75 8.97852 14.75 9.68841C14.75 10.3497 14.5815 10.8154 14.3186 11.1735L14.3173 11.1752C14.0581 11.5312 13.7128 11.7733 13.3895 11.9907L13.3895 11.9906L13.386 11.993L13.3531 12.0156C13.3418 12.0232 13.3305 12.0308 13.3192 12.0384C13.0187 12.2407 12.7397 12.4286 12.5261 12.6847L12.5261 12.6847L12.5239 12.6873C12.3039 12.9546 12.15 13.3023 12.15 13.8333V14.1522C12.15 14.1856 12.1366 14.2196 12.1095 14.2462C12.082 14.2731 12.0428 14.2899 12 14.2899C11.9572 14.2899 11.918 14.2731 11.8905 14.2462C11.8634 14.2196 11.85 14.1856 11.85 14.1522V13.8333C11.85 13.2476 12.0215 12.8394 12.2867 12.5195C12.5231 12.2344 12.8363 12.021 13.1338 11.8213L13.2074 11.7727L13.2074 11.7727L13.2123 11.7694C13.5354 11.5508 13.841 11.3339 14.0688 11.0224ZM12.2244 16.9096C12.1665 16.9664 12.0859 17 12 17C11.9141 17 11.8335 16.9664 11.7756 16.9096C11.7181 16.8531 11.6875 16.7786 11.6875 16.7029C11.6875 16.6272 11.7181 16.5527 11.7756 16.4962C11.8335 16.4394 11.9141 16.4058 12 16.4058C12.0859 16.4058 12.1665 16.4394 12.2244 16.4962C12.2819 16.5527 12.3125 16.6272 12.3125 16.7029C12.3125 16.7786 12.2819 16.8531 12.2244 16.9096Z" fill="white" stroke="#7D8A9B"></path>
                                                </svg>
                                                {{ __('frontend/main.tickets') }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('tickets') }}">
                                                    {{ __('frontend/main.my_tickets') }}
                                                </a>
                                            
                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item" href="{{ route('ticket-create') }}">
                                                    {{ __('frontend/main.create_ticket') }}
                                                </a>
                                            </div>
                                        </li>
                                        @endauth
                                    </ul>

                                    <ul class="navbar-nav ml-auto align-center">
                                        @auth
                                            <li class="nav-item nonavlnk">
                                                <a href="{{ route('cart') }}" class="nav-link nav-cart">
                                                    <small>{{ \App\Models\UserCart::getCartCountByUserId(\Auth::user()->id) }}</small>
                                                    <!-- <ion-icon name="cart"></ion-icon> -->
                                                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_81_1577)">
                                                            <path d="M7.33317 21.0834C7.83943 21.0834 8.24984 20.6544 8.24984 20.1251C8.24984 19.5958 7.83943 19.1667 7.33317 19.1667C6.82691 19.1667 6.4165 19.5958 6.4165 20.1251C6.4165 20.6544 6.82691 21.0834 7.33317 21.0834Z" stroke="#7D8A9B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4167 21.0834C17.9229 21.0834 18.3333 20.6544 18.3333 20.1251C18.3333 19.5958 17.9229 19.1667 17.4167 19.1667C16.9104 19.1667 16.5 19.5958 16.5 20.1251C16.5 20.6544 16.9104 21.0834 17.4167 21.0834Z" stroke="#7D8A9B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M1.87939 1.9646H3.71273L6.15106 13.8671C6.24051 14.303 6.47251 14.6927 6.80713 14.969C7.14175 15.2454 7.55806 15.3912 7.98439 15.3813H16.9494C17.3666 15.3806 17.7712 15.2311 18.0962 14.9575C18.4212 14.684 18.6472 14.3027 18.7369 13.8767L20.2494 6.75627H4.69356" stroke="#7D8A9B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                            <defs>
                                                        <clipPath id="clip0_81_1577">
                                                        <rect width="22" height="23" fill="white"></rect>
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span id="cart-name">
                                                        Cart
                                                    </span>
                                                </a>
                                            </li>
                                        @endauth

                                        @guest
                                            @if (Route::has('register'))
                                            <li class="nav-item">
                                                <span class="do-not-account">Don't have an account?</span>
                                                <a class="nav-link btn pink-btn topnavBtn" href="{{ route('register') }}">{{ __('frontend/main.register') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn pink-btn topnavBtn" href="{{ route('login') }}">{{ __('frontend/main.login') }}</a>
                                            </li>
                                        @endif

                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link activated-link btn topnavBtn" href="{{ route('deposit') }}">
                                                    <!-- <ion-icon name="wallet"></ion-icon> -->
                                                    {{ Auth::user()->getFormattedBalance() }}
                                                </a>
                                            </li>
                                        
                                        <span class="separator-header"></span>
                                        
                                        <li class="nav-item active dropdown">
                                            <a id="navbarDropdownUser" class="nav-link dropdown-toggle btn-inline-block active user-drop-menu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <small>A</small>
                                                <!-- <ion-icon name="person"></ion-icon> -->
                                                <div class="menu-icon">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <!-- <span class="caret"></span> -->
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownUser">

                                                <a class="dropdown-item" href="{{ route('orders') }}">
                                                    {{ __('frontend/user.orders') }}
                                                </a>

                                                <!-- <div class="dropdown-divider"></div> -->

                                                <a class="dropdown-item" href="{{ route('deposit') }}">
                                                    {{ __('frontend/user.deposit') }}
                                                </a>

                                                <a class="dropdown-item" href="{{ route('transactions') }}">
                                                    {{ __('frontend/user.transactions') }}
                                                </a>

                                                

                                                @if(Auth::user()->hasPermission('access_backend'))
                                                <!-- <div class="dropdown-divider"></div> -->

                                                <a class="dropdown-item" href="{{ route('backend-dashboard') }}" target="_panel">
                                                    {{ __('frontend/user.admin_panel') }}
                                                    <ion-icon name="open"></ion-icon>
                                                </a>

                                                <!-- <div class="dropdown-divider"></div> -->
                                                @endif

                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('frontend/main.logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </nav>
                     
                    </div>
                </div>
            </div>
            
            <main class="py-4">
                @if (\Session::has('errorMessage'))
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="{{ __('frontend/main.close') }}">
                                        <span aria-hidden="true">×</span>
                                    </button>

                                    {!! \Session::get('errorMessage') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (\Session::has('successMessage'))
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="{{ __('frontend/main.close') }}">
                                        <span aria-hidden="true">×</span>
                                    </button>

                                    {!! \Session::get('successMessage') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @yield('content')
            </main>

            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <span>&copy; 2020 {{ App\Models\Setting::get('app.name') }}. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Scripts -->
        <script src="{{ asset_dir('vendor/jquery-3.3.1/js/jquery-3.3.1.min.js') }}" defer></script>
        <script src="{{ asset_dir('vendor/bootstrap-4.1.3/js/bootstrap.min.js') }}" defer></script>

        <script src="//unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>

        <script type="text/javascript">

            function getFormattedPriceFromCent(cent){
                let price = cent / 100;
                price= price.toLocaleString("de-DE", { maximumFractionDigits: 2, minimumFractionDigits: 2 });
                return price;
            }

            // Need to move some where 
            function updateCart() {
                //$('#cart-name').html('{{ __('frontend/v4.adding_cart') }}');

                $.ajax({
                    'url': '{{ route('cart-ajax') }}',
                    method: 'POST'
                })
                .done(function(response) {
                    $('#cart-name').html(response);
                })
                .fail(function() {
                    $('#cart-name').html('{{ __('frontend/v4.unknown_error') }}');
                });
            }

            function addToCart(productId, amountClass) {
                if(!$('a[cart-btn=' + productId + ']').hasClass('disabled')) {
                    var amount = parseInt($(amountClass).val());
                    $(amountClass).val('');

                    if(amount > 0) {
                        $('a[cart-btn=' + productId + ']').addClass('disabled');

                        $.ajax({
                            'url': '{{ route('cart-add-item-ajax') }}',
                            method: 'POST',
                            data: {product_id:productId, amount:amount}
                        })
                        .done(function(response) {
                            updateCart();

                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                        })
                        .fail(function() {
                            alert("Unbekannter Fehler, Seite neuladen.");

                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                        })
                        .always(function() {
                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                        });
                    }
                }
            }

            function addVariantToCart(productId) {
                if(!$('a[cart-btn=' + productId + ']').hasClass('disabled')) {
                    var selected_variant_id = $("#variant_select").val();
                    var price = parseInt($("#variant_price").attr("data-price-in-cent"));

                    if(selected_variant_id > 0) {
                        $('a[cart-btn=' + productId + ']').addClass('disabled');

                        $.ajax({
                            'url': '{{ route('cart-add-variant-item-ajax') }}',
                            method: 'POST',
                            data: {product_id:productId, selected_variant_id:selected_variant_id, price: price}
                        })
                        .done(function(response) {
                            $("#variant_select").val("").trigger('change');
                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                            updateCart();
                        })
                        .fail(function() {
                            alert("Unbekannter Fehler, Seite neuladen.");

                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                        })
                        .always(function() {
                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                        });
                    }
                }
            }

            function addTieredProductToCart(productId, amountClass) {
                if(!$('a[cart-btn=' + productId + ']').hasClass('disabled')) {
                    var amount = parseInt($(amountClass).val());
                    const min_amount =  parseInt($(amountClass).attr("min"));
                    if(amount < min_amount){
                        alert("You must purchase at least the minimum order quantity: " + min_amount);
                        return;
                    }
                    $(amountClass).val('');

                    if(amount > 0) {
                        $('a[cart-btn=' + productId + ']').addClass('disabled');

                        $.ajax({
                            'url': '{{ route('cart-add-tiered-item-ajax') }}',
                            method: 'POST',
                            data: {product_id:productId, amount:amount}
                        })
                        .done(function(response) {
                            updateCart();

                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                        })
                        .fail(function() {
                            alert("Unbekannter Fehler, Seite neuladen.");

                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                        })
                        .always(function() {
                            $('a[cart-btn=' + productId + ']').removeClass('disabled');
                        });
                    }
                }
            }
            
            @if(isset($clipboardJS))
            var clipboard = new ClipboardJS('{{ $clipboardJS->element }}');

            clipboard.on('success', function(e) {
                $('{{ $clipboardJS->fadeIn }}').css('display', 'block').hide().fadeIn();
            });
            @endif
        </script>

        @section('page_scripts')
        @show
    </body>
</html>
