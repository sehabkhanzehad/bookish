    @php
        use App\Models\Footer;
        $footer=Footer::first();
        $cart = session()->get('cart', []);
        $totalamount = 0;
        $offer = 0;
        $price = 0;
    @endphp
    @foreach($cart as $key => $item)
        @php
            $offer += $item['discount_price'] * $item['quantity'];
            $price += $item['price'] * $item['quantity'];
            $totalamount += $price;
        @endphp
    @endforeach
    
<style>

    .login_section {
        text-align: center;
        margin-top: 8px;
    }

    .navbar_social li:nth-child(1) a {
        background: #3b5998;
        padding: 6px;
        border-radius: 50%;
        font-size: 15px;
    }
    
    .navbar_social li a i:nth-child(1) {
        color: #fff !important;
        font-size: 15px;
        width: 26px;
        text-align: center;
    }
    
    .navbar_social li:nth-child(2) a {
        background: #55ACEE;
        padding: 6px;
        border-radius: 50%;
        font-size: 15px;
    }
    
    .navbar_social li a i:nth-child(2) {
        color: #fff !important;
        font-size: 15px;
        width: 26px;
        text-align: center;
    }
    
    .navbar_social li:nth-child(3) a {
        background: #CC181E;
        padding: 6px;
        border-radius: 50%;
        font-size: 15px;
    }
    
    .navbar_social li a i:nth-child(3) {
        color: #fff !important;
        font-size: 15px;
        width: 26px;
        text-align: center;
    }
    
    .navbar_social li:nth-child(4) a {
        background: #31D24E;
        padding: 6px;
        border-radius: 50%;
        font-size: 15px;
    }
    
    .navbar_social li a i:nth-child(4) {
        color: #fff !important;
        font-size: 15px;
        width: 26px;
        text-align: center;
    }

    /*.navbar_social li a {*/
    /*    background: gray;*/
    /*    padding: 6px;*/
    /*    border-radius: 50%;*/
    /*    font-size: 15px;*/
    /*}*/
    
    /*.navbar_social li a i:nth-child(1) {*/
    /*    background: gray;*/
    /*    padding: 6px;*/
    /*    border-radius: 50%;*/
    /*    font-size: 15px;*/
    /*}*/
    
    /*.navbar_social li a i{*/
    /*        color: red;*/
    /*font-size: 15px;*/
    /*width: 26px;*/
    /*text-align: center;*/
    /*}*/

    .fixed_bottom{
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
    background-color: black;
    z-index: 99;
    padding: 10px;
    display: none;
  }
  @media (max-width: 1000px) {
    .fixed_bottom{
      display: block;
    }
  }
</style>    
    
<div class="container m-fixed-bar d-lg-none d-md-block d-block">
    <div class="d-flex justify-content-between align-items-center pt-3 pb-1 pe-3">
        <button class="btn d-lg-none d-block toggler"><svg class="ct-icon" width="18" height="14" viewBox="0 0 18 14" aria-hidden="true" data-type="type-2">
            <rect y="0.00" width="18" height="1.7" rx="1"></rect>
            <rect y="6.15" width="18" height="1.7" rx="1"></rect>
            <rect y="12.3" width="18" height="1.7" rx="1"></rect>
        </svg></button>
        <div class="col-7 d-flex border m-fixed-form">
                <button class="btn" type="submit" form="search_form2"><i class="fas fa-search"></i></button>
              <input type="text" name="search" id="" class="form-control" form="search_form2" placeholder="" aria-describedby="helpId">
        </div>
        <div class="h-cart">
            <a href="{{ route('front.cart.index') }}" class="text-dark h-cart"><img src="{{ asset('assets/images/svg/cart.svg')}}" alt="" width="35"><span class="badge bg-primary rounded-circle">{{ count($cart) }}</span></a>
        </div>
    </div>
