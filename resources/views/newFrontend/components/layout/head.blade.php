
@php $cart = session()->get('cart', []); @endphp
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="gramentheme" />
    <meta name="description" content="Bookish - Book Store E-Commerce" />
    <!-- ======== Page title ============ -->
    <title>@yield('title')</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('newFrontend') }}/img/favicon.png" />
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/bootstrap.min.css" />
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/all.min.css" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/animate.css" />
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/magnific-popup.css" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/meanmenu.css" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/swiper-bundle.min.css" />
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/nice-select.css" />
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/icomoon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icomoon@1.0.0/style.min.css" />
    @yield('css')
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('newFrontend') }}/css/main.css" />

    <!-- include css -->
    <link rel="stylesheet" href="{{ asset('newFrontend/css/include/progress.css') }}">
    <link rel="stylesheet" href="{{ asset('newFrontend/css/include/toastify.min.css') }}">

    <style>

.header-1 .header-right .menu-cart {
    position: relative;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 30px 0 30px 35px;
}

@media (max-width: 1199px) {
    .header-1 .header-right .menu-cart {
        padding: 0;
    }
}

.header-1 .header-right .menu-cart .cart-icon {
    position: relative;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    background-color: transparent;
    display: inline-block;
    border-radius: 50%;
    border: 1px solid rgba(79, 83, 107, 0.3);
}

@media (max-width: 1199px) {
    .header-1 .header-right .menu-cart .cart-icon {
        display: none;
    }
}

.header-1 .header-right .menu-cart .cart-icon::before {
    position: absolute;
    top: -7px;
    left: 0;
    content: "{{ count($cart) }}";
    width: 18px;
    line-height: 18px;
    height: 18px;
    border-radius: 18px;
    background-color: var(--theme);
    color: var(--white);
    font-size: 12px;
    text-align: center;
    font-weight: 500;
}

.header-1 .header-right .menu-cart .cart-icon i {
    color: var(--header);
}
    </style>

    </style>
</head>
