@extends('newFrontend.layouts.master')
@section('title')
    Checkouta
@endsection

@section('content')

<style>
    .container-fluid * {
        font-weight: 600;
    }
</style>
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
                <h1>Checkout</h1>
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
                            Checkout
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Cart Section Start -->
    <div class="cart-section"> 
        <div class="container">
            <div class="main-cart-wrapper">
                {{-- <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center">
                                                <a href="shop-cart.html" class="remove-icon">
                                                    <img src="assets/img/icon/icon-9.svg" alt="img">
                                                </a>
                                                <span class="cart">
                                                    <img src="assets/img/shop-cart/01.png" alt="img">
                                                </span>
                                                <span class="cart-title">
                                                    simple Things You To Save Book
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="cart-price">$30.00</span>
                                        </td>
                                        <td>
                                            <span class="quantity-basket">
                                                <span class="qty">
                                                    <button class="qtyminus" aria-hidden="true">−</button>
                                                    <input type="number" name="qty" id="qty2" min="1"
                                                        max="10" step="1" value="1">
                                                    <button class="qtyplus" aria-hidden="true">+</button>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="subtotal-price">$120.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center">
                                                <a href="shop-cart.html" class="remove-icon">
                                                    <img src="assets/img/icon/icon-9.svg" alt="img">
                                                </a>
                                                <span class="cart">
                                                    <img src="assets/img/shop-cart/02.png" alt="img">
                                                </span>
                                                <span class="cart-title">
                                                    Qple GPad With Retina Sisplay
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="cart-price">$30.00</span>
                                        </td>
                                        <td>
                                            <span class="quantity-basket">
                                                <span class="qty">
                                                    <button class="qtyminus" aria-hidden="true">−</button>
                                                    <input type="number" name="qty" id="qty3" min="1"
                                                        max="10" step="1" value="1">
                                                    <button class="qtyplus" aria-hidden="true">+</button>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="subtotal-price">$120.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center">
                                                <a href="shop-cart.html" class="remove-icon">
                                                    <img src="assets/img/icon/icon-9.svg" alt="img">
                                                </a>
                                                <span class="cart">
                                                    <img src="assets/img/shop-cart/03.png" alt="img">
                                                </span>
                                                <span class="cart-title">
                                                    Flovely and Unicom Erna
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="cart-price">$30.00</span>
                                        </td>
                                        <td>
                                            <span class="quantity-basket">
                                                <span class="qty">
                                                    <button class="qtyminus" aria-hidden="true">−</button>
                                                    <input type="number" name="qty" id="qty" min="1"
                                                        max="10" step="1" value="1">
                                                    <button class="qtyplus" aria-hidden="true">+</button>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="subtotal-price">$120.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-wrapper-footer">
                            <form action="shop-cart.html">
                                <div class="input-area">
                                    <input type="text" name="Coupon Code" id="CouponCode" placeholder="Coupon Code">
                                    <button type="submit" class="theme-btn">
                                        Apply
                                    </button>
                                </div>
                            </form>
                            <a href="shop-cart.html" class="theme-btn">
                                Update Cart
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="table-responsive cart-total">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Cart Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center justify-content-between">
                                                <span class="sub-title">Subtotal:</span>
                                                <span class="sub-price">$84.00</span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center  justify-content-between">
                                                <span class="sub-title">Shipping:</span>
                                                <span class="sub-text">
                                                    Free
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center  justify-content-between">
                                                <span class="sub-title">Total: </span>
                                                <span class="sub-price sub-price-total">$84.00</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="checkout.html" class="theme-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div> --}}
                <div class="row mt-5">
                    <div id="" class="col-lg-8">
                        <div class="card text-center">
                            <div class="card-header text-center" style="background-color: #036280">
                                <p style="font-size: 15px; color: white; font-weight: 600">Order Information</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr style="font-size: 16px !important;
                                                        padding-bottom: none !important;">
                                                <th></th>
                                                <th style="font-size: 16px !important;">Image</th>
                                                <th style="font-size: 16px !important;">Name</th>
                                                {{-- <th style="font-size: 16px !important;">Size</th> --}}
                                                {{-- <th style="font-size: 16px !important;">Color</th> --}}
                                                <th style="font-size: 16px !important;">Quantity</th>
                                                <th style="font-size: 16px !important;">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $sub_total = 0; @endphp
                                            @forelse($cart as $key => $item)
                                                <tr>

                                                    <td>
                                                        <div class="remove">
                                                            <button class="btn remove-item" data-id="{{ $key }}">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td scope="row">
                                                        @if ($item['type'] == 'variable')
                                                            @if ($item['variation_color'] != 'default')
                                                                <img src="{{ asset($item['image']) }}" alt=""
                                                                    class="rounded border" style="height: 60px;width: 60px;"
                                                                    width="">
                                                            @else
                                                                <img src="{{ asset($item['image']) }}" alt=""
                                                                    class="rounded border" style="height: 60px;width: 60px;"
                                                                    width="">
                                                            @endif
                                                        @else
                                                            <img src="{{ asset($item['image']) }}" alt=""
                                                                class="rounded border" style="height: 60px;width: 60px;"
                                                                width="">
                                                        @endif
                                                    </td>
                                                    <td>{{ Str::limit($item['name'], 15) }}</td>
                                                    {{-- <td>{{ $item['variation_size'] }}</td> --}}
                                                    {{-- <td>{{ $item['variation_color'] }}</td> --}}
                                                    <td>
                                                        <div class="d-flex">
                                                            <button class="btn rounded-0 border border-muted dec"
                                                                data-id="{{ $key }}">-</button>
                                                    <input type="number" min="1" class="border text-black border-muted text-center rounded-0 quantity-value" value="{{ $item['quantity'] }}" data-id="{{ $key }}" required>
                                                            <button class="btn rounded-0 border border-muted inc"
                                                                data-exist_qty="{{ $item['stock_qty'] }}"
                                                                data-id="{{ $key }}">+</button>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item['price'] }}</td>
                                                </tr>
                                                @php $sub_total += $item['quantity'] * $item['price']; @endphp
                                            @empty
                                            @endforelse
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                {{-- <td></td> --}}
                                                {{-- <td></td> --}}
                                                <td>Subtotal</td>
                                                <td>{{ $sub_total }} ৳</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                {{-- <td></td>
                                                <td></td> --}}
                                                <td>Shipping</td>
                                                <td>
                                                    <p id="shipping_value">0.00 </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                {{-- <td></td>
                                                <td></td> --}}
                                                <td>Total</td>
                                                <td>
                                                    <p id="total_amount">{{ $sub_total }} ৳</p>
                                                    <input type="hidden" name="total_amount" id="total_amount"
                                                        value="{{ $sub_total }} ৳">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="table-responsive">
                                    <table class="table table-bordered">

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-content-between align-item-conter al_btn">
                                                        <a class="btn btn-normal" href="{{ url('login-user') }}"
                                                            class="text-muted text-decoration-none icon-signin">Login
                                                            here</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="coupon-toggle" class="btn btn-normal">
                                                        {{ BanglaText('coupon_apply') }}</div>
                                                    <br>
                                                    <br>
                                                    <div class="row" id="coupon-form" style="display: none;">
                                                        <form action="{{ route('front.cart.apply-coupon') }}"
                                                            method="post" id="coupon_form">
                                                            @csrf

                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                <input type="text" class="" name="code"
                                                                    id="code" value=""
                                                                    placeholder="Enter Coupon Code">
                                                                <input type="hidden" name="shipping_id" id="shipping_id"
                                                                    value="">
                                                            </div>
                                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                                <button type="submit" class="btn btn-normal">Apply
                                                                    Coupon <i class="fas fa-arrow-right"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="" class="col-lg-4">

                        <div class="card text-center">
                            <div class="card-header text-center" style="background-color: #036280">
                                <p style="font-size: 15px; color: white; font-weight: 600">Billing Information</p>
                            </div>

                            <div class="card-body">


                                <form action="">

                                </form>

                                <form action="{{ route('front.checkout.store') }}" method="POST" id="checkoutForm">
                                    @csrf
                                    <input type="hidden" name="" />

                                    <div class="row">
                                        <div class="col-lg-12 col-12 mb-3 form-floating">
                                            <input type="text" class="form-control shadow-none" name="shipping_name"
                                                id="name" value="{{ Auth::check() ? Auth::user()->name : '' }}"
                                                placeholder="Name">
                                            {{-- <label for="name" class="ps-4">{{ BanglaText('name') }}</label> --}}
                                        </div>
                                        <input type="hidden" name="variation_color_id"
                                            value="{{ $item['variation_color'] }}" />

                                        <input type="hidden" name="ip_address" id="ip_address" value="">
                                        {{-- <div class="form-group col-sm-12">
                                        </div> --}}

                                        <div class="col-lg-12 col-12 mb-3 form-floating">
                                            <input type="tel" class="form-control shadow-none" maxlength="11"
                                                minlength="11" name="order_phone"
                                                value="{{ Auth::check() ? Auth::user()->phone : '' }}" id="phone"
                                                placeholder="Enter Phone Number" aria-describedby="phone-help">
                                            {{-- <label for="phone" class="ps-4">
                                                {{ BanglaText('mobile') }}
                                            </label> --}}

                                        </div>

                                    </div>

                                    {{-- <div class="row">

                                    </div> --}}

                                    <div class="row">
                                        <div class="col-lg-12 col-12 mb-3 form-floating">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control shadow-none"
                                                    name="shipping_address" value="" id="address"
                                                    placeholder="Address">
                                                {{-- <label for="address">
                                                    {{ BanglaText('address') }}
                                                </label> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                             $shipping_value = [];
                             foreach($cart as $key=>$item) {
                               $shipping_value[] = $item['is_free_shipping'];
                             }

                           if(in_array(null, $shipping_value)) {
                                 ?>
                                    <div class="form-floating mb-3">
                                        @foreach ($shippings as $key => $shipping)
                                            @if ($shipping->id != '25')
                                                <div class="input-group" style="margin-bottom: 15px;">
                                                    <input selected type="radio" value="{{ $shipping->id }}"
                                                        class="charge_radio delivery_charge_id"
                                                        id="ship_{{ $shipping->id }}"
                                                        data-shippingid="{{ $shipping->id }}" name="shipping_method"
                                                        data-shipping="{{ $shipping->shipping_fee }}"> &nbsp;&nbsp;
                                                    <label style="margin-top: 5px"
                                                        for="ship_{{ $shipping->id }}"><b>{{ $shipping->shipping_rule }}
                                                            -
                                                            {{ $shipping->shipping_fee }}{{ $setting->currency_icon }}</b></label>
                                                </div>
                                            @else
                                            @endif
                                        @endforeach
                                    </div>

                                    <?php
                         } else {
                             ?>
                                    @php
                                        $free_shippings = DB::table('shippings')->where('id', 25)->first();
                                    @endphp
                                    <div class="input-group" style="margin-bottom: 15px;">
                                        <input checked selected type="radio" value="{{ $free_shippings->id }}"
                                            class="charge_radio delivery_charge_id" id="ship_{{ $free_shippings->id }}"
                                            data-shippingid="{{ $free_shippings->id }}" name="shipping_method"
                                            data-shipping="{{ $free_shippings->shipping_fee }}"> &nbsp;&nbsp;
                                        <label for="ship_{{ $free_shippings->id }}"><b>{{ $free_shippings->shipping_rule }}
                                                -
                                                {{ $free_shippings->shipping_fee }}{{ $setting->currency_icon }}</b></label>
                                    </div>

                                    <?php } ?>
                                    <input type="hidden" name="total_amount" id="total_amount"
                                        value="{{ number_format($sub_total, 2) }}">
                                    <input type="hidden" name="shipCharge" id="shipCharge" value="">
                                    <hr>
                                    @if ($bkash_payment || $ssl_payment)
                                        <div class="input-group">
                                            <label>
                                                <input type="radio" name="payment_method" id="payment_method"
                                                    value="cash_on_delivery" checked> Cash On Delivery
                                            </label>
                                        </div>
                                    @else
                                        <input type="hidden" name="payment_method" id="payment_method"
                                            value="cash_on_delivery">
                                    @endif

                                    @if ($ssl_payment)
                                        <div class="input-group">
                                            <label>
                                                <input type="radio" name="payment_method" id="payment_method"
                                                    value="ssl_commerz">
                                                {{-- SSLCommerz --}}
                                                Online Payment
                                            </label>
                                        </div>
                                    @endif
                                    {{-- @if ($bkash_payment)
                                        <div class="input-group" style="margin-bottom: 25px;">
                                            <label>
                                                <input type="radio" name="payment_method" id="payment_method"
                                                    value="bkash"> Bkash
                                            </label>
                                        </div>
                                    @endif --}}
                                    <button type="submit" class="btn btn-normal">{{ BanglaText('confirm_order') }}
                                        <i class="fas fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>


    @foreach ($cart as $item)
        <div class="cart-item-data" data-product-id="{{ $item['product_id'] }}" data-product-name="{{ $item['name'] }}"
            data-category-name="{{ $item['category_name'] }}" data-price="{{ $item['price'] }}"
            data-quantity="{{ $item['quantity'] }}">
        </div>
    @endforeach
    <input type="hidden" name="total_cart_price" value="{{ $totalPrice }}">
@endsection
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // Toggle coupon form visibility on button click
        $("#coupon-toggle").click(function() {
            $("#coupon-form").toggle();
        });
    });
