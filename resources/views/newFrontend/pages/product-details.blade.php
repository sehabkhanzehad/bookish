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
                                {{-- <h5>Stock availability.</h5> --}}
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
                                                class="text-decoration-none text-primary">:
                                                {{ $product->publication->title }}
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
                                            <a
                                                href="{{ route('front.shop') }}?category={{ $product->category_id }}"class="text-decoration-none text-primary">:
                                                {{ $product->category->name }}
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
                                            <a href="{{ route('front.shop') }}?subject={{ $product->subject_id }}"
                                                class="text-decoration-none text-primary">: {{ $product->subject->title }}
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
                                @if ($product->offer_price)
                                    <h3><del style="color: rgb(75, 73, 73)">{{ $product->price }} Tk</del>
                                        <span>{{ $product->offer_price }} Tk</span>
                                    </h3>
                                @else
                                    <h3>{{ $product->price }} Tk</h3>
                                @endif

                            </div>
                            @if ($product->type == 'variable')
                                <h6 id="select_size">Select Size : </h6>
                            @else
                            @endif
                            @if ($product->type == 'variable')
                                @if (count($product->variations))
                                    <div class="sizes" id="sizes" style="margin-bottom: 5px;">
                                        @foreach ($product->variations as $v)
                                            @if (!empty($v->size->title))
                                                <div class="size" data-proid="{{ $v->product_id }}"
                                                    data-varprice="{{ $v->sell_price }}"
                                                    data-varsize="{{ $v->size->title }}" value="{{ $v->id }}"
                                                    data-varSizeId="{{ $v->size_id }}">
                                                    @if ($v->size->title == 'free')
                                                        {{ $v->size->title }}
                                                        <input type="hidden" id="size_value" name="variation_id">
                                                        <input type="hidden" id="size_variation_id"
                                                            name="size_variation_id">
                                                        <input type="hidden" name="pro_price" id="pro_price">
                                                        <input type="hidden" name="variation_size_id"
                                                            id="variation_size_id">
                                                    @else
                                                        {{ $v->size->title }}
                                                        <input type="hidden" id="size_value" name="variation_id">
                                                        <input type="hidden" id="size_variation_id"
                                                            name="size_variation_id">
                                                        <input type="hidden" name="pro_price" id="pro_price">
                                                        <input type="hidden" name="variation_size_id"
                                                            id="variation_size_id">
                                                    @endif
                                                </div>
                                            @else
                                                Size Not Available
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <input type="hidden" id="size_value" name="variation_id" value="free">
                                    <input type="text" name="variation_size_id" id="variation_size_id" value="1">
                                @endif
                            @else
                                <input type="hidden" id="size_value" name="variation_id" value="free">
                                <input type="hidden" name="variation_size_id" id="variation_size_id" value="1">
                            @endif
                            @if (!empty($product->prod_color == 'varcolor'))
                                @if ($product->type == 'variable')
                                    <h6 id="select_color">Select Color : </h6>
                                @else
                                @endif

                                <div class="colors" id="colors">
                                    @foreach ($product->colorVariations as $v)
                                        @if (!empty($v->color->code))
                                            <div class="color" style="background: {{ $v->color->code }}"
                                                data-proid="{{ $v->product_id }}" data-colorid="{{ $v->color_id }}"
                                                data-varcolor="{{ $v->color->name }}" value="{{ $v->id }}"
                                                data-variationColorId="{{ $v->color_id }}">
                                                <input type="hidden" id="color_val" name="color_id">
                                                <!--<img src="{{ asset($v->var_images) }}" width="50px" height="50px" /> -->
                                                <input type="hidden" id="color_value" name="variationColor_id">
                                                <input type="hidden" id="variation_color_id" name="variation_color_id">
                                            </div>
                                        @else
                                            Color Not Available
                                        @endif
                                    @endforeach
                                </div>
                            @else
                                <input type="hidden" id="color_value" name="variationColor_id" value="default">
                                <input type="hidden" id="variation_color_id" name="variation_color_id" value="1">
                            @endif

                            {{-- <input type="hidden" min="1" name="quantity" id="quantity" value="1"
                                class="form-control font-20 rounded-0 shadow-none qty"> --}}

                            <div class="cart-wrapper">
                                <div class="quantity-basket">
                                    <p class="qty">
                                        <button class="qtyminus" aria-hidden="true">−</button>
                                        <input type="number" name="quantity" id="quantity" min="1"
                                            max="10" step="1" value="1">
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
                                            <div class="modal-body"
                                                style="background-image: url(assets/img/popupBg.png);">
                                                <div class="close-btn">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="readMoreBox">
                                                    <div class="content">
                                                        <h3 id="readMoreModalLabel">{{ $product->name }}</h3>
                                                        @if ($product->read_file)
                                                            <iframe src="{{ asset($product->read_file) }}"
                                                                frameborder="0" width="100%"
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
                                <br>
                                <a data-id="{{ $product->id }}" data-url="{{ route('front.cart.store') }}"
                                    class="theme-btn add-to-cart add_cart"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                                <a data-id="{{ $product->id }}" data-url="{{ route('front.cart.store') }}"
                                    class="theme-btn buy-now">Buy Now</a>
                                {{-- <div class="icon-box">
                                    <a href="shop-details.html" class="icon">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="shop-details.html" class="icon-2">
                                        <img src="{{ asset('newFrontend') }}/img/icon/shuffle.svg" alt="svg-icon">
                                    </a>
                                </div> --}}
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
                                <h6>reviews ({{ $reviews->count() }})</h6>
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
                            @if ($product->video_link)
                                {!! $product->video_link !!}
                            @else
                                <p>No video found</p>
                            @endif
                        </div>
                        <div id="review" class="tab-pane fade" role="tabpanel">
                            <div class="review-items">
                                @foreach ($reviews as $review)
                                    <div class="review-wrap-area d-flex gap-4">
                                        <div class="review-thumb">
                                            {{-- <img src="{{ asset('newFrontend') }}/img/shop-details/review.png"
                                                alt="img"> --}}
                                            {{-- make random image avatar with third party api and random color using name --}}
                                            <img src="https://ui-avatars.com/api/?name={{ $review->user->name }}&color=7F9CF5&background=EBF4FF"
                                                alt="img">
                                        </div>
                                        <div class="review-content">
                                            <div
                                                class="head-area d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                <div class="cont">
                                                    <h5><a href="news-details.html">{{ $review->user->name }}</a></h5>
                                                    <span>{{ $review->created_at->diffForHumans() }}</span>
                                                </div>
                                                <div class="star">
                                                    @for ($i = 0; $i < $review->rating; $i++)
                                                        <i class="fa-solid fa-star"></i>
                                                    @endfor

                                                    @for ($i = 0; $i < 5 - $review->rating; $i++)
                                                        <i class="fa-regular fa-star"></i>
                                                    @endfor

                                                    {{-- <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i> --}}
                                                </div>
                                            </div>
                                            <p class="mt-30 mb-4" style="text-align: justify">{{ $review->review }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                @auth
                                    {{-- make ratting form --}}
                                    <div class="review-form">
                                        <form action="{{ route('front.product.product-reviews.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <div class="form-group">
                                                <label for="review">
                                                    Rating</label>
                                                <input type="number" name="rating" id="" class="form-control"
                                                    min="1" max="5">
                                            </div>
                                            <div class="form-group">
                                                <label for="review">Name</label>
                                                <input type="text" name="name" id=""
                                                    value="{{ Auth::user()->name }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="review">Email</label>
                                                <input type="text" name="email" id=""
                                                    value="{{ Auth::user()->email }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="review">Review</label>
                                                <textarea name="review" id="" class="form-control" rows="5"></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <button type="submit" class="theme-btn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                @else
                                    <button type="button" class="theme-btn rounded-0" data-bs-toggle="modal"
                                        data-bs-target="#loginModal"><i class="fa fa-edit"></i>
                                        First Login for give Ratting</button>
                                @endauth


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
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('.description-show .read-more').click(function(e) {
        //         e.preventDefault();
        //         var description = $('.description-show .description-content');
        //         var fullDescription = $(this).prev('.full-description');

        //         description.toggleClass('show-full-description');
        //         fullDescription.toggleClass('show-full-description');
        //         $(this).text(function(i, text) {
        //             return text === "Read more" ? "Read less" : "Read more";
        //         });
        //     });
        // });
        $(document).ready(function() {

            $(document).on('click', '.buy-now', function(e) {

                let variation_id = $('#size_variation_id').val();
                let variation_size = $('#size_value').val();
                let variation_size_id = $('input[name="variation_size_id"]').val();
                let variation_color = $('#color_value').val();
                let variation_color_id = $('input[name="variation_color_id"]').val();
                let variation_price = $('#pro_price').val();
                var quantity = $('#quantity').val();
                let image = $('input#pro_img').val();
                let pro_type = $('input#type').val();


                let proName = $('input[name="product_name"]').val();
                let proId = $('input[name="product_id"]').val();
                let catId = $('input[name="category_id"]').val();

                // alert(variation_id);

                window.dataLayer = window.dataLayer || [];

                dataLayer.push({
                    ecommerce: null
                });
                dataLayer.push({
                    event: "add_to_cart",
                    ecommerce: {
                        currency: "BDT",
                        value: variation_price,
                        items: [{
                            item_id: proId,
                            item_name: proName,
                            item_category: catId,
                            price: variation_price,
                            quantity: quantity
                        }]
                    }
                });


                let id = $(this).data('id');
                let url = $(this).data('url');

                addToCart(url, id, variation_size, variation_color, variation_id, variation_price, quantity,
                    variation_size_id, variation_color_id, image, pro_type, type = "");
            });


            function addToCart(url, id, varSize = "", varColor = "", variation_id = "", variation_price = "",
                quantity, variation_size_id, variation_color_id, image = "", pro_type, type = "") {

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                showLoader();
                $.ajax({
                    type: "POST",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id,
                        varSize,
                        varColor,
                        variation_id,
                        variation_price,
                        quantity,
                        variation_size_id,
                        variation_color_id,
                        image,
                        pro_type
                    },
                    success: function(res) {

                        if (res.status) {
                            // toastr.success(res.msg);
                            // alert('Product added to cart');
                            hideLoader();
                            successToast(res.msg);
                            // set timeout to show success message
                            setTimeout(function() {
                                document.location.href = "{{ route('front.checkout.index') }}";
                            }, 1000);

                        } else {
                            // Check if the response contains validation errors
                            if (res.errors) {
                                for (var field in res.errors) {
                                    if (res.errors.hasOwnProperty(field)) {
                                        for (var i = 0; i < res.errors[field].length; i++) {
                                            // toastr.error(res.errors[field][i]);
                                            alert(res.errors[field][i]);
                                        }
                                    }
                                }
                            } else {
                                // toastr.error(res.msg ||'An error occurred while processing your request.');
                                alert("Error2");
                            }
                        }

                    },
                    error: function(xhr, status, error) {
                        // toastr.error('An error occurred while processing your request.');
                        alert("An error occurred while processing your request.");
                    }
                });
            }


        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            $('.increase-qty').on('click', function() {
                var qtyInput = $(this).siblings('.qty');
                var newQuantity = parseInt(qtyInput.val()) + 1;
                qtyInput.val(newQuantity);
            });

            $('.decrease-qty').on('click', function() {
                var qtyInput = $(this).siblings('.qty');
                var newQuantity = parseInt(qtyInput.val()) - 1;
                if (newQuantity > 0) {
                    qtyInput.val(newQuantity);
                } else {

                }
            });
        }); --}}
    </script>
    <script>
        $(function() {

            $(document).on('click', '.add-to-cart', function(e) {

                let variation_id = $('#size_variation_id').val();
                let variation_size = $('#size_value').val();
                let variation_size_id = $('input[name="variation_size_id"]').val();
                let variation_color = $('#color_value').val();
                let variation_color_id = $('input[name="variation_color_id"]').val();
                let variation_price = $('#pro_price').val();
                var quantity = $('#quantity').val();
                let image = $('input#pro_img').val();
                let pro_type = $('input#type').val();


                let proName = $('input[name="product_name"]').val();
                let proId = $('input[name="product_id"]').val();
                let catId = $('input[name="category_id"]').val();

                window.dataLayer = window.dataLayer || [];

                dataLayer.push({
                    ecommerce: null
                });
                dataLayer.push({
                    event: "add_to_cart",
                    ecommerce: {
                        currency: "BDT",
                        value: variation_price,
                        items: [{
                            item_id: proId,
                            item_name: proName,
                            item_category: catId,
                            price: variation_price,
                            quantity: quantity
                        }]
                    }
                });


                let id = $(this).data('id');
                let url = $(this).data('url');

                addToCart(url, id, variation_size, variation_color, variation_id, variation_price, quantity,
                    variation_size_id, variation_color_id, image, pro_type, type = "");
            });


            function addToCart(url, id, varSize = "", varColor = "", variation_id = "", variation_price = "",
                quantity, variation_size_id, variation_color_id, image = "", pro_type, type = "") {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                showLoader();
                $.ajax({
                    type: "POST",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id,
                        varSize,
                        varColor,
                        variation_id,
                        variation_price,
                        quantity,
                        variation_size_id,
                        variation_color_id,
                        image,
                        pro_type
                    },
                    success: function(res) {

                        if (res.status) {
                            // toastr.success(res.msg);
                            // alert('Product added to cart');
                            hideLoader();
                            successToast(res.msg);
                            // set timeout to show success message
                            setTimeout(function() {
                                if (type) {

                                    if (res.url !== '') {
                                        document.location.href = res.url;
                                    } else {
                                        alert('no');
                                        // Handle specific case
                                    }
                                } else {
                                    window.location.reload();
                                }
                            }, 1000);

                        } else {
                            // Check if the response contains validation errors
                            if (res.errors) {
                                for (var field in res.errors) {
                                    if (res.errors.hasOwnProperty(field)) {
                                        for (var i = 0; i < res.errors[field].length; i++) {
                                            // toastr.error(res.errors[field][i]);
                                            alert(res.errors[field][i]);
                                        }
                                    }
                                }
                            } else {
                                // toastr.error(res.msg ||'An error occurred while processing your request.');
                                alert("Error2");
                            }
                        }

                    },
                    error: function(xhr, status, error) {
                        // toastr.error('An error occurred while processing your request.');
                        alert("An error occurred while processing your request.");
                    }
                });
            }

            // ... other functions ...


        });



        $(document).ready(function() {

            var firstSizeElement = $('#sizes .size:first');
            var firstColorElement = $('#colors .color:first');
            firstSizeElement.click();
            firstColorElement.click();

            // $('.popup-link').magnificPopup({
            //     type: 'image',
            //     gallery: {
            //         enabled: true
            //     }
            // });
        });

        $('#sizes .size').on('click', function() {
            $('#sizes .size').removeClass('active');
            $(this).addClass('active');
            let value = $(this).attr('value');
            let varSize = $(this).data('varsize');
            let variation_size_id = $(this).data('varsizeid');
            //   alert(variation_size_id);
            $('#select_size').text('Select Size : ' + varSize);

            var retrieve_price = $('input[id="retrieve_price"]').val();

            // Assuming you have retrieved the selected variation price somehow
            let variationPrice = parseFloat($(this).data('varprice'));

            $.ajax({
                type: 'get',
                url: '{{ route('front.product.get-variation_price') }}',
                data: {
                    varSize,
                    value,
                    variationPrice, // Pass variation price to the server
                    variation_size_id, // Pass variation price to the server
                },
                success: function(res) {
                    $('.current-price-product').text('' + res.price);
                    $('#size_value').val();
                    $('#variation_size_id').val();
                    $('#price_val').val(res.price);
                    $('#pro_price').val(res.price);

                    var retrieve_discount = Number(retrieve_price) - Number(res.price);
                    $('input[id="retrieve_discount"]').val(retrieve_discount);
                    $('span#dis_amount').text(retrieve_discount);
                    console.log(res);
                }
            });

            $("#size_value").val(varSize);
            $("#size_variation_id").val(value);
            $("#variation_size_id").val(variation_size_id);
        });


        let imageClick = false;

        $('#colors .color').on('click', function() {
            $('#colors .color').removeClass('active');
            $(this).addClass('active');
            let value = $(this).attr('value');
            let varColor = $(this).data('varcolor');
            let product_id = $(this).data('proid');
            let color_id = $(this).data('colorid');
            let variation_color_id = $(this).data('variationcolorid');
            let variation_size_id = $('input[name="variation_size_id"]').val();
            //   alert(product_id);

            $('#select_color').text('Select Color : ' + varColor);

            // Assuming you have retrieved the selected variation price somehow
            let variationColor = parseFloat($(this).data('varcolor'));

            $.ajax({
                type: 'get',
                url: '{{ route('front.product.get-variation_color') }}',
                data: {
                    varColor,
                    value,
                    variationColor,
                    product_id,
                    color_id,
                    variation_color_id,
                    variation_size_id
                    // Pass variation price to the server
                },
                success: function(res) {
                    //$('.current-price-product').text('' + res.price);
                    $('.testslide-image').html(res.var_images);
                    $('input[name="pro_img"]').val(res.pro_img);
                    $('#color_value').val();
                    //$('#price_val1').val(res.price);
                    console.log(res);
                    imageClick = true;

                    if (res.stock != '0') {
                        $('p.stock_check').text('');

                    } else {

                        $('p.stock_check').text('Stock not available');
                    }


                }
            });

            $("#color_value").val(varColor);
            $("#color_value1").val(value);
            $("#variation_color_id").val(variation_color_id);
        });

        $(document).on('click', '.slider-container', function() {
            if (imageClick) {

            }
        });

        $(document).on('click', 'button.readMores', function() {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('front.readPdf') }}",
                method: 'GET',
                data: {
                    id
                },
                success: function(res) {
                    if (res.success) {
                        $('div#read_more').html(res.html).modal('show');
                    }
                }
            });
        });

        // document.getElementById('convertPdfButton').addEventListener('click', function() {
        //     const pdfUrl = '{{ asset($product->read_file) }}';
        //     // Load the PDF
        //     pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
        //         const pdfImagesList = document.getElementById('pdfImagesList');
        //         pdfImagesList.innerHTML = '';

        //         // Loop through each page and convert to image
        //         for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
        //             pdf.getPage(pageNum).then(page => {
        //                 const scale = 2.5;
        //                 const viewport = page.getViewport({
        //                     scale
        //                 });
        //                 const canvas = document.createElement('canvas');
        //                 const context = canvas.getContext('2d');
        //                 canvas.height = viewport.height;
        //                 canvas.width = viewport.width;

        //                 page.render({
        //                     canvasContext: context,
        //                     viewport: viewport
        //                 }).promise.then(() => {
        //                     const img = document.createElement('img');
        //                     img.src = canvas.toDataURL();
        //                     const li = document.createElement('li');
        //                     li.appendChild(img);
        //                     pdfImagesList.appendChild(li);
        //                 });
        //             });
        //         }
        //     }).catch(error => {
        //         console.error('Error loading PDF: ', error);
        //     });
        // });


        // JavaScript function to change the big image
        function changeImage(imageUrl) {

            document.getElementById('big-image').src = imageUrl;
        }


        function changeImage(newImageSrc) {
            // Get the "big-image" element by its ID
            var bigImage = document.getElementById("big-image");

            // Update the source of the big image with the new image source
            bigImage.src = newImageSrc;
        }
    </script>
@endpush
