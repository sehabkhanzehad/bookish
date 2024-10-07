        <footer class="mt-3 bg-white1">
            @php $footer = DB::table('footers')->first();
             $about_us=DB::table('about_us')->where('id', '1')->first();
            @endphp
            <div class="container">
                <div class="row pt-lg-4 pt-3">
                    <div class="col-lg-4 col-12 footer_1top footer-logo">
                        <img src="{{ asset(siteInfo()->logo) }}" alt="Logo">
                        <p class="footer_p">{!! $about_us->description_three !!}</p>
                        <div class="d-flex align-items-center">

                            <div class="text-div text-start d-none">
                                <h6 class="p-0 line_1"> অ্যাপ ডাউনলোড করুন </h6>

                            </div>
                        </div>



                    </div>
                    <div class="col-lg-3 col-12 mt-3 d-lg-block d-md-none d-none">
                        <h5 class="bold-7 font-17 h_color ps-3">প্রয়োজনীয় লিংক</h5>
                        <ul style="list-style: none;">
                            <li><a href="#" class="text-decoration-none text-dark1 a line-2">যোগাযোগ করুন</a></li>
                            <li><a href="#" class="text-decoration-none text-dark1 a line-2">ব্লগ</a></li>
                            <li><a href="#" class="text-decoration-none text-dark1 a line-2">শপিং ব্যাগ</a></li>
                            <li><a href="#" class="text-decoration-none text-dark1 a line-2">প্রশ্নোত্তর</a></li>
                            <li><a href="#" class="text-decoration-none text-dark1 a line-2">কিভাবে কেনাকাটা করবেন ?</a></li>
                            @php $custom_pages = DB::table('custom_pages')->where('status', 1)->get();  @endphp
                            @foreach($custom_pages as $pages)
                            <li><a href="{{route('front.customPages', $pages->slug)}}" class="text-decoration-none text-dark1 a line-2">{{$pages->page_name}}</a></li>
                        @endforeach
                            {{-- <li><a href="#" class="text-decoration-none text-dark1 a line-2">শর্তাবলী</a></li>
                            <li><a href="#" class="text-decoration-none text-dark1 a line-2">রিফান্ড নীতিমালা</a></li>
                            <li><a href="#" class="text-decoration-none text-dark1 a line-2">প্রাইভেসী পলিসি</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-lg-3 col-12 mt-3 d-lg-block d-md-none d-none">
                        <h5 class="bold-7 h_color ps-3">জনপ্রিয়</h5>
                        <ul style="list-style: none;">
                            @foreach (menuLinks() as $menu)
                                @if ($menu->category)
                                    <li class=""><a href="{{ route('front.shop') }}?category={{ $menu->category->id }}" class="text-decoration-none text-dark1 a line-2{{ request()->fullUrlIs(route('front.shop') . '?category=' . $menu->category->id) ? 'active' : '' }}">{{ $menu->category->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                            <li class=""><a href="{{ route('front.subjects') }}" class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.subjects') ? 'active' : '' }}">বিষয়</a>
                            </li>
                            <li class=""><a href="{{ route('front.writers') }}" class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.writers') ? 'active' : '' }}">লেখক</a>
                            </li>
                            <li class=""><a href="{{ route('front.publications') }}" class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.publications') ? 'active' : '' }}">প্রকাশক</a>
                            </li>
                            <li class=""><a href="{{ route('front.best.seller') }}" class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.best.seller') ? 'active' : '' }}">বইমেলা ২০২৪</a>
                            </li>
                            <li class=""><a href="{{ route('front.pre.order') }}" class="text-decoration-none text-dark1 a line-2{{ request()->routeIs('front.pre.order') ? 'active' : '' }}">প্রি-অর্ডার</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-12 mt-3">
                        <h5 class="bold-7 h_color mb-3">যোগাযোগ</h5>
                        
                           <p class="footer_p">{{$footer->address}}</p>
                            <p class="footer_p">Phone: <br>
                                <span class="text-dark1 a">{{$footer->phone}}</span></p>
                            <p class="footer_p">{{$footer->email}}</p>
                        <div class="d-flex flex-warp">
                            @php $sLinks =DB::table('footer_social_links')->get(); @endphp
                            @foreach($sLinks as $link)
                            <a href="{{$link->link}}" class="text-light mb-2 me-3"><i class="{{$link->icon}}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <hr>
                <p class="text-center m-0">&copy; Copyright 2023 | Developed by SoftIT</p>
            </div>
        </footer>

 @include('frontend.partials.js')

 {!!\App\Models\SitePixel::value('pixel_id')!!}

 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHD2XLF3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


</body>
</html>
