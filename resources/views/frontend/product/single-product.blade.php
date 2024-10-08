<div class="product px-3 py-3">
    <a href="{{ route('front.product.show', [$product->id]) }}" title="{{ $product->name }}"
        class="text-decoration-none">
        @if (!empty($product->offer_price))
            @php
                $discount = (($product->price - $product->offer_price) / $product->price) * 100;
            @endphp
            <div class="product_label" style="display: block !important;">
                <span class="onsale text_lebel product_label" style="display: block !important; text-transform: unset; ">
                    {{ abs(number_format($discount, 0)) }}%
                    <br>ছাড়
                </span>
            </div>
        @endif

        @if (!empty($product->product_type == '3'))
            <div class="ebook_product_label" style="display: block !important;">
                <span class="onsale ebook_text_lebel" style="display: block !important; text-transform: unset; "> পড়ে
                    দেখুন </span>
            </div>
        @endif
        
        <div class="image">
            <img src="{{ asset('uploads/custom-images2/' . $product->thumb_image) }}" alt="">
        </div>
        <div class="text-area pt-2">
            <p class="book-title mb-2 p-0 bold-7 font-12 text-dark">{{ $product->name }}</p>
            <p class="book-author mb-2 p-0 font-14 text-secondary">{{ $product->writer ? $product->writer->name : '' }}
            </p>
            @if ($product->offer_price)
                <p class="m-0 p-0 p-price"><del class="text-muted">₹{{ $product->price }} </del><span
                        class="ps-2 text-danger">
                        @if ($product->offer_price)
                            ₹{{ $product->offer_price }}
                        @endif
                    </span></p>
            @else
                <p class="m-0 p-0 p-price"><span class="ps-2 text-danger">₹{{ $product->price }}</span></p>
            @endif
        </div>
    </a>
</div>
