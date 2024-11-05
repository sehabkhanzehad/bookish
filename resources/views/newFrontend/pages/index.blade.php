@extends('newFrontend.layouts.master')
@section('title')
Bookish - Home
@endsection
@section('content')
    @include("newFrontend.components.homepage.hero")
    @include("newFrontend.components.homepage.categories")

    @include("newFrontend.components.homepage.new-published")
    @include("newFrontend.components.homepage.pre-order")
    {{-- <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Featured Books
                    </h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More
                    <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/01.png"
                                        alt="img" /></a>
                                <ul class="post-box">
                                    <li>Hot</li>
                                    <li>-30%</li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">Simple Things You To <br />
                                        Save BOOK</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-1.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">Wilson</span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/02.png"
                                        alt="img" /></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">How Deal With Very <br />
                                        Bad BOOK</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$39.00</li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">Esther</span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/03.png"
                                        alt="img" /></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">The Hidden Mystery <br />
                                        Behind</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$29.00</li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-3.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">Hawkins</span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/04.png"
                                        alt="img" /></a>
                                <ul class="post-box">
                                    <li>-12%</li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">Qple GPad With Retina <br />
                                        Sisplay</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$19.00</li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-4.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">(Author) Albert
                                        </span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/05.png"
                                        alt="img" /></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">Flovely and Unicom <br />
                                        Erna</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-5.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">Alexander</span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Shop Section start  -->
    {{-- <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title mb- wow fadeInUp" data-wow-delay=".3s">
                    <h2>Bookle Top Books</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More
                    <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="book-shop-wrapper">
                <div class="shop-box-items style-2">
                    <div class="book-thumb center">
                        <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/05.png"
                                alt="img" /></a>
                        <ul class="shop-icon d-grid justify-content-center align-items-center">
                            <li>
                                <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="shop-cart.html">
                                    <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                        alt="svg-icon" />
                                </a>
                            </li>
                            <li>
                                <a href="shop-details.html"><i class="far fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-content">
                        <h5>Design Low Book</h5>
                        <h3>
                            <a href="shop-details.html">Flovely and Unicom <br />
                                Erna</a>
                        </h3>
                        <ul class="price-list">
                            <li>$30.00</li>
                            <li>
                                <del>$39.99</del>
                            </li>
                        </ul>
                        <ul class="author-post">
                            <li class="authot-list">
                                <span class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/client-1.png" alt="img" />
                                </span>
                                <span class="content">(Author) Albert</span>
                            </li>
                            <li class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-button">
                        <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Add
                            To Cart</a>
                    </div>
                </div>

                <div class="shop-box-items style-2">
                    <div class="book-thumb center">
                        <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/04.png"
                                alt="img" /></a>
                        <ul class="post-box">
                            <li>Hot</li>
                        </ul>
                        <ul class="shop-icon d-grid justify-content-center align-items-center">
                            <li>
                                <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="shop-cart.html">
                                    <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                        alt="svg-icon" />
                                </a>
                            </li>
                            <li>
                                <a href="shop-details.html"><i class="far fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-content">
                        <h5>Design Low Book</h5>
                        <h3>
                            <a href="shop-details.html">Qple GPad With Retinay<br />
                                Sispla</a>
                        </h3>
                        <ul class="price-list">
                            <li>$30.00</li>
                            <li>
                                <del>$39.99</del>
                            </li>
                        </ul>
                        <ul class="author-post">
                            <li class="authot-list">
                                <span class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png" alt="img" />
                                </span>
                                <span class="content">Wilson</span>
                            </li>
                            <li class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-button">
                        <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Add
                            To Cart</a>
                    </div>
                </div>

                <div class="shop-box-items style-2">
                    <div class="book-thumb center">
                        <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/03.png"
                                alt="img" /></a>
                        <ul class="shop-icon d-grid justify-content-center align-items-center">
                            <li>
                                <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="shop-cart.html">
                                    <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                        alt="svg-icon" />
                                </a>
                            </li>
                            <li>
                                <a href="shop-details.html"><i class="far fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-content">
                        <h5>Design Low Book</h5>
                        <h3>
                            <a href="shop-details.html">Simple Things You To <br />
                                Save BOOK</a>
                        </h3>
                        <ul class="price-list">
                            <li>$30.00</li>
                            <li>
                                <del>$39.99</del>
                            </li>
                        </ul>
                        <ul class="author-post">
                            <li class="authot-list">
                                <span class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/client-3.png" alt="img" />
                                </span>
                                <span class="content">Wilson</span>
                            </li>
                            <li class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-button">
                        <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Add
                            To Cart</a>
                    </div>
                </div>

                <div class="shop-box-items style-2">
                    <div class="book-thumb center">
                        <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/02.png"
                                alt="img" /></a>
                        <ul class="post-box">
                            <li>Hot</li>
                            <li>-30%</li>
                        </ul>
                        <ul class="shop-icon d-grid justify-content-center align-items-center">
                            <li>
                                <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="shop-cart.html">
                                    <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                        alt="svg-icon" />
                                </a>
                            </li>
                            <li>
                                <a href="shop-details.html"><i class="far fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-content">
                        <h5>Design Low Book</h5>
                        <h3>
                            <a href="shop-details.html">How Deal With Very <br />
                                Bad BOOK</a>
                        </h3>
                        <ul class="price-list">
                            <li>$30.00</li>
                            <li>
                                <del>$39.99</del>
                            </li>
                        </ul>
                        <ul class="author-post">
                            <li class="authot-list">
                                <span class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/client-4.png" alt="img" />
                                </span>
                                <span class="content">Esther</span>
                            </li>
                            <li class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-button">
                        <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Add
                            To Cart</a>
                    </div>
                </div>

                <div class="cta-shop-box">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        Find Your Nest Books!
                    </h2>
                    <h6 class="wow fadeInUp" data-wow-delay=".4s">
                        And get your 25% discount now!
                    </h6>
                    <a href="shop.html" class="theme-btn white-bg wow fadeInUp" data-wow-delay=".6s">Shop Now
                        <i class="fa-solid fa-arrow-right-long"></i></a>
                    <div class="girl-shape">
                        <img src="{{ asset('newFrontend') }}/img/girl-shape.png" alt="shape-img" />
                    </div>
                    <div class="circle-shape">
                        <img src="{{ asset('newFrontend') }}/img/circle-shape.png" alt="shape-img" />
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Cta Banner Section start  -->
    <section class="cta-banner-section fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                style="background-image: url('{{ asset('newFrontend') }}/img/cta-banner.jpg')">
                <div class="book-shape">
                    <img src="{{ asset('newFrontend') }}/img/book-shape.png" alt="shape-img" />
                </div>
                <div class="girl-shape float-bob-x">
                    <img src="{{ asset('newFrontend') }}/img/girl-shape-2.png" alt="shape-img" />
                </div>
                <div class="cta-content text-center">
                    <h2 class="mb-40 wow fadeInUp" data-wow-delay=".3s"
                        style="
                                visibility: visible;
                                animation-delay: 0.3s;
                                animation-name: fadeInUp;
                            ">
                        Get 25% discount in all <br />
                        kind of super Selling
                    </h2>
                    <a href="{{ route('front.shop') }}" class="theme-btn wow fadeInUp" data-wow-delay=".5s"
                        style="
                                visibility: visible;
                                animation-delay: 0.5s;
                                animation-name: fadeInUp;
                            ">Shop
                        Now
                        <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Subjects Section start  -->
    @include('newFrontend.components.homepage.subjects')

    <!-- Category wise product section start  -->
    @include('newFrontend.components.homepage.category-wise-product')



    {{-- <!-- Top Ratting Book Section start  -->
    <section class="top-ratting-book-section fix section-padding section-bg">
        <div class="container">
            <div class="top-ratting-book-wrapper">
                <div class="section-title-area">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Top Rating Books
                        </h2>
                    </div>
                    <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">View More
                        <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('newFrontend') }}/img/top-book/01.png" alt="img" />
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5>Design Low Book</h5>
                                        <h3>
                                            <a href="shop-details.html">Simple Things You To Save
                                                BOOK</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                    alt="svg-icon" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
                                                alt="img" />
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i>
                                        Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('newFrontend') }}/img/top-book/02.png" alt="img" />
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5>Design Low Book</h5>
                                        <h3>
                                            <a href="shop-details.html">How Deal With Very Bad
                                                BOOK</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                    alt="svg-icon" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$39.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
                                                alt="img" />
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i>
                                        Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('newFrontend') }}/img/top-book/03.png" alt="img" />
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5>Design Low Book</h5>
                                        <h3>
                                            <a href="shop-details.html">Qple GPad With Retina
                                                Sisplay</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                    alt="svg-icon" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
                                                alt="img" />
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i>
                                        Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('newFrontend') }}/img/top-book/04.png" alt="img" />
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5>Design Low Book</h5>
                                        <h3>
                                            <a href="shop-details.html">Flovely and Unicom Erna</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                    alt="svg-icon" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$19.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
                                                alt="img" />
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i>
                                        Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('newFrontend') }}/img/top-book/05.png" alt="img" />
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5>Design Low Book</h5>
                                        <h3>
                                            <a href="shop-details.html">Castle In The Sky</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                    alt="svg-icon" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$16.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
                                                alt="img" />
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i>
                                        Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="shop-details.html">
                                    <img src="{{ asset('newFrontend') }}/img/top-book/06.png" alt="img" />
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5>Design Low Book</h5>
                                        <h3>
                                            <a href="shop-details.html">The Hidden Mystery
                                                Behind</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                    alt="svg-icon" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">$30.00</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
                                                alt="img" />
                                        </span>
                                        <span class="content mt-10">Wilson</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="shop-details.html" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i>
                                        Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <!-- Shop Section start  -->
    <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                    <h2>Top Selling Books</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore
                    More
                    <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/01.png"
                                        alt="img" /></a>
                                <ul class="post-box">
                                    <li>Hot</li>
                                    <li>-30%</li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">Simple Things You To <br />
                                        Save BOOK</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-1.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">Wilson</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/02.png"
                                        alt="img" /></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">How Deal With Very <br />
                                        Bad BOOK</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">Alexander</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/03.png"
                                        alt="img" /></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">Qple GPad With Retina <br />
                                        Sisplay</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-3.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">Esther</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/04.png"
                                        alt="img" /></a>
                                <ul class="post-box">
                                    <li>Hot</li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">Qple GPad With Retina <br />
                                        Sisplay</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-4.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">Hawkins</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ asset('newFrontend') }}/img/book/05.png"
                                        alt="img" /></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html">
                                            <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                                alt="svg-icon" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-details.html"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5>Design Low Book</h5>
                                <h3>
                                    <a href="shop-details.html">Simple Things You To <br />
                                        Save BOOK</a>
                                </h3>
                                <ul class="price-list">
                                    <li>$30.00</li>
                                    <li>
                                        <del>$39.99</del>
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <img src="{{ asset('newFrontend') }}/img/testimonial/client-5.png"
                                                alt="img" />
                                        </span>
                                        <span class="content">(Author) Albert</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @include("newFrontend.components.homepage.feature")

    <!-- Testimonial Section start  -->
    @include("newFrontend.components.homepage.testimonial")
    <!-- Author Section start  -->
    @include("newFrontend.components.homepage.author")
    <!-- News Section start  -->
   @include("newFrontend.components.homepage.news")
@endsection