</div>
<header class="bg-white">
    <div class="header-height">
        <div class="header-box">
            <div class="container pt-4 top_section">
                <div class="d-flex justify-content-between navbar-flex ">
                    <a href="{{ route('front.home') }}" class="navbar-brand col-lg-2 col-5">
                        <img src="{{ asset(siteInfo()->logo) }}" alt="Logo" width="110">
                    </a>
                    <div class="col-lg-5 col-md-12 col-12 search-col my-lg-0 my-md-4 my-4">
                        <form action="{{ route('front.shop') }}" id="search_form">
                            <div class="input-group justify-content-md-center">
                                <input type="text" value="{{ request('search') }}" name="search" class="form-control col-12" placeholder="বইয়ের নাম ও লেখক দিয়ে অনুসন্ধান করুন" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                <div class="input-group-prepend">
                                  <button class="input-group-text btn btn-warning text-light" id="btnGroupAddon"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-3 col-5 d-lg-none d-flex justify-content-end align-items-center me-lg-3 me-0">
                        <!--<a href="#" class="btn btn-outline btn-lg-lg btn-sm text-nowrap"><i class="fa fa-sign-out-alt"></i></a>|-->
                        <a href="{{ route('front.cart.index') }}" class="text-dark h-cart"><img src="{{ asset('assets/images/svg/cart.svg')}}" alt="" width="30"><span class="badge bg-primary rounded-circle">{{ count($cart) }}</span></a>
                    </div>
                    
                    
                    
                    <div class="col-lg-3 col-md-3 col-5 d-lg-flex d-none justify-content-end me-lg-3 me-0 user_section">
                        <ul class="navbar navbar_social d-flex submenu justify-content-lg-start label-1 pb-0 mb-0 pt-0">
                            @php $sLinks =DB::table('footer_social_links')->get(); @endphp
                            @foreach($sLinks as $link)
                                <li>
                                    <a href="{{$link->link}}" class="text-light mb-2 me-3"><i class="{{$link->icon}}" style="color: red;"></i></a>
                                </li>
                            @endforeach
                            <!--<li class="current-menu-item">-->
                            <!--    <a href="#link1">-->
                            <!--        <img width="30" height="30" src="https://img.icons8.com/color/40/facebook-new.png" alt="facebook-new"/>    -->
                            <!--    </a>-->
                            <!--</li>-->
                            <!--<li><a href="#link2">-->
                            <!--    <img width="30" height="30" src="https://img.icons8.com/color/48/speech-bubble-with-dots.png" alt="speech-bubble-with-dots"/>-->
                            <!--</a></li>-->
                            <!--<li><a href="#link3">-->
                            <!--    <img width="30" height="30" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1"/>-->
                            <!--    </a></li>-->
                            <!--<li><a href="#link4">-->
                            <!--<img width="30" height="30" src="https://img.icons8.com/color/48/youtube-play.png" alt="youtube-play"/>-->
                            <!--</a></li>-->
                            <!--<li><a href="#link4">-->
                            <!--<img width="30" height="30" src="https://img.icons8.com/color/48/twitter--v1.png" alt="twitter--v1"/>-->
                            <!--</a></li>-->
                        </ul>
                    </div>
                    <button class="btn d-lg-none d-block toggler">
                        <svg class="ct-icon" width="18" height="14" viewBox="0 0 18 14" aria-hidden="true" data-type="type-2">
                        <rect y="0.00" width="18" height="1.7" rx="1"></rect>
                        <rect y="6.15" width="18" height="1.7" rx="1"></rect>
                        <rect y="12.3" width="18" height="1.7" rx="1"></rect>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    @if(request()->segment(1) != 'product')
    <div class="fixed_bottom">
        <div class="row">
            <div class="col">
                <a class="" href="{{ route('front.home') }}">
                    <div class="text-center">
                        <div class="col-12 primary">
                            <h3 class="fa fa-home" style="color: #ff6e0a;"></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="toggler">
                    <div class="text-center">
                        <div class="col-12 primary">
                            <h3 class="fa fa-list" style="color: #ff6e0a;"></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="" href="{{ route('front.checkout.index') }}">
                    <div class="text-center">
                        <div class="col-12 primary">
                            <h3 class="fas fa-cart-arrow-down m-0" style="color: #ff6e0a;"></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="" href="#signin" data-bs-toggle="modal">
                    <div class="text-center">
                        <div class="col-12 primary">
                            @guest
                            <a href="{{url('login-user')}}" style="color: #ff6e0a;">
                                <h3 class="fa fa-user m-0"></h3>
                            </a>
                            @else
                            <a href="{{route('front.profile')}}" style="color: #ff6e0a;">
                                <h3 class="fa fa-user m-0"></h3>
                            </a>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="" href="#">
                    <div class="text-center">
                        <div class="col-12 primary">
                        <a href="tel: {{ $footer->phone2 }}">
                            <h3 class="fa fa-phone m-0" style="color: #ff6e0a;"></h3>
                        </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
      </div>
     @endif
    <hr class="p-0 m-0 mt-3">
    <div class="m-fixed-bar2">
        <div class="container d-lg-block d-md-none d-none">
            <div class="row menu-main">
                <ul class="navbar d-flex submenu justify-content-lg-start label-1 pb-0 mb-0 pt-0 col-lg-9">
                    <li class="nav-item image_logo_menu d-none" style="border: none;"><a href="{{route('front.home') }}" class="navbar-brand col-lg-2 flex-sm-fill">
                        <img src="{{ asset(siteInfo()->logo) }}" alt="Logo" width="110">
                    </a>
                    </li>
                    <li class="nav-item"><a href="{{ route('front.home') }}" class="nav-link {{ request()->routeIs('front.home') ? 'active' : '' }}">হোম</a>
                    </li>
                    @foreach (menuLinks() as $menu)
                        @if ($menu->category)
                            <li class="nav-item"><a href="{{ route('front.shop') }}?category={{ $menu->category->id }}" class="nav-link {{ request()->fullUrlIs(route('front.shop') . '?category=' . $menu->category->id) ? 'active' : '' }}">{{ $menu->category->name }}</a>
                            </li>
                        @endif
                    @endforeach
                    <li class="nav-item"><a href="{{ route('front.subjects') }}" class="nav-link {{ request()->routeIs('front.subjects') ? 'active' : '' }}">বিষয়</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('front.writers') }}" class="nav-link {{ request()->routeIs('front.writers') ? 'active' : '' }}">লেখক</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('front.publications') }}" class="nav-link {{ request()->routeIs('front.publications') ? 'active' : '' }}">প্রকাশক</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('front.best.seller') }}" class="nav-link {{ request()->routeIs('front.best.seller') ? 'active' : '' }}">বইমেলা ২০২৪</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('front.pre.order') }}" class="nav-link {{ request()->routeIs('front.pre.order') ? 'active' : '' }}">প্রি-অর্ডার</a>
                    </li>
                    {{-- <li class="nav-item"><a href="#" class="nav-link">লাইফস্টাইল</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">স্টেশনারী</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">ব্লগ</a>
                    </li> --}}
                </ul>
                <div class="col-lg-3 login_section">
                    @guest
                        <a href="{{url('login-user')}}" style="color: #000;text-decoration: none;">Login</a>
                        @else
                        <a class="" href="{{route('front.profile')}}" style="color: #000;text-decoration: none;">{{ auth()->user()->name }}</a>
                        @endguest
                        <span>|</span>
                        @guest
                        <a href="{{url('login-user')}}" style="color: #000;text-decoration: none;">Register</a>
                        @else
                        <a href="{{url('logout')}}" style="color: #000;text-decoration: none;">Logout</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
