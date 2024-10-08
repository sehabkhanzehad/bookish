<section class="team-section fix section-padding pt-0 margin-bottom-30">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                Featured Author
            </h2>
        </div>
        <div class="array-button">
            <button class="array-prev">
                <i class="fal fa-arrow-left"></i>
            </button>
            <button class="array-next">
                <i class="fal fa-arrow-right"></i>
            </button>
        </div>
        <div class="swiper team-slider">
            <div class="swiper-wrapper">
                @foreach ($popular_writers as $item)
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{ asset('uploads/writers/' . $item->image) }}" alt="img" />
                                </div>
                                <div class="shape-img">
                                    <img src="{{ asset('newFrontend') }}/img/team/shape-img.png" alt="img" />
                                </div>
                            </div>
                            <div style="height: 80px;" class="team-content text-center">
                                <h6>
                                    <a href="team-details.html">{{ $item->name }}</a>
                                </h6>
                                {{-- <p>10 Published Books</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
