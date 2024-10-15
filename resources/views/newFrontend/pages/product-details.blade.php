@extends('newFrontend.layouts.master')

@section('content')
    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="{{ asset('newFrontend') }}/img/hero/book1.png" alt="book">
        </div>
        <div class="book2">
            <img src="{{ asset('newFrontend') }}/img/hero/book2.png" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>Product Details</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{ route('front.home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Shop Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Details Section Start -->
    <section class="shop-details-section fix section-padding">
        <div class="container">
            <div class="shop-details-wrapper">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="shop-details-image">
                            <div class="tab-content">

                                <div id="thumb1" class="tab-pane fade show active">
                                    <div class="shop-details-thumb">
                                        <img width="315" height="405"
                                            src="{{ asset('uploads/custom-images/' . $product->thumb_image) }}"
                                            alt="img">
                                    </div>
                                </div>

                                {{-- <div id="thumb2" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/02.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb3" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/03.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb4" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/04.png" alt="img">
                                    </div>
                                </div>
                                <div id="thumb5" class="tab-pane fade">
                                    <div class="shop-details-thumb">
                                        <img src="assets/img/shop-details/05.png" alt="img">
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <ul class="nav">
                                <li class="nav-item">
                                    <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                        <img src="assets/img/shop-details/sm-1.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/shop-details/sm-2.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/shop-details/sm-3.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/shop-details/sm-4.png" alt="img">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#thumb5" data-bs-toggle="tab" class="nav-link">
                                        <img src="assets/img/shop-details/sm-5.png" alt="img">
                                    </a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-details-content">
                            <div class="title-wrapper">
                                <h4>{{ $product->name }}</h4>
                                <h5>Stock availability.</h5>
                            </div>
                            <hr>
                            <table class="table">
                                @if ($product->writer)
                                    <tr>
                                        <td style="width: 30%;background: #EEEEEE">
                                            <span class="text-secondary">Writer </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('front.shop') }}?writer={{ $product->writer_id }}"
                                                class="text-decoration-none text-primary">: {{ $product->writer->name }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif

                                @if ($product->publication)
                                    <tr>
                                        <td style="width: 30%; background: #EEEEEE">
                                            <span class="text-secondary">Publication</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('front.shop') }}?publication={{ $product->publication_id }}"
                                                class="text-decoration-none text-primary">: {{ $product->publication->title }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                                @if ($product->category->name)
                                    <tr>
                                        <td style="width: 30%; background: #EEEEEE">
                                            <span class="text-secondary">Category</span>
                                        </td>
                                        <td>
                                            <a href="" class="text-decoration-none text-primary">: {{ $product->category->name }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                                @if ($product->subject)
                                    <tr>
                                        <td style="width: 30%; background: #EEEEEE">
                                            <span class="text-secondary">Subject</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('front.shop') }}?subject={{ $product->subject_id }}" class="text-decoration-none text-primary">: {{ $product->subject->title }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif


                            </table>
                            {{-- <div class="star">
                                <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fas fa-star"></i></a>
                                <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fa-regular fa-star"></i></a>
                                <span>(1 Customer Reviews)</span>
                            </div> --}}
                            <p style="text-align: justify">{!! $product->short_description !!}</p>
                            <div class="price-list">
                                <h3>$16.00</h3>
                            </div>
                            <div class="cart-wrapper">
                                <div class="quantity-basket">
                                    <p class="qty">
                                        <button class="qtyminus" aria-hidden="true">−</button>
                                        <input type="number" name="qty" id="qty2" min="1" max="10"
                                            step="1" value="1">
                                        <button class="qtyplus" aria-hidden="true">+</button>
                                    </p>
                                </div>
                                <button type="button" class="theme-btn style-2" data-bs-toggle="modal"
                                    data-bs-target="#readMoreModal">
                                    Read A little
                                </button>
                                <!-- Read More Modal -->
                                <div class="modal fade" id="readMoreModal" tabindex="-1"
                                    aria-labelledby="readMoreModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body" style="background-image: url(assets/img/popupBg.png);">
                                                <div class="close-btn">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="readMoreBox">
                                                    <div class="content">
                                                        <h3 id="readMoreModalLabel">{{ $product->name }}</h3>
                                                        @if ($product->read_file)
                                                            <iframe src="{{ asset($product->read_file) }}" frameborder="0"
                                                                width="100%"
                                                                style="min-height: 80vh; max-height: 80vh; overflow-y: auto;"></iframe>
                                                        @else
                                                            <p>No file found</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                                <div class="icon-box">
                                    <a href="shop-details.html" class="icon">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="shop-details.html" class="icon-2">
                                        <img src="{{ asset('newFrontend') }}/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </div>
                            </div>
                            {{-- <div class="category-box">
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <span>SKU:</span> FTC1020B65D
                                        </li>
                                        <li>
                                            <span>Category:</span> Kids Toys
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Tags:</span> Design Low Book
                                        </li>
                                        <li>
                                            <span>Format:</span> Hardcover
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Total page:</span> 330
                                        </li>
                                        <li>
                                            <span>Language:</span> English
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Publish Years:</span> 2021
                                        </li>
                                        <li>
                                            <span>Century:</span> United States
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="box-check">
                                <div class="check-list">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i> Free shipping orders from $150
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i> 30 days exchange & return
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i> Mamaya Flash Discount: Starting at 30% Off
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i> Safe & Secure online shopping
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="social-icon">
                                <h6>Also Available On:</h6>
                                <a href="https://www.customer.io/"><img src="{{ asset('newFrontend') }}/img/cutomerio.png"
                                        alt="cutomer.io"></a>
                                <a href="https://www.amazon.com/"><img src="{{ asset('newFrontend') }}/img/amazon.png" alt="amazon"></a>
                                <a href="https://www.dropbox.com/"><img src="{{ asset('newFrontend') }}/img/dropbox.png" alt="dropbox"></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="single-tab section-padding pb-0">
                    <ul class="nav mb-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active"
                                aria-selected="true" role="tab">
                                <h6>Description</h6>
                            </a>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>Additional Information </h6>
                            </a>
                        </li> --}}
                        <li class="nav-item" role="presentation">
                            <a href="#video" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>Video</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#review" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>reviews (3)</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active" role="tabpanel">
                            <div class="description-items">
                                <p>{!! $product->long_description !!}</p>
                            </div>
                        </div>
                        <div id="video" class="tab-pane fade" role="tabpanel">
                           @if($product->video_link)
                           {!! $product->video_link !!}
                           @else
                            <p>No video found</p>
                           @endif
                        </div>
                        <div id="review" class="tab-pane fade" role="tabpanel">
                            <div class="review-items">
                                @foreach ($reviews as $review)

                                @endforeach
                                <div class="review-wrap-area d-flex gap-4">
                                    <div class="review-thumb">
                                        <img src="{{ asset('newFrontend') }}/img/shop-details/review.png" alt="img">
                                    </div>
                                    <div class="review-content">
                                        <div
                                            class="head-area d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="cont">
                                                <h5><a href="news-details.html">{{ $review->user->name }}</a></h5>
                                                <span>{{ $review->created_at->diffForHumans() }}</span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4" style="text-align: justify">{{ $review->review }}</p>
                                    </div>
                                </div>

                                <div class="review-title mt-5 py-15 mb-30">
                                    <h4>Your Rating*</h4>
                                    <div class="rate-now d-flex align-items-center">
                                        <p>Your Rating*</p>
                                        <div class="star">
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <form action="#" id="contact-form" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Name*</span>
                                                    <input type="text" name="name" id="name"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Email*</span>
                                                    <input type="text" name="email" id="email"
                                                        placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".8">
                                                <div class="form-clt">
                                                    <span>Message*</span>
                                                    <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".9">
                                                <div class="form-check d-flex gap-2 from-customradio">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="flexRadioDefault" id="flexRadioDefault12">
                                                    <label class="form-check-label" for="flexRadioDefault12">
                                                        i accept your terms & conditions
                                                    </label>
                                                </div>
                                                <button type="submit" class="theme-btn">
                                                    Submit now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Section Start -->
    <section class="top-ratting-book-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Related Products</h2>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @foreach ($relatedProducts as $product)
                    @include('newFrontend.components.common.single-product')
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
