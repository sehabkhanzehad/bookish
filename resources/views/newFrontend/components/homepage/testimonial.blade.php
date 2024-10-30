<section class="testimonial-section fix section-padding pt-0">
    <div class="container">
        <div class="section-title text-left">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                What our client say
            </h2>
        </div>
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $key => $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p style="text-align: justify">{{ $testimonial->comment }}</p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="
                                            background-image: url({{ asset($testimonial->image) }});
                                        ">
                                        <div class="icon">
                                            <img class="shape"
                                                src="{{ asset('newFrontend') }}/img/testimonial/shape.svg"
                                                alt="img" />
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>{{ $testimonial->name }}</h3>
                                        <span>{{ $testimonial->designation }}</span>
                                        <div class="star">
                                            {{-- show solid star while rating and regular star while not --}}
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $testimonial->rating)
                                                    <i class="fa-solid fa-star"></i>
                                                @else
                                                    <i class="fa-regular fa-star"></i>
                                                @endif
                                            @endfor





                                            {{-- <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i> --}}

                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="logo">
                                    <img src="{{ asset('newFrontend') }}/img/testimonial/logo1.png" alt="" />
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
