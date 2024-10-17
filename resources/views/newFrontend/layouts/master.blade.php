<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->
@include('newFrontend.layouts.head')

<body>
    <!-- progress bar -->
    <div id="loader" class="LoadingOverlay d-none">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>

    <!-- Cursor follower -->
    <div class="cursor-follower"></div>

    <!-- Preloader start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="H" class="letters-loading">
                    H
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back To Top start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    @php
        $footer = DB::table('footers')->first();
    @endphp

    <!-- Offcanvas Area start  -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ route('front.home') }}">
                                <img src="{{ asset('newFrontend') }}/img/logo/black-logo.svg" alt="logo-img" />
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod
                        fermentum odio sem semper the is erat, a feugiat leo
                        urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="index.html">Main Street, Melbourne,
                                        Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="index.html">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.html" class="theme-btn text-center">
                                Get A Quote
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <div class="header-top-1">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="contact-list">
                    <li>
                        <span>Phone: </span>
                        <a href="tel:{{ $footer->phone }}">{{ $footer->phone }}</a>
                    </li>
                    <li>
                        <span>Email:</span>
                        <a href="mailto:{{ $footer->email }}">{{ $footer->email }}</a>
                    </li>
                    <li>
                        <a class="d-none" href=""></a>
                    </li>
                </ul>
                <ul class="list main-menu">
                    @if (Auth::check())
                      <li><button style="border: 2px solid white; padding: 2px 10px; border-radius: 0px 10px 0px 10px;">{{ Auth::user()->name }} <i class="fas fa-angle-down"></i></button></li>
                    @else
                    <li>
                        <button type="button" class="theme-btn"
                            style="border: 2px solid white; padding: 10px !important;" data-bs-toggle="modal"
                            data-bs-target="#loginModal">
                            Login
                        </button>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <!-- Sticky Header Section start  -->
    <header class="header-1 sticky-header">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ route('front.home') }}" class="header-logo">
                                        <img src="{{ asset('newFrontend') }}/img/logo/white-logo.svg"
                                            alt="logo-img" />
                                    </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('front.home') }}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop.html">
                                                        Shop
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="shop.html">Shop
                                                                Default</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">Shop
                                                                List</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-details.html">Shop
                                                                Details</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-cart.html">Shop
                                                                Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="about.html">
                                                        Pages
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="about.html">About Us</a>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="team.html">
                                                                Author
                                                                <i class="fas fa-angle-down"></i>
                                                            </a>
                                                            <ul class="submenu">
                                                                <li>
                                                                    <a href="team.html">Author</a>
                                                                </li>
                                                                <li>
                                                                    <a href="team-details.html">Author
                                                                        Profile</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="faq.html">Faq's</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">404 Page</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="news.html">
                                                        Blog
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="news-grid.html">Blog
                                                                Grid</a>
                                                        </li>
                                                        <li>
                                                            <a href="news.html">Blog
                                                                List</a>
                                                        </li>
                                                        <li>
                                                            <a href="news-details.html">Blog
                                                                Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                            <div class="header-right">
                                <div class="category-oneadjust gap-6 d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-grid-2"></i>
                                    </div>
                                    <select name="cate" class="category">
                                        <option value="1">Category</option>
                                        <option value="1">
                                            Web Design
                                        </option>
                                        <option value="1">
                                            Web Development
                                        </option>
                                        <option value="1">
                                            Graphic Design
                                        </option>
                                        <option value="1">
                                            Softwer Eng
                                        </option>
                                    </select>
                                    <form action="#" class="search-toggle-box d-md-block">
                                        <div class="input-area">
                                            <input type="text" placeholder="Author" />
                                            <button class="cmn-btn">
                                                <i class="far fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="menu-cart">
                                    <a href="wishlist.html" class="cart-icon">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                    <a href="shop-cart.html" class="cart-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                    </a>
                                    <div class="header-humbager ml-30">
                                        <a class="sidebar__toggle" href="javascript:void(0)">
                                            <div class="bar-icon-2">
                                                <img src="{{ asset('newFrontend') }}/img/icon/icon-13.svg"
                                                    alt="img" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Header Section start  -->
    <header class="header-1">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ route('front.home') }}" class="header-logo">
                                        <img src="{{ asset('newFrontend') }}/img/logo/white-logo.svg"
                                            alt="logo-img" />
                                    </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('front.home') }}">
                                                        Home
                                                        {{-- <i class="fas fa-angle-down"></i> --}}
                                                    </a>
                                                    {{-- <ul class="submenu">
                                                        <li>
                                                            <a href="index.html">Home 01</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-2.html">Home 02</a>
                                                        </li>
                                                    </ul> --}}
                                                </li>
                                                <li>
                                                    <a href="shop.html">
                                                        Shop
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="shop.html">Shop
                                                                Default</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">Shop
                                                                List</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-details.html">Shop
                                                                Details</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-cart.html">Shop
                                                                Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="about.html">
                                                        Pages
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="about.html">About Us</a>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="team.html">
                                                                Author
                                                                <i class="fas fa-angle-down"></i>
                                                            </a>
                                                            <ul class="submenu">
                                                                <li>
                                                                    <a href="team.html">Author</a>
                                                                </li>
                                                                <li>
                                                                    <a href="team-details.html">Author
                                                                        Profile</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="faq.html">Faq's</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">404 Page</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="news.html">
                                                        Blog
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="news-grid.html">Blog
                                                                Grid</a>
                                                        </li>
                                                        <li>
                                                            <a href="news.html">Blog
                                                                List</a>
                                                        </li>
                                                        <li>
                                                            <a href="news-details.html">Blog
                                                                Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                            <div class="header-right">
                                <div class="category-oneadjust gap-6 d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-grid-2"></i>
                                    </div>
                                    <select name="cate" class="category">
                                        <option value="1">Category</option>
                                        <option value="1">
                                            Web Design
                                        </option>
                                        <option value="1">
                                            Web Development
                                        </option>
                                        <option value="1">
                                            Graphic Design
                                        </option>
                                        <option value="1">
                                            Softwer Eng
                                        </option>
                                    </select>
                                    <form action="#" class="search-toggle-box d-md-block">
                                        <div class="input-area">
                                            <input type="text" placeholder="Author" />
                                            <button class="cmn-btn">
                                                <i class="far fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="menu-cart">
                                    <a href="wishlist.html" class="cart-icon">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                    <a href="shop-cart.html" class="cart-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                    </a>
                                    <div class="header-humbager ml-30">
                                        <a class="sidebar__toggle" href="javascript:void(0)">
                                            <div class="bar-icon-2">
                                                <img src="{{ asset('newFrontend') }}/img/icon/icon-13.svg"
                                                    alt="img" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="loginModalLabel">welcome back!</h1>
                            <input class="inputField" id ="loginEmail" type="email" name="email"
                                placeholder="Email Address" />
                            <input class="inputField" id ="loginPassword" type="password" name="password"
                                placeholder="Enter Password" />
                            <div class="input-check remember-me">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next"
                                        id="saveForNext" />
                                    <label for="saveForNext">Remember me</label>
                                </div>
                                <div class="text">
                                    <a href="">Forgot Your password?</a>
                                </div>
                            </div>
                            <div class="loginBtn">
                                <a onclick="login()" type="button" class="theme-btn rounded-0">
                                    Log in
                                </a>
                                <br>
                                <a class="" style="display: block; text-align: center; !important"
                                    type="button"data-bs-toggle="modal" data-bs-target="#registrationModal">
                                    Create an account!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="registrationModalLabel">
                                Create an account!
                            </h1>
                            <input class="inputField" type="text" name="name" id="name"
                                placeholder="Name" />
                            <input class="inputField" type="text" name="phone" placeholder="+8801XXXXXXXXX" />
                            <input class="inputField" type="email" name="email" placeholder="xyz@example.com" />

                            <input class="inputField" type="password" name="password"
                                placeholder="Enter Password" />
                            <input class="inputField" type="password" name="password"
                                placeholder="Enter Confirm Password" />

                            <div style="margin-top: 20px !important" class="loginBtn">
                                <a href="" class="theme-btn rounded-0">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
    <!-- Footer Section start  -->
    @include('newFrontend.components.layout.footer')




    <script src="{{ asset('newFrontend/js/include/config.js') }}"></script>
    <script src="{{ asset('newFrontend/js/include/axios.min.js') }}"></script>
    <script src="{{ asset('newFrontend/js/include/toastify-js.js') }}"></script>
    <script src="{{ asset('newFrontend/js/include/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('newFrontend') }}/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('newFrontend') }}/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('newFrontend') }}/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('newFrontend') }}/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('newFrontend') }}/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('newFrontend') }}/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('newFrontend') }}/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('newFrontend') }}/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('newFrontend') }}/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('newFrontend') }}/js/wow.min.js"></script>
    <!-- Gsap -->
    <script src="{{ asset('newFrontend') }}/js/gsap.min.js"></script>
    <!--<< Main.js >>-->
    <script src="{{ asset('newFrontend') }}/js/main.js"></script>
</body>

</html>
