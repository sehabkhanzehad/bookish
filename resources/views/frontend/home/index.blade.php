@extends('frontend.app')
@section('title', 'Home')
@push('css')
    @php
        use App\Models\Footer;
        $footer = Footer::first();
    @endphp

    <style>
        .category-slick .nav-item {
            width: 99px;
            background: #8080804f;
            border-radius: 20px;
            text-align: center;
            color: #000;
        }

        .slick-dots li button:before {
            visibility: hidden;
        }

        .section_title {
            margin-top: 15px;
        }



        /* Hide PC section for screen widths between 320px and 575px */
        @media (max-width: 575px) {
            #pc {
                display: none;
            }
        }

        @media only screen and (min-width: 320px) and (max-width: 325px) {
            .ebook_product_label {
                display: block !important;
                position: absolute;
                top: 22px !important;
                right: 16px !important;
                z-index: 999 !important;
                clip-path: polygon(60% 100%, 100% 60%, 100% 80%, 80% 100%) !important;
                background: #2be266d6;
                width: 100% !important;
                height: 51% !important;
                color: #fff !important;
            }

            .ebook_text_lebel {
                display: block !important;
                text-transform: unset !important;
                position: absolute !important;
                right: 1px !important;
                top: 80% !important;
                rotate: 315deg !important;
                text-align: center !important;
                font-size: 12px !important;
            }
        }

        @media only screen and (min-width: 330px) and (max-width: 340px) {
            .ebook_product_label {
                display: block !important;
                position: absolute;
                top: 22px !important;
                right: 16px !important;
                z-index: 999 !important;
                clip-path: polygon(60% 100%, 100% 60%, 100% 80%, 80% 100%) !important;
                background: #2be266d6;
                width: 100% !important;
                height: 51% !important;
                color: #fff !important;
            }

            .ebook_text_lebel {
                display: block !important;
                text-transform: unset !important;
                position: absolute !important;
                right: 1px !important;
                top: 80% !important;
                rotate: 315deg !important;
                text-align: center !important;
                font-size: 12px !important;
            }
        }

        @media only screen and (min-width: 350px) and (max-width: 360px) {
            .ebook_product_label {
                display: block !important;
                position: absolute;
                top: 22px !important;
                right: 16px !important;
                z-index: 999 !important;
                clip-path: polygon(60% 100%, 100% 60%, 100% 80%, 80% 100%) !important;
                background: #2be266d6;
                width: 100% !important;
                height: 55% !important;
                color: #fff !important;
            }

            .ebook_text_lebel {
                display: block !important;
                text-transform: unset !important;
                position: absolute !important;
                right: 1px !important;
                top: 80% !important;
                rotate: 315deg !important;
                text-align: center !important;
                font-size: 12px !important;
            }
        }

        /* Hide mobile section for screen widths of 576px and above */
        @media (min-width: 576px) {
            #mobile {
                display: none;
            }

            .category-slick {
                display: none;
            }
        }

        @media only screen and (min-width: 320px) and (max-width: 375px) {
            .catelog {
                font-size: 12px !important;
                padding: 6px 16px !important;
            }

            .apps {
                font-size: 12px !important;
                padding: 6px 16px !important;
            }
        }

        @media only screen and (min-width: 376px) and (max-width: 575px) {
            .catelog {
                font-size: 12px !important;
                padding: 6px 16px !important;
            }

            .apps {
                font-size: 12px !important;
                padding: 6px 16px !important;
            }
        }
    </style>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')

    <div class="container mt-3">
        <div class="category-slick">
            <li class="nav-item"><a href="{{ route('front.home') }}"
                    class="nav-link {{ request()->routeIs('front.home') ? 'active' : '' }}">হোম</a>
            </li>
            @foreach (menuLinks() as $menu)
                @if ($menu->category)
                    <li class="nav-item"><a href="{{ route('front.shop') }}?category={{ $menu->category->id }}"
                            class="nav-link {{ request()->fullUrlIs(route('front.shop') . '?category=' . $menu->category->id) ? 'active' : '' }}">{{ $menu->category->name }}</a>
                    </li>
                @endif
            @endforeach
            <li class="nav-item"><a href="{{ route('front.subjects') }}"
                    class="nav-link {{ request()->routeIs('front.subjects') ? 'active' : '' }}">বিষয়</a>
            </li>
            <li class="nav-item"><a href="{{ route('front.writers') }}"
                    class="nav-link {{ request()->routeIs('front.writers') ? 'active' : '' }}">লেখক</a>
            </li>
            <li class="nav-item"><a href="{{ route('front.publications') }}"
                    class="nav-link {{ request()->routeIs('front.publications') ? 'active' : '' }}">প্রকাশক</a>
            </li>
            <li class="nav-item"><a href="{{ route('front.best.seller') }}"
                    class="nav-link {{ request()->routeIs('front.best.seller') ? 'active' : '' }}">বইমেলা ২০২৪</a>
            </li>
            <li class="nav-item"><a href="{{ route('front.pre.order') }}"
                    class="nav-link {{ request()->routeIs('front.pre.order') ? 'active' : '' }}">প্রি-অর্ডার</a>
            </li>
        </div>
    </div>

    <section id="pc">
        <div class="container mt-3">
            <div class="cover-slick">
                @foreach ($slider as $item)
                    <div class="col-12 p-0">
                        <a href="#">
                            <img class="col-12" src="{{ asset($item->image) }}" alt="Banner">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="mobile">
        <div class="container mt-3">
            <div class="cover-slick">
                @foreach ($slider as $item)
                    <div class="col-12 p-0">
                        <a href="#">
                            <img class="col-12" src="{{ asset($item->mobile_image) }}" alt="Banner">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3 pc_slider">
            <div class="row">
                @foreach ($top_slider_banners as $banner)
                    <div class="col-lg-3 col-md-3 col-6 mb-3">
                        <div class="banner pc">
                            <img src="{{ asset('uploads/banners/' . $banner->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="banner mobile">
                            <img src="{{ asset('uploads/banners/' . $banner->mobile_image) }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3 d-none mobile_slider">
            <div class="banner-slick">
                @foreach ($top_slider_banners as $banner)
                    <div class="col-12">
                        <div class="banner pc">
                            <img src="{{ asset('uploads/banners/' . $banner->image) }}" alt="" class="img-fluid"
                                style="width: 100%;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--<section>-->
    <!--    <div class="container mt-3 d-none mobile_slider">-->
    <!--        <div class="banner-slick">-->
    <!--            @foreach ($top_slider_banners as $banner)
    -->
    <!--                <div class="col-12">-->
    <!--                    <div class="banner pc">-->
    <!--                        <img src="{{ asset('uploads/banners/' . $banner->image) }}" alt="" class="img-fluid" style="width: 100%;">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--
    @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- Product নতুন প্রকাশিত বই Slider Start  -->


    <section>
        <div class="container mt-3">

            <div class="text-center">
                <div class="" style="margin-bottom: 15px;">
                    <a class="btn catelog" style="background: #13C49A;color: #fff;border-radius: 20px;padding: 10px 20px;"
                        href="{{ route('front.dowloadCatelog') }}">
                        <i class="fas fa-download"></i> ক্যাটালগ ডাউনলোড করুন
                        <!--<img src="{{ asset('frontend/images/cata.jpg') }}" class="cate_img" style="height: 85px;width: 22%;">-->
                    </a>

                    <a class="btn apps" style="background: #009746;color: #fff;border-radius: 20px;padding: 10px 20px;"
                        href="{{ route('front.dowloadApk') }}">
                        <i class="fas fa-download"></i> এপস ডাউনলোড করুন
                        <!--<img src="{{ asset('frontend/images/apps.jpg') }}" class="cate_img" style="height: 85px;width: 22%;">-->
                    </a>
                </div>
            </div>

            <div class="slider-box">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <h5 style="margin-top: 8px;" class="text-danger mb-0">নতুন প্রকাশিত বই</56>
                        </div>
                        <div class="col-md-6 col-6">
                            <a style="float: right;color: #fff;" href="{{ route('front.shop') }}"
                                class="btn btn-warning">সকল বই >></a>
                        </div>
                    </div>


                </div>
                <div class="product-slider">
                    @forelse($comp_pro->take(10) as $key => $product)
                        @include('frontend.product.single-product', ['product' => $product])
                    @empty
                        <div align="center">
                            <strong class="text-center text-danger">No products are available</strong>
                        </div>
                    @endforelse
                </div>
            </div>


            <div class="text-center section_title d-none">
                <a href="{{ route('front.shop') }}" class="btn btn-warning">সকল নতুন প্রকাশিত বই</a>
            </div>
        </div>
    </section>

    @if ($footer->show_ebook)
        @if (count($ebook_list))
            <section>
                <div class="container mt-3">
                    <div class="slider-box">

                        <div class="card p-3">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h5 style="margin-top: 8px;" class="text-danger mb-0">ই-বুক</56>
                                </div>
                                <div class="col-md-6 col-6">
                                    <a style="float: right;color: #fff;" href="{{ route('front.shop') }}"
                                        class="btn btn-warning">সকল বই >></a>
                                </div>
                            </div>


                        </div>

                        <div class="product-slider">
                            @forelse($ebook_list as $key => $product)
                                @include('frontend.product.single-product', ['product' => $product])
                            @empty
                                <div align="center">
                                    <strong class="text-center text-danger">No products are available</strong>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="text-center section_title d-none">
                        <a href="{{ route('front.shop') }}?topic=ebook" class="btn btn-warning">সকল ই-বুক এর বই</a>
                    </div>
                </div>
            </section>
        @endif
    @endif

    @if (count($pre_orders))
        <section>
            <div class="container mt-3">
                <div class="slider-box">

                    <div class="card p-3">

                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h5 style="margin-top: 8px;" class="text-danger mb-0">প্রি-অর্ডারের বই</h5>
                            </div>
                            <div class="col-md-6 col-6">
                                <a style="float: right;color: #fff;" href="{{ route('front.shop') }}"
                                    class="btn btn-warning">সকল বই >></a>
                            </div>
                        </div>
                    </div>

                    <div class="product-slider">
                        @forelse($pre_orders as $key => $product)
                            @include('frontend.product.single-product', ['product' => $product])
                        @empty
                            <div align="center">
                                <strong class="text-center text-danger">No products are available</strong>
                            </div>
                        @endforelse
                    </div>
                </div>
                <div class="text-center section_title d-none">
                    <a href="" class="btn btn-warning">সকল প্রি-অর্ডারের বই</a>
                </div>
            </div>
        </section>
    @endif
    <!-- Product প্রি-অর্ডারের বই Slider end-->
    <section>
        @if ($after_pre_order)
            <div class="container mt-3">
                <a href="#">
                    <img src="{{ asset('uploads/banners/' . $after_pre_order->image) }}" alt="" class="col-12">
                </a>
            </div>
        @endif

    </section>
    <style>
        .div_block {
            height: 18px;
            overflow: hidden;
        }

        @media(max-width: 575px) {
            .div_block {
                margin: 6px;
            }

            .best_seller_books .book_item .image {
                display: flex;
                flex-direction: row-reverse;
                gap: 10px;
                position: relative;
                width: 60px;
                height: auto;
                align-items: center;
            }

            .best_seller_books .book_item .image .badge {
                position: relative;
                top: 0;
                left: 0;
                background-color: transparent !important;
                color: gray;
            }
        }

        .best_seller_books .book_item .image {
            position: relative;
            width: 60px;
            height: auto;
        }
    </style>
    <!-- Product বইমেলা ২০২৪ বেষ্টসেলার বই Slider start-->
    @if (count($best_sellers))
        <section>
            <div class="container mt-3">
                <div class="slider-box">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h5 style="margin-top: 8px;" class="text-danger mb-0">বেষ্টসেলার বই</h5>
                            </div>
                            <div class="col-md-6 col-6">
                                <a style="float: right;color: #fff;" href="{{ route('front.shop') }}?topic=best_seller"
                                    class="btn btn-warning">সকল বই >></a>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3 best_seller_books">
                        @forelse ($best_sellers as $key => $product)
                            @include('frontend.product.single-product2', [
                                'product' => $product,
                                'key' => $key,
                            ])
                        @empty
                            <div align="center">
                                <strong class="text-center text-danger">No products are available</strong>
                            </div>
                        @endforelse

                    </div>
                </div>
                <div class="text-center section_title d-none">
                    <button class="btn btn-warning">পুরো লিস্ট দেখুন</button>
                </div>
            </div>
        </section>
    @endif
    <!-- Product বইমেলা ২০২৪ বেষ্টসেলার বই Slider end-->

    <section>
        @if ($after_best_seller)
            <div class="container mt-3">
                <a href="#">
                    <img src="{{ asset('uploads/banners/' . $after_best_seller->image) }}" alt=""
                        class="col-12">
                </a>
            </div>
        @endif
    </section>

    <!-- Product সমকালীন প্রকাশন এর সকল বইয়ে 35% ছাড় Slider Start  -->
    @if (count($flashSell))
        <section>
            <div class="container mt-3">
                <div class="slider-box">
                    <div class="card p-3">
                        <h5 class="text-danger mb-0">Flash Sell</h5>
                    </div>
                    <div class="product-slider">
                        @foreach ($flashSell as $item)
                            @php
                                $product = $item->product;
                            @endphp
                            @if ($item->product)
                                @include('frontend.product.single-product', ['product' => $product])
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('front.flash-sell') }}" class="btn btn-warning">এই প্রকাশনীর সকল বই</a>
                </div>
            </div>
        </section>
    @endif
    <!-- Product সমকালীন প্রকাশন এর সকল বইয়ে 35% ছাড় Slider end-->
    <!-- Product সিয়াম, রমযান, তারাবীহ ও ঈদ Slider Start  -->
    @if (count($subjects))
        @foreach ($subjects as $subject)
            @if (count($subject->products))
                <section>
                    <div class="container mt-3">
                        <div class="slider-box">

                            <div class="card p-3">

                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <h5 style="margin-top: 8px;" class="text-danger mb-0">{{ $subject->title }} </h5>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <a style="float: right;color: #fff;"
                                            href="{{ route('front.shop') }}?subject={{ $subject->id }}"
                                            class="btn btn-warning">সকল বই >></a>
                                    </div>
                                </div>

                            </div>
                            <div class="product-slider">
                                @foreach ($subject->products as $product)
                                    @if ($product)
                                        @include('frontend.product.single-product', [
                                            'product' => $product,
                                        ])
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="text-center section_title d-none">
                            <a href="{{ route('front.shop') }}?subject={{ $subject->id }}" class="btn btn-warning">এই
                                বিষয়ে সকল বই</a>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
    @endif

    <!-- Product সিয়াম, রমযান, তারাবীহ ও ঈদ Slider end-->

    <section>
        <div class="container mt-3">
            <div class="row">
                @foreach ($before_other_products as $banner)
                    <div class="col-lg-3 col-md-3 col-6 mb-3">
                        <div class="banner2">
                            <img src="{{ asset('uploads/banners/' . $banner->image) }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product জনপ্রিয় লেখক Slider Start  -->
    <section>
        <div class="container mt-3">
            <div class="slider-box">
                <div class="card p-3">
                    <h5 class="text-danger mb-0">জনপ্রিয় লেখক</h5>
                </div>
                <div class="product-slider">
                    @foreach ($popular_writers as $item)
                        <div class="p-2 product">
                            <div class="border p-3">
                                <a href="{{ route('front.shop') }}?writer={{ $item->id }}"
                                    title="{{ $item->name }}" class="text-decoration-none">

                                    <div class="image slide_img">
                                        <img src="{{ asset('uploads/writers/' . $item->image) }}" alt=""
                                            class="rounded-circle">
                                    </div>
                                    <div class="text-area pt-2">
                                        <p class="book-title mb-2 p-0 bold-7 text-center font-12 text-muted">
                                            {{ $item->name }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Product জনপ্রিয় লেখক Slider end  -->
    <!-- Product জনপ্রিয় প্রকাশক Slider Start  -->
    <section>
        <div class="container mt-3">
            <div class="slider-box">
                <div class="card p-3">
                    <h5 class="text-danger mb-0">জনপ্রিয় প্রকাশক</h5>
                </div>
                <div class="product-slider">
                    @foreach ($popular_publications as $item)
                        <div class="product px-3 py-3">
                            <a href="{{ route('front.shop') }}?publication={{ $item->id }}"
                                title="{{ $item->title }}" class="text-decoration-none">

                                <div class="image slide_img" style="margin: 8px auto;width:120px;background: #d5d7db">
                                    <img src="{{ asset('uploads/publications/' . $item->image) }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="text-area pt-2">
                                    <p class="book-title mb-2 p-0 bold-7 text-center font-12 text-muted">
                                        {{ $item->title }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Product জনপ্রিয় প্রকাশক Slider end  -->

    <section>
        @if ($before_package)
            <div class="container mt-3">
                <a href="#">
                    <img src="{{ asset('uploads/banners/' . $before_package->image) }}" alt="" class="col-12">
                </a>
            </div>
        @endif
    </section>
    <!-- Product প্যাকেজ সমূহ Slider Start  -->
    @if (count($packages_products))
        <section>
            <div class="container mt-3">
                <div class="slider-box">
                    <div class="card p-3">

                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h5 style="margin-top: 8px;" class="text-danger mb-0">প্যাকেজ সমূহ</h5>
                            </div>
                            <div class="col-md-6 col-6">
                                <a style="float: right;color: #fff;" href="{{ route('front.shop') }}?packages=all"
                                    class="btn btn-warning">সকল প্যাকেজ >></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-slider">
                        @foreach ($packages_products as $product)
                            @include('frontend.product.single-product', ['product' => $product])
                        @endforeach
                    </div>
                </div>
                <div class="text-center section_title d-none">
                    <a href="{{ route('front.shop') }}?packages=all" class="btn btn-warning">সকল প্যাকেজ</a>
                </div>
            </div>
        </section>
    @endif

    <!-- Product প্যাকেজ সমূহ Slider end-->

    <section>
        <div class="container mt-3">
            <div class="row">
                @foreach ($packages as $item)
                    <div class="col-lg-2 mb-3">
                        <div class="text-center" onmouseover="this.style.color='#20a5fd'">
                            <a href="{{ route('front.shop') }}?packages={{ $item->id }}"
                                class="btn btn-outline col-12"
                                style="border: 1px solid #20a5fd; padding: 10px 30px 10px 30px;">{{ $item->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Product ইবাদত, আত্মশুদ্ধি ও অনুপ্রেরণা Slider Start  -->
    @if (count($cat_wise_prod))
        @foreach ($cat_wise_prod as $category)
            <section>
                <div class="container mt-3">
                    <div class="slider-box">

                        <div class="card p-3">

                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <h5 style="margin-top: 8px;" class="text-danger mb-0">{{ $category->name }}</h5>
                                </div>
                                <div class="col-md-6 col-6">
                                    <a style="float: right;color: #fff;"
                                        href="{{ route('front.shop') }}?category={{ $category->id }}"
                                        class="btn btn-warning">সকল বই >></a>
                                </div>
                            </div>
                        </div>

                        <div class="product-slider">
                            @if (count($category->products))
                                @foreach ($category->products as $product)
                                    @include('frontend.product.single-product', ['product' => $product])
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <div class="text-center section_title d-none">
                        <a href="{{ route('front.shop') }}?category={{ $category->id }}" class="btn btn-warning">এই
                            বিষয়ে সকল বই</a>
                    </div>
                </div>
            </section>
        @endforeach
    @endif


    <section>
        <div class="container mt-3">
            <div class="row">
                @foreach ($before_footer as $banner)
                    <div class="col-lg-3 col-md-3 col-6 mb-3">
                        <div class="banner2">
                            <img src="{{ asset('uploads/banners/' . $banner->image) }}" alt=""
                                class="img-fluid rounded-2">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


    <script>
        $(document).on('click', 'a.productModal', function(e) {
            e.preventDefault();
            let url = $(this).attr('href');
            let productId = $(this).data('productid');

            $.ajax({
                url: url,
                method: "GET",
                data: {
                    productId
                },
                success: function(res) {
                    $('div#commonModal').html(res.html).modal('show');
                }
            });
        });
    </script>


    <script>
        $(document).on('click', 'a#product_show', function(e) {
            e.preventDefault();

            let product_id = $(this).data('productid');
            let product_name = $(this).data('productname');
            let category_id = $(this).data('categoryid');
            let sell_price = $(this).closest('.product-item').find('.product_content span.current_price').text()
                .replace(/[^\d.]/g, '');
            let quantity = '1';

            window.dataLayer = window.dataLayer || [];
            dataLayer.push({
                event: "view_item",
                ecommerce: {
                    currency: "BDT",
                    value: sell_price,
                    items: [{
                        item_id: product_id,
                        item_name: product_name,
                        item_category: category_id,
                        price: sell_price,
                        quantity: quantity
                    }]
                }
            });

            let url = $(this).attr('href');
            if (url) {
                document.location.href = url;
            } else {

            }

        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('submit', 'form.cart_form_home', function(e) {
                e.preventDefault();

                let url = $(this).attr('action');
                let method = $(this).attr('method');
                let id = $(this).find('input[name="id"]').val();
                let variation_id = $(this).find('input[name="variation_id"]').val();
                let varSize = $(this).find('input[name="variation_size"]').val();
                let variation_size_id = $(this).find('input[name="variation_size_id"]').val();
                let variation_price = $(this).find('input[name="variation_price"]').val();
                let varColor = $(this).find('input[name="variation_color"]').val();
                let variation_color_id = $(this).find('input[name="variation_color_id"]').val();
                let quantity = $(this).find('input[name="quantity"]').val();
                let type = $(this).find('input[name="type"]').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                $.ajax({
                    type: method,
                    url: url,
                    data: {
                        id,
                        variation_id,
                        varSize,
                        variation_size_id,
                        variation_price,
                        varColor,
                        variation_color_id,
                        quantity,
                        type
                    },
                    success: function(res) {
                        toastr.success(res.msg);
                        if (res.status) {
                            window.location.reload();
                        }
                    }
                });

            });

            $('.banner-slick').slick({
                arrows: true,
                centerPadding: "0px",
                dots: true,
                slidesToShow: 1,
                infinite: false
            });

            $('.category-slick').slick({
                arrows: true,
                centerPadding: "0px",
                dots: true,
                slidesToShow: 3,
                infinite: false,
                padding: 0
            });



            $(document).on('click', 'button.do_order', function(e) {
                e.preventDefault();

                let url = $('form.cart_form_home').attr('action');
                let method = $('form.cart_form_home').attr('method');

                let id = $(this).closest('.modal').find('input[name="id"]').val();
                let variation_id = $(this).closest('.modal').find('input[name="variation_id"]').val();
                let varSize = $(this).closest('.modal').find('input[name="variation_size"]').val();
                let variation_size_id = $(this).closest('.modal').find('input[name="variation_size_id"]')
                    .val();
                let variation_price = $(this).closest('.modal').find('input[name="variation_price"]').val();
                let varColor = $(this).closest('.modal').find('input[name="variation_color"]').val();
                let variation_color_id = $(this).closest('.modal').find('input[name="variation_color_id"]')
                    .val();
                let quantity = $(this).closest('.modal').find('input[name="quantity"]').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                $.ajax({
                    url: url,
                    type: method,
                    data: {
                        id,
                        variation_id,
                        varSize,
                        variation_size_id,
                        variation_price,
                        varColor,
                        variation_color_id,
                        quantity
                    },
                    success: function(response) {
                        window.location.href = "{{ route('front.checkout.index') }}";
                    },
                    error: function(xhr, status, error) {
                        console.error('Error placing order:', error);
                    }
                });
            });


        });
    </script>

    <script>
        $(document).on('click', '#sizes .size', function() {

            $('#sizes .size').removeClass('active');
            $(this).addClass('active');

            let product_id = $(this).data('proid');
            let variation_id = $(this).attr('value');
            let variation_size = $(this).data('varsize');
            let variation_size_id = $(this).data('varsizeid');
            let variation_price = parseFloat($(this).data('varprice'));

            $(this).closest('.modal').find('#test_for').text('Select Size : ' + variation_size);
            $(this).closest('.modal').find('input[name="id"]').val(product_id);
            $(this).closest('.modal').find('input[name="variation_id"]').val(variation_id);
            $(this).closest('.modal').find('input[name="variation_size"]').val(variation_size);
            $(this).closest('.modal').find('input[name="variation_size_id"]').val(variation_size_id);
            $(this).closest('.modal').find('input[name="variation_price"]').val(variation_price);
        });
        $(document).on('click', '#colors .color', function() {

            $('#colors .color').removeClass('active');
            $(this).addClass('active');

            let product_id = $(this).data('proid');
            let variation_color = $(this).data('varcolor');
            let variation_color_id = $(this).data('colorid');
            let variation_size_id = $(this).closest('.modal').find('input[name="variation_size_id"]').val();

            $(this).closest('.modal').find('input[name="variation_color"]').val(variation_color);
            $(this).closest('.modal').find('input[name="variation_color_id"]').val(variation_color_id);

            $(this).closest('.modal').find('#selected_color').text('Select Color : ' + variation_color);

            $.ajax({
                type: 'get',
                url: '{{ route('front.product.get-variation_color') }}',
                data: {
                    product_id,
                    variation_size_id,
                    variation_color_id
                },
                success: function(res) {
                    //   alert(res.pro_img);

                    // $(this).closest('.modal').find('input[name="pro_img"]').val(res.pro_img);
                    // alert(variation_color);
                }
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            $('.buy-now').on('click', function(e) {
                e.preventDefault();

                var productId = $(this).attr('href').split('/').pop();
                var proQty = 1;
                var addToCartUrl = $(this).data('url');
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Include CSRF token in AJAX request headers
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                // Perform AJAX request to add the product to the cart
                $.post(addToCartUrl, {
                    id: productId,
                    quantity: proQty
                }, function(response) {
                    // toastr.success(response.msg);
                    if (response.status) {
                        // Redirect to checkout page after adding to cart
                        window.location.href = "{{ route('front.checkout.index') }}";
                    } else {

                    }

                });
            });
        });
    </script>

    <script>
        $(function() {
            // Add CSS to initially hide the .offerBox
            function setCookie(name, value, minutes) {
                var expires = "";
                if (minutes) {
                    var date = new Date();
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1, c.length);
                    }
                    if (c.indexOf(nameEQ) == 0) {
                        return c.substring(nameEQ.length, c.length);
                    }
                }
                return null;
            }

            $(".modal-overlay").click(function() {
                $('.offerBox').hide();
                setCookie('offerBoxHidden', 'true', 5);
            })

            $(".offerBox .content .close").click(function() {
                $('.offerBox').hide();
                setCookie('offerBoxHidden', 'true', 5);
            })

            // Check if the offerBox should be hidden based on the cookie
            var offerBoxHidden = getCookie('offerBoxHidden');

            if (offerBoxHidden === 'true') {
                $('.offerBox').hide();
            }





            $(document).on('click', '.add-to-cart', function(e) {
                let id = $(this).data('id');
                let url = $(this).data('url');
                addToCart(url, id);
            });

            // ... other click event handlers ...

            function addToCart(url, id, variation = "", quantity = 1) {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: "POST",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id,
                        quantity,
                        variation
                    },
                    success: function(res) {
                        if (res.status) {
                            //  toastr.success(res.msg);
                            window.location.reload();

                        } else {
                            toastr.error(res.msg);
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred while processing your request.');
                    }
                });
            }

            // ... other functions ...

        });
    </script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                closeOnSelect: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.buy-now').on('click', function(e) {
                e.preventDefault();

                var productId = $(this).attr('href').split('/').pop();
                var proQty = 1;
                var addToCartUrl = $(this).data('url');
                var checkoutUrl = "{{ route('front.cart.index') }}";
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                $.post(addToCartUrl, {
                    id: productId,
                    quantity: proQty
                }, function(response) {
                    toastr.success(response.msg);
                    if (response.status) {
                        window.location.href = "{{ route('front.checkout.index') }}";
                    } else {

                    }

                });
            });
        });
    </script>

    <script></script>
@endpush
