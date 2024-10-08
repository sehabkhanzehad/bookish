@if (count($cat_wise_prod))
@foreach ($cat_wise_prod as $category)
@if (count($category->products))
            <section class="shop-section section-padding fix pt-0">
                <div class="container">
                    <div class="section-title-area">
                        <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                            <h2>{{ $category->name }}</h2>
                        </div>
                        <a href="{{ route('front.shop') }}?category={{ $category->id }}"
                            class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore
                            More
                            <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                    <div class="swiper book-slider">
                        <div class="swiper-wrapper">
                            @if (count($category->products))
                            @foreach ($category->products as $product)
                                    @include('newFrontend.components.common.single-product')
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endif
