@if (count($subjects))
    @foreach ($subjects as $subject)
        @if (count($subject->products))
            <section class="shop-section section-padding fix pt-0">
                <div class="container">
                    <div class="section-title-area">
                        <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                            <h2>{{ $subject->title }}</h2>
                        </div>
                        <a href="{{ route('front.shop') }}?subject={{ $subject->id }}"
                            class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore
                            More
                            <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                    <div class="swiper book-slider">
                        <div class="swiper-wrapper">
                            @foreach ($subject->products as $product)
                                @if ($product)
                                    @include('newFrontend.components.common.single-product')
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endif