<!-- TAB SECTION END -->
</header>
<!-- header end -->
<div class="overlay"></div>
<!-- sidebar Start  -->
@include('frontend.partials.sidebar')
<!-- sidebar end -->
<div class="cart-tab">
    <a href="" title="View your shopping cart" class="cart_parent text-center">
    <i class="fa fa-shopping-cart"></i><br><span class="woocommerce-Price-amount amount">{{ $price }}&nbsp;<span class="woocommerce-Price-currencySymbol">৳</span></span>
    </a>
</div>
<div class="cart_sidebar">
    <div class="d-flex bg-danger justify-content-between align-items-center px-3">
        <a href="#" class="text-light text-decoration-none"><i class="fas fa-shopping-cart mx-3"></i>Cart</a>
        <button class="btn text-light cart_dismiss"><i class="fas fas fa-times"></i></button>
    </div>
    <div class="widget_shopping_cart_content">
        @if (count($cart))
        <div class="products px-4 mt-3">
            @php
                $totalAmount=0;
            @endphp
            @foreach ($cart as $item)
            <div class="product_item mb-3">
                <div class="d-flex align-item-center justify-content-between">
                    <div class="image col-3">
                        <img src="{{ asset($item['image']) }}" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                        <p class="mb-1">{{ $item['name'] }}</p>
                        <p class="mb-1">{{ $item['quantity'] }} × <span class="text-danger">{{ $item['price'] }} ৳</span></p>
                    </div>
                    <div class="remove">
                        <button class="remove-item btn border-0 d-block p-0 mt-3" data-id="{{ $key }}">
                            <i class="fas fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="px-3 position-absolute bottom-0 w-100">
            <hr>
            <div class="price-box">
                <div class="d-flex justify-content-around">
                    <span>মোট:</span>
                    <div class="ms-3">
                        <p class="mb-1 text-danger">{{ $totalamount }} ৳</p>
                    </div>
                </div>
                <div class="d-flex justify-content-around gap-3 mb-3">
                    <a href="{{ route('front.cart.index') }}" class="btn btn-outline-danger border border-muted rounded-0 font-14">
                        শপিং ব্যাগ
                    </a>
                    <a href="{{ route('front.checkout.index') }}" class="btn btn-outline-danger border border-muted rounded-0 font-14">
                        অর্ডার করুন
                    </a>
                </div>
            </div>
        </div>
        @else

        <p class="text-center mt-3">
            আপনার শপিং ব্যাগ এ কোনো পণ্য নেই
        @endif
        </p>
    </div>
</div>
