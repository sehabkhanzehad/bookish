@extends('frontend.app')
@section('title', 'Shop Product List')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
    <section>
        <style>
            .full-description {
                display: none;
            }

            .description-content {
                display: none;
            }

            /* Display the full description when the show-full-description class is applied */
            .show-full-description {
                display: block;
            }
        </style>
        <div class="container mt-3">
            <div class="row bg-white p-lg-4 p-3">
                <div class="col-lg-9 col-md-9 col-12 row px-lg-0">
                    <div class="col-lg-4 col-md-4 col-12 px-lg-0 mb-3">
                        <img src="{{ asset('uploads/custom-images/' . $product->thumb_image) }}" alt=""
                            class="panzoom__content col-12" style="max-width: 300px;" />
                    </div>
                    <div class="col-lg-8 col-md-8 col-12 ps-lg-3">
                        <h5 class="product-title">{{ $product->name }}</h5>
                        <div class="text-lg-start text center">

                            <table class="table table-bordered product_table">
                                @if ($product->writer)
                                    <tr>
                                        <td style="width: 50%;background: #EEEEEE">
                                            <span class="text-secondary">লেখক : </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('front.shop') }}?writer={{ $product->writer_id }}"
                                                class="text-danger text-decoration-none">
                                                {{ $product->writer->name }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif

                                @if ($product->publication)
                                    <tr>
                                        <td style="width: 50%;background: #EEEEEE">
                                            <span class="text-secondary">প্রকাশনী : </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('front.shop') }}?publication={{ $product->publication_id }}"
                                                class="text-danger text-decoration-none">
                                                {{ $product->publication->title }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif

                                @if ($product->subject)
                                    <tr>
                                        <td style="width: 50%;background: #EEEEEE">
                                            <span class="text-secondary">বিষয় : </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('front.shop') }}?subject={{ $product->subject_id }}"
                                                class="text-danger text-decoration-none">
                                                {{ $product->subject->title }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            </table>

                            <div>
                                <small class="text-secondary">
                                    {!! $product->short_description !!}
                                </small>
                            </div>
                            <div class="description-show">
                                <div class="font-14 text-secondary my-3 description-content show-full-description">
                                    {!! mb_strimwidth($product->long_description, 0, 150, '...') !!}
                                </div>
                                <div class="font-14 text-secondary my-3 full-description">
                                    {!! $product->long_description !!}
                                </div>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                            <div class="d-flex mt-4 flex-lg-row flex-column">
                                <div class="d-flex">
                                    @if ($product->offer_price)
                                        <del>
                                            <h4 class="text-muted ms-3 ">₹{{ $product->price }}</h4>
                                        </del>
                                        <span>
                                            <h4 class="text-danger ms-3 ">₹{{ $product->offer_price }}</h4>
                                        </span>
                                    @else
                                        <span>
                                            <h4 class="text-danger ms-3 ">₹{{ $product->price }}</h4>
                                        </span>
                                    @endif
                                </div>
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
                            <input type="hidden" min="1" name="quantity" id="quantity" value="1"
                                class="form-control font-20 rounded-0 shadow-none qty">
                            <div class="mt-3">
                                <a href="{{ route('front.check.single', ['product_id' => $product->id]) }}"
                                    class="btn btn-danger me-lg-3 me-1 mb-2 px-lg-4 px-2 py-lg-3 py-1 font-15 buy-now"
                                    data-url="{{ route('front.cart.store') }}">
                                    {{ BanglaText('order') }}
                                </a>
                                <a data-id="{{ $product->id }}"
                                    style="background: #F85606 !important;color: #ffffff; margin-top: 2%"
                                    data-url="{{ route('front.cart.store') }}"
                                    class="btn btn-default add-to-cart bold font-20 px-lg-4 px-2 py-lg-3 py-1 add_cart col-md-12 col-lg-12 d-none">
                                    <i class="fas fa-shopping-cart"></i> &ensp; {{ BanglaText('cart_add') }}
                                </a>
                                @if ($product->read_file)
                                    <button class="btn btn-warning me-3 mb-2 px-lg-4 px-2 py-lg-3 py-1 font-15"
                                        data-bs-toggle="modal" data-bs-target="#read_more">
                                        একটু পড়ে দেখুন
                                    </button>
                                @endif
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="read_more" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">PDF Pages</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <ul id="pdfImagesList" class="list-unstyled">
                                                @foreach ($product->pdf_images as $file)
                                                    <li>
                                                        <img src="{{ asset($file->image) }}">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                #pdfImagesList>li>img {
                                    width: 100%;
                                }
                            </style>
                            <hr>
                            <div class="d-none ">
                                <div class="col-lg-6 col-md-6 col-12 mb-3">
                                    <img src="assets/images/others/banner.webp" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-3">
                                    <img src="assets/images/others/banner.webp" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-3">
                                    <img src="assets/images/others/banner.webp" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-3">
                                    <img src="assets/images/others/banner.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="mt-3">
                                @auth
                                    <a href="#" class="text-danger text-decoration-none review_submit_show">
                                        <i class="fa fa-edit"></i>
                                        আপনার রিভিউটি লিখুন
                                    </a>
                                @else
                                    <a href="{{ url('login-user') }}" class="text-danger text-decoration-none">
                                        <i class="fa fa-edit"></i>
                                        First Login for give Ratting
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                    @auth
                        <div class="col-lg-12">
                            <form action="{{ route('front.product.product-reviews.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="review_box d-none">
                                    <h5 class="bold-7">রিভিউ এবং রেটিং</h5>
                                    <p class="font-12 text-danger">
                                        আপনিই প্রথম মতামত দিন -
                                    </p>
                                    <p class="font-12 text-secondary">
                                        Your email address will not be published. Required fields are marked <span
                                            class="text-danger">*</span>
                                    </p>
                                    <p class="font-12 text-secondary">
                                        Your rating
                                    </p>

                                    <div class="rating-widget">
                                        <div class='rating-stars text-center'>
                                            <ul id='stars'>
                                                <li class='star' title='Poor' data-value='1'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Fair' data-value='2'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Good' data-value='3'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='Excellent' data-value='4'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' title='WOW!!!' data-value='5'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="hidden" id="ratingValue" name="rating">
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="">Your review *</label>
                                            <textarea class="form-control shadow-none rounded-0" name="review" id="" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3 col-lg-6 col-12">
                                            <label for="">Name *</label>
                                            <input type="text" value="{{ auth()->user()->name }}"
                                                class="form-control rounded-0 shadow-none">
                                        </div>
                                        <div class="mb-3 col-lg-6 col-12">
                                            <label for="">Email *</label>
                                            <input type="text" value="{{ auth()->user()->email }}"
                                                class="form-control rounded-0 shadow-none">
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-danger rounded-0" type="submit">সাবমিট</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endauth
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="border p-2">
                        <h4 class="text-secondary">আরো দেখুন…</h4>
                    </div>
                    @foreach ($relatedProducts as $item)
                        <div class="border p-2 border-top-0">
                            <a href="{{ route('front.product.show', [$item->id]) }}" class="text-decoration-none">
                                <div class="d-flex gap-2">
                                    <div class="image col-4">
                                        <img src="{{ asset('uploads/custom-images/' . $item->thumb_image) }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="text-area pt-2 flex-fill">
                                        <p class="book-title mb-2 p-0 bold-7 font-12 text-dark">{{ $item->name }}</p>
                                        @if ($item->writer)
                                            <p class="book-author mb-2 p-0 font-14 text-secondary">
                                                {{ $item->writer->name }}</p>
                                        @endif
                                        @if ($item->offer_price)
                                            <p class="m-0 p-0 p-price"><del class="text-muted">₹{{ $item->offer_price }}
                                                </del><span class="ps-2 text-danger">₹{{ $item->price }}</span></p>
                                        @else
                                            <p class="m-0 p-0 p-price"><span
                                                    class="ps-2 text-danger">₹{{ $item->price }}</span></p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <div class="fixed_bottom">
        <div class="row">
            <div class="col text-center">

                <a href="{{ route('front.check.single', ['product_id' => $product->id]) }}" style="width: 80%;"
                    class="btn btn-danger me-lg-3 me-1 mb-2 px-lg-4 px-2 py-lg-3 py-1 font-15 buy-now"
                    data-url="{{ route('front.cart.store') }}">
                    {{ BanglaText('order') }}
                </a>

                <!--<a class="" href="{{ route('front.home') }}">-->
                <!--    <div class="text-center">-->
                <!--        <div class="col-12 primary">-->
                <!--            <h3 class="fa fa-home" style="color: #ff6e0a;"></h3>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</a>-->
            </div>
            <div class="col text-center">
                @if ($product->read_file)
                    <button style="width: 80%;" class="btn btn-warning me-3 mb-2 px-lg-4 px-2 py-lg-3 py-1 font-15"
                        data-bs-toggle="modal" data-bs-target="#read_more">
                        একটু পড়ে দেখুন
                    </button>
                @endif
                <!--<a class="toggler">-->
                <!--    <div class="text-center">-->
                <!--        <div class="col-12 primary">-->
                <!--            <h3 class="fa fa-list" style="color: #ff6e0a;"></h3>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</a>-->
            </div>
        </div>
    </div>




