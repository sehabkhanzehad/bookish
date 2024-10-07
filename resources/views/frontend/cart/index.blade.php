@extends('frontend.app')
@section('title', 'Home')
@section('content')
@php
$totalAmount = 0;
@endphp
<link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}" />
    <section>
        <div class="container-lg container-fluid mt-3">
          <div class="row bg-white p-lg-4 p-0 pt-3">
            <div class="col-12">
              <h4 class="text-secondary">
                আপনার শপিং ব্যাগে {{ count($cart) }} টি আইটেম আছে
              </h4>
            </div>
            <div class="col-lg-8 col-12 mt-3">
            @forelse($cart as $key => $item)
              <div class="cart-item">
                <div class="d-flex gap-3 align-item-center">
                  <div class="image col-lg-2 col-md-2 col-3">
                    <img src="{{ asset($item['image']) }}" alt="" class="img-fluid p-3">
                  </div>
                  <div class="content col-lg-6">
                    <a href="{{ route('front.product.show', $item['product_id']) }}"class="small text-decoration-none text-dark bold-7">
                        {{ $item['name'] }} ×  <span class="quantity-value">{{ $item['quantity'] }}</span>
                    </a>
                    <p>
                        {{ $item['quantity'] }} * {{ $item['price'] }}

                    </p>
                    <div class="remove">
                        <button class="remove-item btn border-0 d-block p-0 mt-3" data-id="{{ $key }}">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                  </div>
                  <div class="quantity">
                    <div class="quantity d-flex">
                        <button class="btn rounded-0 border border-muted dec" data-id="{{ $key }}">-</button>
                        <input type="number"  min="1" style="max-width: 80px;" class="border border-muted text-center rounded-0 quantity-value" value="{{ $item['quantity'] }}" data-id="{{ $key }}" required>
                        <button class="btn rounded-0 border border-muted inc" data-id="{{ $key }}">+</button>
                        <a href="#" class="btn border-0 btn-sm update-cart" data-id="{{ $key }}"><i class="fas fa-repeat"></i></a> <!-- Updated here -->
                    </div>
                    @php
                    $totalAmount += ($item['price'] * $item['quantity']);
                    @endphp
                    <div class="my-2 text-center text-nowrap subtotal" id="subtotal-{{ $key }}" data-price="{{ $item['price'] }}" >
                        <div class="subtotal" title="subtotal">
                            <p class="main-color m-0">
                                Total:    {{ number_format($item['quantity'] * $item['price'], 2) }} ৳
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
              <div class="button-box">
                <a href="{{ route('front.shop') }}" class="btn btn-outline-danger rounded-0">
                  আরও বই ক্রয় করুন
                </a>
              </div>
            </div>
            @php
                $offer = 0;
                $price = 0;
            @endphp
            @foreach($cart as $key => $item)
                                @php
                                    $offer += $item['discount_price'] * $item['quantity'];
                                    $price += $item['price'] * $item['quantity'];
                                @endphp
            @endforeach
            <div class="col-lg-4 col-12">
              <div class="card border-top border-3 p-3" style="border-top-color: orange !important;">
                <div class="d-flex justify-content-between">
                  <p class="text-secondary font-15 mb-2">দাম:</p>
                  <p class="text-secondary font-15 mb-2">{{ $price }} ৳</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="text-secondary font-15 mb-2">ছাড়:</p>
                  <p class="text-secondary font-15 mb-2">{{ $offer }} ৳</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <p class="text-secondary font-15 mb-2">মোট:</p>
                  <p class="text-secondary font-15 mb-2" id="total-amount">{{ $price - $offer }} ৳</p>
                </div>

                <div class="mt-3">
                  <a href="{{ route('front.checkout.index') }}" class="btn btn-warning rounded-0 col-12 mb-2">
                    অর্ডার সম্পন্ন করুন
                  </a>
                  <a href="#" class="text-danger text-decoration-none review_submit_show d-block text-center">
                    প্রমোকোড থাকলে এখানে ক্লিক করুন
                  </a>
                </div>
                <div class="review_box d-none">
                  <div class="d-flex gap-1">
                    <input type="text" class="form-control rounded-0 shadow-none">
                    <button class="btn btn-outline-danger col-4 rounded-0 font-14">প্রয়োগ করুন</button>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </section>

@endsection

