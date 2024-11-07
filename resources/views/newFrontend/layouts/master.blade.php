<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->
@include('newFrontend.components.layout.head')

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
                   <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    Phone:
                                </div>

                                <div class="offcanvas__contact-icon">
                                    {{ $footer->phone }}
                                </div>

                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    Email:
                                </div>

                                <div class="offcanvas__contact-icon">
                                    {{ $footer->email }}
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            {{-- <a href="contact.html" class="theme-btn text-center">
                                Get A Quote
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div> --}}
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
                <ul class="contact-list">
                    <li>
                        <button
                        style="border: 2px solid white; padding: 2px 10px; border-radius: 50px;" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fas fa-search"></i>
                    </button>
                    </li>
                </ul>
                <ul class="list main-menu">
                    @if (Auth::check())
                        {{-- <li><button style="border: 2px solid white; padding: 2px 10px; border-radius: 0px 10px 0px 10px;">{{ Auth::user()->name }} <i class="fas fa-angle-down"></i></button></li> --}}
                        {{-- here show name wtih dropdown items profile, dashboard, wishlist, order, logout  --}}
                        <li>
                            <div class="dropdown">
                                <button
                                    style="border: 2px solid white; padding: 2px 10px; border-radius: 0px 10px 0px 10px;"
                                    class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    {{-- <li><a class="dropdown-item text-dark" href="">Profile</a></li> --}}
                                    <li><a class="dropdown-item text-dark"
                                            href="{{ route('front.order.index') }}">Orders</a></li>
                                    {{-- <li><a class="dropdown-item text-dark" href="">Wishlist</a></li> --}}
                                    {{-- <li><a class="dropdown-item text-dark" href="">Order</a></li> --}}
                                    <li><a class="dropdown-item text-dark"
                                            href="{{ route('front.logout') }}">Logout</a></li>
                                </ul>
                            </div>
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
                                                    <a href="{{ route('front.about-us') }}">
                                                        About Us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        Shop
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        @foreach (menuLinks() as $menu)
                                                            @if ($menu->category)
                                                                <li>
                                                                    <a
                                                                        href="{{ route('front.shop') }}?category={{ $menu->category->id }}">{{ $menu->category->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                        <li><a href="{{ route('front.subjects') }}">বিষয়</a>
                                                        </li>
                                                        <li><a href="{{ route('front.writers') }}">লেখক</a>
                                                        </li>
                                                        <li><a href="{{ route('front.publications') }}">প্রকাশক</a>
                                                        </li>
                                                        <li><a href="{{ route('front.best.seller') }}">বইমেলা
                                                                ২০২৪</a>
                                                        </li>
                                                        <li><a href="{{ route('front.pre.order') }}">প্রি-অর্ডার</a>
                                                        </li>
                                                    </ul>
                                                </li>


                                                <li>
                                                    <a href="{{ route('front.blogs') }}">
                                                        Blog
                                                    </a>
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
                                {{-- <div class="category-oneadjust gap-6 d-flex align-items-center">
                                    <form action="{{ route('front.shop') }}" id="search_form" class="search-toggle-box d-md-block">

                                        <div class="input-area" style="border-radius: none !important;">
                                            <input type="text" placeholder="Search" {{ request('search') }}" name="search">
                                            <button type="submit" class="cmn-btn" >
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                </div> --}}
                                <div class="menu-cart">
                                    {{-- <a href="wishlist.html" class="cart-icon">
                                        <i class="fa-regular fa-heart"></i>
                                    </a> --}}

                                    <a href="{{ route('front.checkout.index') }}" class="cart-icon">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>

                                    <div class="header-humbager ml-30" id="mobMenu">
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
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('front.about-us') }}">
                                                        About Us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        Shop
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        @foreach (menuLinks() as $menu)
                                                            @if ($menu->category)
                                                                <li>
                                                                    <a
                                                                        href="{{ route('front.shop') }}?category={{ $menu->category->id }}">{{ $menu->category->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                        <li><a href="{{ route('front.subjects') }}">বিষয়</a>
                                                        </li>
                                                        <li><a href="{{ route('front.writers') }}">লেখক</a>
                                                        </li>
                                                        <li><a href="{{ route('front.publications') }}">প্রকাশক</a>
                                                        </li>
                                                        <li><a href="{{ route('front.best.seller') }}">বইমেলা
                                                                ২০২৪</a>
                                                        </li>
                                                        <li><a href="{{ route('front.pre.order') }}">প্রি-অর্ডার</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('front.blogs') }}">
                                                        Blog
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('front.contact') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                            <div class="header-right">
                                {{-- <div class="category-oneadjust gap-6 d-flex align-items-center">
                                    <form action="{{ route('front.shop') }}" id="search_form" class="search-toggle-box d-md-block">

                                        <div class="input-area" style="border-radius: none !important;">
                                            <input type="text" placeholder="Search" {{ request('search') }}" name="search">
                                            <button type="submit" class="cmn-btn" >
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                </div> --}}
                                <div class="menu-cart">
                                    {{-- <a href="wishlist.html" class="cart-icon">
                                        <i class="fa-regular fa-heart"></i>
                                    </a> --}}

                                        <a href="{{ route('front.checkout.index') }}" class="cart-icon">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>






                                    <div class="header-humbager ml-30" id="mobMenu" >
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

    <!-- Search Modal -->
    {{-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">

                            <form action="{{ route('front.shop') }}" id="search_form" class="search-toggle-box d-md-block">
                                    <input class="inputField" type="text" placeholder="Search" value="{{ request('search') }}" name="search">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="w-50 mx-auto">
                        <div class="">
                            <form action="{{ route('front.shop') }}" id="search_form" class="">
                                <input class="form-control" style="border-left: none; border-right: none; border-top: none; border-radius: 0; outline: none; box-shadow: none;" type="text" placeholder="Search" value="{{ request('search') }}" name="search">
                                {{-- <button type="submit" class="theme-btn">Search</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <input class="inputField" type="text" name="name" id="regName"
                                placeholder="Name" />
                            <input class="inputField" type="text" name="" id="regPhone"
                                placeholder="+8801XXXXXXXXX" />
                            <input class="inputField" type="email" name="" id="regEmail"
                                placeholder="xyz@example.com" />

                            <input class="inputField" type="password" name="regPassword" id="regPassword"
                                placeholder="Enter Password" />
                            <input class="inputField" type="password" name="regCPassword" id="regCPassword"
                                placeholder="Enter Confirm Password" />

                            <div style="margin-top: 20px !important" class="loginBtn">
                                <a onclick="userReg()" type="button" class="theme-btn rounded-0">
                                    Create
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        async function userReg() {
            let regName = document.getElementById("regName").value;
            let regPhone = document.getElementById("regPhone").value;
            let regEmail = document.getElementById("regEmail").value;
            let regPassword = document.getElementById("regPassword").value;
            let regConfirmPassword = document.getElementById("regCPassword").value;

            if (
                regName == "" &&
                regPhone == "" &&
                regEmail == "" &&
                regPassword == "" &&
                regConfirmPassword == ""
            ) {
                errorToast("All fields are required.");
            } else if (regName == "") {
                errorToast("Please enter your name.");
            } else if (regPhone == "") {
                errorToast("Please enter your phone number.");
            } else if (regEmail == "") {
                errorToast("Please enter your email.");
            } else if (regPassword == "") {
                errorToast("Please enter your password.");
            } else if (regConfirmPassword == "") {
                errorToast("Please enter your confirm password.");
            } else if (regPassword != regConfirmPassword) {
                errorToast("Password and confirm password does not match.");
            } else {
                const re =
                    /^(?:(?:[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*")|(?:[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*))@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:(?:[ -~]|\\[^\r\n])*)\])$/;
                if (!re.test(regEmail)) {
                    errorToast("Please enter a valid email.");
                } else {
                    showLoader();
                    try {
                        let response = await axios.post("/register", {
                            name: regName,
                            phone: regPhone,
                            email: regEmail,
                            password: regPassword,
                            c_password: regConfirmPassword,
                        });
                        hideLoader();

                        if (response.data.status == "success") {
                            successToast(response.data.message);
                            setTimeout(() => {
                                window.location.href = response.data.url;
                            }, 1000);
                        } else {
                            // errorToast(response.data.message);
                            errorToast(response.data["message"]);
                        }
                    } catch (error) {
                        hideLoader();
                        errorToast("Something went wrong.");
                    }
                }
            }
        }
    </script>
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
    @yield('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    @stack('js')


    <script>
        $("#checkout-form").on("submit", function(e) {
            e.preventDefault();

            var form = $(this);
            var url = form.attr("action");

            $.ajax({
                url: url,
                type: "POST",
                data: form.serialize(),
                success: function(response) {
                    if (response.status) {
                        // Clear the cart or perform other actions

                        // Show success message
                        showToasterMessage(response.msg, "success");

                        // Redirect to a specific URL if needed
                        window.location.href = response.url;
                    } else {
                        // Show error message
                        showToasterMessage(response.msg, "error");
                    }
                },
                error: function(error) {
                    // Show error message
                    showToasterMessage("An error occurred. Please try again later.", "error");
                }
            });
        });
    </script>



    <script type="text/javascript">
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            // ... other AJAX settings ...
        });
    </script>

    <script>
        $(document).on('click', '.remove-item', function(e) {
            e.preventDefault();

            let id = $(this).data('id');
            let url = '{{ route('front.cart.destroy', ['id' => ':id']) }}'; // Adjust the route name as needed

            url = url.replace(':id', id); // Replace the placeholder with the actual id

            $.ajax({
                type: 'GET', // Use GET or POST based on your route definition
                url: url,
                success: function(res) {
                    if (res.status) {
                        toastr.success(res.msg);
                        window.location.reload(); // Refresh the page or update the cart UI
                    } else {
                        // toastr.error(res.msg);
                        errorToast(res.msg);
                    }
                },
                error: function(xhr, status, error) {
                    // toastr.error('An error occurred while processing your request.');
                    errorToast('An error occurred while processing your request.');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $(document).on('click', '.inc', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let exist_qty = $(this).data('exist_qty');
                let quantityInput = $('.quantity-value[data-id="' + id + '"]');
                let newQuantity = parseInt(quantityInput.val()) + 1;
                if (exist_qty < newQuantity) {
                    // toastr.error('Stock Not Available!!!');
                    errorToast('Stock Not Available!!!');
                    return false;
                } else {
                    quantityInput.val(newQuantity);
                    updateSubtotal(id, newQuantity);
                }
            });

            $(document).on('click', '.dec', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let quantityInput = $('.quantity-value[data-id="' + id + '"]');
                let newQuantity = parseInt(quantityInput.val()) - 1;
                if (newQuantity >= 1) {
                    quantityInput.val(newQuantity);
                    updateSubtotal(id, newQuantity);
                }
            });

            $(document).on('click', '.remove-item', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                $(this).closest('tr').remove();
                updateSubtotal(id, 0);
            });

            // Add event listener for the "Update" button
            $(document).on('click', '.update-cart', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let quantityInput = $('.quantity-value[data-id="' + id + '"]');
                let newQuantity = parseInt(quantityInput.val());

                $.ajax({
                    type: 'POST',
                    url: '{{ route('front.cart.update', ['id' => '__id__']) }}'.replace('__id__',
                        id),
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: newQuantity
                    },
                    success: function(response) {
                        // Update subtotal
                        let subtotal = response.totalAmount.toFixed(2);
                        $('#subtotal-' + id).text(subtotal);

                        // Update total amount
                        $('#total-amount').text(response.totalAmount.toFixed(2));
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        // Handle error response, if needed
                    }
                });
            });

            function updateSubtotal(id, quantity) {
                let price = parseFloat($('#subtotal-' + id).data('price'));
                let subtotal = price * quantity;
                $('#subtotal-' + id).text(subtotal.toFixed(2));
                updateCart(id, quantity);
            }

            function updateTotalAmount() {
                let totalAmount = 0;
                $('.subtotal').each(function() {
                    totalAmount += parseFloat($(this).text());
                });
                $('#total-amount').text(totalAmount.toFixed(2));
            }

            function updateCart(id, quantity) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('front.cart.update', ['id' => '__id__']) }}'.replace('__id__', id),
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: quantity
                    },
                    success: function(response) {
                        window.location.reload();
                        // Handle success response, if needed
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        // Handle error response, if needed
                    }
                });
            }
        });
    </script>
</body>

</html>
