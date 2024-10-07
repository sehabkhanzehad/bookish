@extends("newFrontend.layouts.master")
@section("content")

    <!-- Hero Section start  -->
    <div class="hero-section hero-1 fix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-6">
                    <div class="hero-items">
                        <div class="book-shape">
                            <img src="{{ asset('newFrontend') }}/img/hero/book.png" alt="shape-img" />
                        </div>
                        <div class="frame-shape1 float-bob-x">
                            <img src="{{ asset('newFrontend') }}/img/hero/frame.png" alt="shape-img" />
                        </div>
                        <div class="frame-shape2 float-bob-y">
                            <img src="{{ asset('newFrontend') }}/img/hero/frame-2.png" alt="shape-img" />
                        </div>
                        <div class="frame-shape3">
                            <img src="{{ asset('newFrontend') }}/img/hero/xstar.png" alt="img" />
                        </div>
                        <div class="frame-shape4 float-bob-x">
                            <img src="{{ asset('newFrontend') }}/img/hero/frame-shape.png" alt="img" />
                        </div>
                        <div class="bg-shape1">
                            <img src="{{ asset('newFrontend') }}/img/hero/bg-shape.png" alt="img" />
                        </div>
                        <div class="bg-shape2">
                            <img src="{{ asset('newFrontend') }}/img/hero/bg-shape2.png" alt="shape-img" />
                        </div>
                        <div class="hero-content">
                            <h6 class="wow fadeInUp" data-wow-delay=".3s">
                                Up to 30% Off
                            </h6>
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">
                                Get Your New Book <br />
                                With The Best Price
                            </h1>
                            <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                                <button type="submit" class="theme-btn">
                                    Shop Now
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6">
                    <div class="girl-image">
                        <img class="float-bob-x" src="{{ asset('newFrontend') }}/img/hero/hero-girl.png"
                            alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section start  -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="icon-icon-1"></i>
                    </div>
                    <div class="content">
                        <h3>Return & refund</h3>
                        <p>Money back guarantee</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <i class="icon-icon-2"></i>
                    </div>
                    <div class="content">
                        <h3>Secure Payment</h3>
                        <p>30% off by subscribing</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <i class="icon-icon-3"></i>
                    </div>
                    <div class="content">
                        <h3>Quality Support</h3>
                        <p>Always online 24/7</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="icon-icon-4"></i>
                    </div>
                    <div class="content">
                        <h3>Daily Offers</h3>
                        <p>20% off by subscribing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Catagories Section start  -->
    <section class="book-catagories-section fix section-padding">
        <div class="container">
            <div class="book-catagories-wrapper">
                <div class="section-title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Top Categories Book
                    </h2>
                </div>
                <div class="array-button">
                    <button class="array-prev">
                        <i class="fal fa-arrow-left"></i>
                    </button>
                    <button class="array-next">
                        <i class="fal fa-arrow-right"></i>
                    </button>
                </div>
                <div class="swiper book-catagories-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('newFrontend') }}/img/book-categori/01.png" alt="img" />
                                    <div class="circle-shape">
                                        <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                            alt="shape-img" />
                                    </div>
                                </div>
                                <div class="number">01</div>
                                <h3>
                                    <a href="shop-details.html">Romance Books (80)</a>
                                </h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('newFrontend') }}/img/book-categori/02.png" alt="img" />
                                    <div class="circle-shape">
                                        <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                            alt="shape-img" />
                                    </div>
                                </div>
                                <div class="number">02</div>
                                <h3>
                                    <a href="shop-details.html">Design Low Book (6)</a>
                                </h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('newFrontend') }}/img/book-categori/03.png" alt="img" />
                                    <div class="circle-shape">
                                        <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                            alt="shape-img" />
                                    </div>
                                </div>
                                <div class="number">03</div>
                                <h3>
                                    <a href="shop-details.html">safe Home (5)</a>
                                </h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('newFrontend') }}/img/book-categori/04.png" alt="img" />
                                    <div class="circle-shape">
                                        <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                            alt="shape-img" />
                                    </div>
                                </div>
                                <div class="number">04</div>
                                <h3>
                                    <a href="shop-details.html">Grow flower (7)</a>
                                </h3>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('newFrontend') }}/img/book-categori/05.png" alt="img" />
                                    <div class="circle-shape">
                                        <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                            alt="shape-img" />
                                    </div>
                                </div>
                                <div class="number">05</div>
                                <h3>
                                    <a href="shop-details.html">Adventure book (4)</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix">
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
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/client-1.png"
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
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/client-2.png"
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
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/client-3.png"
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
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/client-4.png"
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
    </section>

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
                    <a href="shop.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s"
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

    <!-- Top Ratting Book Section start  -->
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
                                                <img class="icon"
                                                    src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                                <img class="icon"
                                                    src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                                <img class="icon"
                                                    src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                                <img class="icon"
                                                    src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                                <img class="icon"
                                                    src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                                <img class="icon"
                                                    src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
    </section>

    <!-- Shop Section start  -->
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
                                            <img class="icon"
                                                src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
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
                                            <img class="icon"
                                                src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
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
                                            <img class="icon"
                                                src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
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
                                            <img class="icon"
                                                src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
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
                                            <img class="icon"
                                                src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
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
                                <a href="shop-details.html" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section start  -->
    <section class="testimonial-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-left">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                    What our client say
                </h2>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                One of the most powerful takeaways from this
                                book is the emphasis on adopting a mindset
                                of abundance and possibility. The idea that
                                we can choose to see opportunities rather
                                than limitations is a game-changer.
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="
                                                background-image: url('{{ asset('newFrontend') }}/img/testimonial/01.jpg');
                                            ">
                                        <div class="icon">
                                            <img class="shape"
                                                src="{{ asset('newFrontend') }}/img/testimonial/shape.svg"
                                                alt="img" />
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="logo">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/logo1.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                The idea that we can choose to see
                                opportunities rather than limitations is a
                                game-changer. The book encourages readers to
                                step out of their comfort zones and embrace
                                a more positive outlook on life.
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="
                                                background-image: url('{{ asset('newFrontend') }}/img/testimonial/02.jpg');
                                            ">
                                        <div class="icon">
                                            <img class="shape"
                                                src="{{ asset('newFrontend') }}/img/testimonial/shape.svg"
                                                alt="img" />
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Dianne Russell</h3>
                                        <span>Project Manager</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="logo">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/logo2.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                "The Art of Possibility" by Rosamund Stone
                                Zander and Benjamin Zander is a
                                transformative read that challenges
                                conventional thinking and opens up new
                                possibilities. As a reader, I found myself
                                profoundly .
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="
                                                background-image: url('{{ asset('newFrontend') }}/img/testimonial/03.jpg');
                                            ">
                                        <div class="icon">
                                            <img class="shape"
                                                src="{{ asset('newFrontend') }}/img/testimonial/shape.svg"
                                                alt="img" />
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="logo">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/logo1.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                From the very first chapter, the authors
                                engage readers with inspiring stories and
                                practical insights. Benjamin Zander's
                                experiences as a conductor bring a unique
                                perspective to leadership .
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="
                                                background-image: url('{{ asset('newFrontend') }}/img/testimonial/04.jpg');
                                            ">
                                        <div class="icon">
                                            <img class="shape"
                                                src="{{ asset('newFrontend') }}/img/testimonial/shape.svg"
                                                alt="img" />
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="logo">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/logo2.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section start  -->
    <section class="team-section fix section-padding pt-0 margin-bottom-30">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                    Featured Author
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br />
                    Donec at nulla nulla. Duis posuere ex lacus
                </p>
            </div>
            <div class="array-button">
                <button class="array-prev">
                    <i class="fal fa-arrow-left"></i>
                </button>
                <button class="array-next">
                    <i class="fal fa-arrow-right"></i>
                </button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/team/01.jpg" alt="img" />
                                </div>
                                <div class="shape-img">
                                    <img src="{{ asset('newFrontend') }}/img/team/shape-img.png" alt="img" />
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6>
                                    <a href="team-details.html">Esther Howard</a>
                                </h6>
                                <p>10 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/team/02.jpg" alt="img" />
                                </div>
                                <div class="shape-img">
                                    <img src="{{ asset('newFrontend') }}/img/team/shape-img.png" alt="img" />
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6>
                                    <a href="team-details.html">Shikhon Islam</a>
                                </h6>
                                <p>07 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/team/03.jpg" alt="img" />
                                </div>
                                <div class="shape-img">
                                    <img src="{{ asset('newFrontend') }}/img/team/shape-img.png" alt="img" />
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6>
                                    <a href="team-details.html">Kawser Ahmed</a>
                                </h6>
                                <p>04 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/team/04.jpg" alt="img" />
                                </div>
                                <div class="shape-img">
                                    <img src="{{ asset('newFrontend') }}/img/team/shape-img.png" alt="img" />
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6>
                                    <a href="team-details.html">Brooklyn Simmons</a>
                                </h6>
                                <p>15 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/team/05.jpg" alt="img" />
                                </div>
                                <div class="shape-img">
                                    <img src="{{ asset('newFrontend') }}/img/team/shape-img.png" alt="img" />
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6>
                                    <a href="team-details.html">Leslie Alexander</a>
                                </h6>
                                <p>05 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{ asset('newFrontend') }}/img/team/06.jpg" alt="img" />
                                </div>
                                <div class="shape-img">
                                    <img src="{{ asset('newFrontend') }}/img/team/shape-img.png" alt="img" />
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6>
                                    <a href="team-details.html">Guy Hawkins</a>
                                </h6>
                                <p>12 Published Books</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section start  -->
    <section class="news-section fix section-padding section-bg">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                    Our Latest News
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br />
                    Donec at nulla nulla. Duis posuere ex lacus
                </p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{ asset('newFrontend') }}/img/news/09.jpg" alt="img" />
                            <img src="{{ asset('newFrontend') }}/img/news/09.jpg" alt="img" />
                            <div class="post-box">Activities</div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    Feb 10, 2024
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i> By
                                    Admin
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">Montes suspendisse massa curae
                                    malesuada</a>
                            </h3>
                            <a href="news-details.html" class="theme-btn-2">Read More
                                <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{ asset('newFrontend') }}/img/news/10.jpg" alt="img" />
                            <img src="{{ asset('newFrontend') }}/img/news/10.jpg" alt="img" />
                            <div class="post-box">Activities</div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    Mar 20, 2024
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i> By
                                    Admin
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">Playful Picks Paradise: Kids’
                                    Essentials with Dash.</a>
                            </h3>
                            <a href="news-details.html" class="theme-btn-2">Read More
                                <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{ asset('newFrontend') }}/img/news/11.jpg" alt="img" />
                            <img src="{{ asset('newFrontend') }}/img/news/11.jpg" alt="img" />
                            <div class="post-box">Activities</div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    Jun 14, 2024
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i> By
                                    Admin
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">Tiny Emporium: Playful Picks for Kids’
                                    Delightful Days.</a>
                            </h3>
                            <a href="news-details.html" class="theme-btn-2">Read More
                                <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{ asset('newFrontend') }}/img/news/12.jpg" alt="img" />
                            <img src="{{ asset('newFrontend') }}/img/news/12.jpg" alt="img" />
                            <div class="post-box">Activities</div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    Mar 12, 2024
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i> By
                                    Admin
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">Eu parturient dictumst fames quam
                                    tempor</a>
                            </h3>
                            <a href="news-details.html" class="theme-btn-2">Read More
                                <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection