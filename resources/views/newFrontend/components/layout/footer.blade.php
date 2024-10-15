@php
    $footer = DB::table('footers')->first();
    $about_us = DB::table('about_us')->where('id', '1')->first();
@endphp
<footer class="footer-section footer-bg">
    <div class="container">
        <div class="contact-info-area">
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".2s">
                <div class="icon">
                    <i class="icon-icon-5"></i>
                </div>
                <div class="content">
                    <p>Call Us 7/24</p>
                    <h3>
                        <a href="tel:+2085550112">{{$footer->phone}}</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="icon-icon-6"></i>
                </div>
                <div class="content">
                    <p>Make a Quote</p>
                    <h3>
                        <a href="mailto:{{$footer->email}}">{{$footer->email}}</a>
                    </h3>
                </div>
            </div>
            {{-- <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="icon-icon-7"></i>
                </div>
                <div class="content">
                    <p>Opening Hour</p>
                    <h3>Sunday - Fri: 9 aM - 6 pM</h3>
                </div>
            </div> --}}
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="icon-icon-8"></i>
                </div>
                <div class="content">
                    <p>Location</p>
                    <h3>{{$footer->address}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widgets-wrapper">
        <div class="plane-shape float-bob-y">
            <img src="{{ asset('newFrontend') }}/img/plane-shape.png" alt="img" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="{{ route('front.home') }}">
                                <img src="{{ asset('newFrontend') }}/img/logo/white-logo.svg" alt="logo-img" />
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>{!! $about_us->description_three !!}</p>
                            {{-- <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div> --}}
                            <hr>
                            @php $sLinks =DB::table('footer_social_links')->get(); @endphp
                            @foreach ($sLinks as $link)
                                <a style="font-size: 25px; !important" href="{{ $link->link }}"
                                    class="text-light mb-2 me-3"><i class="{{ $link->icon }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Pages</h3>
                        </div>
                        <ul class="list-area">
                            @php $custom_pages = DB::table('custom_pages')->where('status', 1)->get();  @endphp
                            @foreach ($custom_pages as $pages)
                                <li><a href="{{ route('front.customPages', $pages->slug) }}"
                                        class="text-decoration-none text-dark1 a line-2">{{ $pages->page_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Categories</h3>
                        </div>
                        <ul class="list-area">
                            @foreach (menuLinks() as $menu)
                                @if ($menu->category)
                                    <li class=""><a
                                            href="{{ route('front.shop') }}?category={{ $menu->category->id }}"
                                            class="text-decoration-none text-dark1 a line-2{{ request()->fullUrlIs(route('front.shop') . '?category=' . $menu->category->id) ? 'active' : '' }}">{{ $menu->category->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                            <li class=""><a href="{{ route('front.subjects') }}"
                                    class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.subjects') ? 'active' : '' }}">বিষয়</a>
                            </li>
                            <li class=""><a href="{{ route('front.writers') }}"
                                    class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.writers') ? 'active' : '' }}">লেখক</a>
                            </li>
                            <li class=""><a href="{{ route('front.publications') }}"
                                    class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.publications') ? 'active' : '' }}">প্রকাশক</a>
                            </li>
                            <li class=""><a href="{{ route('front.best.seller') }}"
                                    class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.best.seller') ? 'active' : '' }}">বইমেলা
                                    ২০২৪</a>
                            </li>
                            <li class=""><a href="{{ route('front.pre.order') }}"
                                    class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.pre.order') ? 'active' : '' }}">প্রি-অর্ডার</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-content">
                            <p>
                                Sign up to searing weekly newsletter to
                                get the latest updates.
                            </p>
                            <div class="footer-input">
                                <input type="email" id="email2" placeholder="Enter Email Address" />
                                <button class="newsletter-btn" type="submit">
                                    <i class="fa-regular fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s">
                    © All Copyright 2024 by
                    <a href="index.html">Bookle</a>
                </p>
                <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="contact.html">
                            <img src="{{ asset('newFrontend') }}/img/visa-logo.png" alt="img" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="{{ asset('newFrontend') }}/img/mastercard.png" alt="img" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="{{ asset('newFrontend') }}/img/payoneer.png" alt="img" />
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <img src="{{ asset('newFrontend') }}/img/affirm.png" alt="img" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
