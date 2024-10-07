@extends('frontend.app')
@section('title', 'Shop Product List')
@section('content')
    <section>
        <div class="container">
            <h2 class="bold my-3">বইমেলা ২০২৪ বেষ্টসেলার বই</h2>
            <div class="shop row">
                <div class="col-lg-9 col-md-12 col-12 all-products-widget" id="shop_products">
                    <!-- All Products  -->
                    <div class="all-products row">
                        @forelse ($products as $key => $product)
                            <div class="col-lg-3 col-md-4 col-6 mb-3">
                                @include('frontend.product.single-product', ['product'=>$product, 'key' => $key] )
                            </div>
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
