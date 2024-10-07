@extends('frontend.app')
@section('title', 'Shop Product List')
@section('content')
    <section>
        <div class="container">
            <h2 class="bold text-center my-3">Flash Sell</h2>
            <div class="shop row">
                <div class="col-lg-9 col-md-12 col-12 all-products-widget" id="shop_products">
                    <!-- All Products  -->
                    <div class="all-products row">
                        @forelse ($flashSell as $key => $flass)
                            @if ($flass->product)
                            @php
                                $product = $flass->product;
                            @endphp
                            <div class="col-lg-3 col-md-4 col-6 mb-3">
                                @include('frontend.product.single-product', ['product'=>$product, 'key' => $key] )
                            </div>
                            @endif
                        @empty
                        <div align="center">
                            <strong class="text-center text-danger">No products are available</strong>
                        </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
