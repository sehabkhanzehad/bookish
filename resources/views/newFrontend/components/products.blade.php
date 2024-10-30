<div class="col-12">
    <div style="border: 2px solid rgb(219, 199, 199) ; border-radius: 10px; margin-top: 50px; text-align: center; padding: 10px"><p>{{ ($currentPage - 1) * $perPage + 1 }} থেকে
        {{ min($currentPage * $perPage, $totalProducts) }} দেখাচ্ছে।
        মোট {{ $totalProducts }} টি আইটেম পাওয়া গিয়েছে</p></div>
</div>
<d0v ; text-align: center; padding: 10pxclass="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-arts" role="tabpanel" aria-labelledby="pills-arts-tab" tabindex="0">
        <div class="row">
            @foreach ($products as $key => $product)
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="shop-box-items">
                        <div class="book-thumb center">
                            <a href="{{ route('front.product.show', [$product->id]) }}" title="{{ $product->name }}">
                                <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}"
                                    alt="img" />
                            </a>
                            @if (!empty($product->offer_price))
                                @php
                                    $discount = (($product->price - $product->offer_price) / $product->price) * 100;
                                @endphp
                                <ul class="post-box">
                                    {{-- <li>Hot</li> --}}
                                    <li>-{{ abs(number_format($discount, 0)) }}%</li>
                                </ul>
                            @endif
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a>
                                        <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg"
                                            alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.product.show', [$product->id]) }}"><i
                                            class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <h3><a href="{{ route('front.product.show', [$product->id]) }}">{{ $product->name }}</a>
                            </h3>
                            @if ($product->offer_price)
                                <ul class="price-list">
                                    @if ($product->offer_price)
                                        <li>Tk {{ $product->offer_price }}</li>
                                    @endif
                                    <li>
                                        <del>Tk {{ $product->price }}</del>
                                    </li>
                                </ul>
                            @else
                                <ul class="price-list">
                                    <li>Tk {{ $product->price }}</li>
                                </ul>
                            @endif

                            <div class="shop-button">
                                <a href="{{ route('front.product.show', [$product->id]) }}" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</d0v>
<div class="page-nav-wrap text-center">
    {{ $products->links() }}
</div>
