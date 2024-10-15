<div class="swiper-slide">
    <div class="shop-box-items style-2">
        <div class="book-thumb center">
            <a href="{{ route('front.product.show', [$product->id]) }}" title="{{ $product->name }}">
                <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}" alt="img"/>
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
                    <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                </li>
            </ul>
            <ul class="shop-icon d-grid justify-content-center align-items-center">
                <li>
                    <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                </li>
                <li>
                    <a href="shop-cart.html">
                        <img class="icon" src="{{ asset('newFrontend') }}/img/icon/shuffle.svg" alt="svg-icon" />
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.product.show', [$product->id]) }}"><i class="far fa-eye"></i></a>
                </li>
            </ul>
        </div>
        <div class="shop-content">
            <h5>Design Low Book</h5>
            <h3>
                <a href="{{ route('front.product.show', [$product->id]) }}">{{ $product->name }}</a>
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

            <ul class="author-post">
                <li class="authot-list">
                    {{-- <span class="thumb">
                        <img src="{{ asset('newFrontend') }}/img/testimonial/client-1.png"
                            alt="img" />
                    </span> --}}
                    <span class="content">{{ $product->writer ? $product->writer->name : '' }}</span>
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
            <a href="{{ route('front.product.show', [$product->id]) }}" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                Add To Cart</a>
        </div>
    </div>
</div>