</script>


<script>
    // Fetch user's IP address using a third-party API
    fetch('https://api64.ipify.org?format=json')
        .then(response => response.json())
        .then(data => {
            document.getElementById('ip_address').value = data.ip;
        })
        .catch(error => {
            console.error('Error fetching IP address:', error);
        });
</script>


<script type="text/javascript">
    $(document).ready(function() {

        generateDataLayers();

        $('.charge_radio').click(function() {
            getCharge();
            // alert('hi');
        });

        function getCharge() {
            getCharge

            var testval = $('input:radio:checked.charge_radio').map(function() {
                return Number($(this).data('shipping'));
            }).get().join(",");
            var shipping_id = $('input:radio:checked.charge_radio').val();
            $('#shipping_id').val(shipping_id);
            $('p#shipping_value').text(testval + ' ৳');
            let sub_total = '{{ cartTotalAmount()['total'] }}';
            let total = Number(testval) + Number(sub_total);
            $('p#total_amount').text(total + ' ৳');

            $('input#shipCharge').val(testval);

        }

        $(document).on('submit', 'form#coupon_form', function(e) {
            e.preventDefault();
            let url = $(this).attr('action');
            let method = $(this).attr('method');
            let data = $(this).serialize();
            $.ajax({
                type: method,
                url: url,
                data: data,
                success: function(res) {
                    if (res.status == true) {
                        $('p#total_amount').text(res.total_price);
                        // alert(res.total_price);
                        // $('p#total_amount').text('sg');
                        // res.total_price.toFixed(2);
                    }
                }
            });
        });

        function generateDataLayers() {
            var items = [];
            $('.cart-item-data').each(function() {
                var product_id = $(this).data('product-id');
                var product_name = $(this).data('product-name');
                var category_name = $(this).data('category-name');
                var price = $(this).data('price');
                var quantity = $(this).data('quantity');
                items.push({
                    item_id: product_id,
                    item_name: product_name,
                    item_category: category_name,
                    price: price,
                    quantity: quantity
                });
            });
            let total = $('input[name="total_cart_price"]').val();

            // Push data to data layer
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                event: 'begin_checkout',
                ecommerce: {
                    currency: "BDT",
                    value: total,
                    items: items
                }
            });
        }

        $(document).on('submit', 'form#checkoutForm', function(e) {
            e.preventDefault();
            $('span.error').text('');
            let url = $(this).attr('action');
            let method = $(this).attr('method');
            let data = $(this).serialize();
            let shipCharge = $(this).find('input[id="shipCharge"]').val();
            var first_name = $('input[name="shipping_name"]').val();
            var mobile = $('input[name="order_phone"]').val();
            var shipping_address = $('input[name="shipping_address"]').val();

            // Function to generate data layer
            function generateDataLayer(transaction_id) {
                var items = [];
                $('.cart-item-data').each(function() {
                    var product_id = $(this).data('product-id');
                    var product_name = $(this).data('product-name');
                    var category_name = $(this).data('category-name');
                    var price = $(this).data('price');
                    var quantity = $(this).data('quantity');
                    items.push({
                        item_id: product_id,
                        item_name: product_name,
                        item_category: category_name,
                        price: price,
                        quantity: quantity
                    });
                });
                let total = $('input[name="total_cart_price"]').val();

                // Push data to data layer
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    event: 'purchase',
                    ecommerce: {
                        currency: "BDT",
                        value: total,
                        shipping: shipCharge,
                        transaction_id: transaction_id,
                        items: items
                    },
                    customer: {
                        first_name: first_name,
                        phone: mobile,
                        shipping_address: shipping_address
                    }
                });
            }
            showLoader();

            $.ajax({
                type: method,
                url: url,
                data: data,
                success: function(res) {
                    if (res.status) {
                        toastr.success(res.msg);
                        var transaction_id = res.invoiceId;
                        generateDataLayer(transaction_id);

                        if (res.url) {
                            // set timeout to show success message
                            setTimeout(function() {
                                window.location.href = res.url;
                            }, 1000);
                            successToast(res.msg);
                            // document.location.href = res.url;
                        } else {
                            window.location.reload();
                        }
                    } else {
                        // toastr.error(res.msg);
                        hideLoader();
                        errorToast(res.msg);
                    }
                },
                error: function(response) {
                    $.each(response.responseJSON.errors, function(name, error) {
                        // $(document).find('[name=' + name + ']').closest('div')
                        //     .after('<span class="error text-danger">' + error +
                        //         '</span>');
                        // toastr.error(error);
                        hideLoader();
                        errorToast(error);
                    });
                }
            });
        });

    });
</script>