@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.description-show .read-more').click(function(e) {
                e.preventDefault();
                var description = $('.description-show .description-content');
                var fullDescription = $(this).prev('.full-description');

                description.toggleClass('show-full-description');
                fullDescription.toggleClass('show-full-description');
                $(this).text(function(i, text) {
                    return text === "Read more" ? "Read less" : "Read more";
                });
            });
        });
        $(document).ready(function() {
            $('.buy-now').on('click', function(e) {
                e.preventDefault();
                let variation_id = $('#size_variation_id').val();
                let variation_size = $('#size_value').val();
                //   alert(variation_size);
                let variation_color = $('#color_value').val();
                let variation_price = $('#pro_price').val();
                var productId = $(this).attr('href').split('/').pop();
                var proQty = $('#quantity').val();
                //   alert(proQty);
                let variation_size_id = $('input[name="variation_size_id"]').val();
                //   alert(variation_size_id);
                let variation_color_id = $('input[name="variation_color_id"]').val();
                var retrieve_discount = $('input[id="retrieve_discount"]').val();

                let image = $('input#pro_img').val();
                let pro_type = $('input#type').val();

                var addToCartUrl = $(this).data('url');
                var checkoutUrl = "{{ route('front.cart.index') }}";
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
                        quantity: proQty,
                        variation_id: variation_id,
                        varSize: variation_size,
                        varColor: variation_color,
                        variation_price: variation_price,
                        variation_size_id: variation_size_id,
                        variation_color_id: variation_color_id,
                        retrieve_discount: retrieve_discount,
                        image: image,
                        pro_type: pro_type
                    },

                    function(response) {

                        if (response.status) {
                            toastr.success(response.msg);
                            // Redirect to checkout page after adding to cart
                            window.location.href = "{{ route('front.checkout.index') }}";
                        } else {
                            // Check if the response contains validation errors
                            if (response.errors) {
                                for (var field in response.errors) {
                                    if (response.errors.hasOwnProperty(field)) {
                                        for (var i = 0; i < response.errors[field].length; i++) {
                                            toastr.error(response.errors[field][i]);
                                        }
                                    }
                                }
                            } else {
                                toastr.error(response.msg ||
                                    'An error occurred while processing your request.');
                            }
                        }

                    });
            });
        });
    </script>
    <script>
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
        });
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
                            toastr.success(res.msg);
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
                        } else {
                            // Check if the response contains validation errors
                            if (res.errors) {
                                for (var field in res.errors) {
                                    if (res.errors.hasOwnProperty(field)) {
                                        for (var i = 0; i < res.errors[field].length; i++) {
                                            toastr.error(res.errors[field][i]);
                                        }
                                    }
                                }
                            } else {
                                toastr.error(res.msg ||
                                    'An error occurred while processing your request.');
                            }
                        }

                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred while processing your request.');
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

        document.getElementById('convertPdfButton').addEventListener('click', function() {
            const pdfUrl = '{{ asset($product->read_file) }}';
            // Load the PDF
            pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
                const pdfImagesList = document.getElementById('pdfImagesList');
                pdfImagesList.innerHTML = '';

                // Loop through each page and convert to image
                for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                    pdf.getPage(pageNum).then(page => {
                        const scale = 2.5;
                        const viewport = page.getViewport({
                            scale
                        });
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        page.render({
                            canvasContext: context,
                            viewport: viewport
                        }).promise.then(() => {
                            const img = document.createElement('img');
                            img.src = canvas.toDataURL();
                            const li = document.createElement('li');
                            li.appendChild(img);
                            pdfImagesList.appendChild(li);
                        });
                    });
                }
            }).catch(error => {
                console.error('Error loading PDF: ', error);
            });
        });


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
