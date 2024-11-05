<!-- Hero Section start  -->
<div class="hero-section hero-1 fix">
    <div class="container">
        <div class="row">
            {{-- <div class="col-12 col-xl-8 col-lg-6">
                <div class="hero-items">
                    <div class="book-shape">
                        <img src="{{ asset('newFrontend') }}/img/hero/book.png" alt="shape-img" />
                    </div>
                    <div class="frame-shape1 float-bob-x">
                        <img src="{{ asset('newFrontend') }}/img/hero/frame.png" alt="shape-img" />
                    </div>
                    <div class="frame-shape2 float-bob-y">
                        <img src="{{ asset('newFrontend') }}/img/hero/frame-2.png" alt="shape-img" />
                    </div>
                    <div class="frame-shape3">
                        <img src="{{ asset('newFrontend') }}/img/hero/xstar.png" alt="img" />
                    </div>
                    <div class="frame-shape4 float-bob-x">
                        <img src="{{ asset('newFrontend') }}/img/hero/frame-shape.png" alt="img" />
                    </div>
                    <div class="bg-shape1">
                        <img src="{{ asset('newFrontend') }}/img/hero/bg-shape.png" alt="img" />
                    </div>
                    <div class="bg-shape2">
                        <img src="{{ asset('newFrontend') }}/img/hero/bg-shape2.png" alt="shape-img" />
                    </div>
                    <div class="hero-content">
                        <h6 class="wow fadeInUp" data-wow-delay=".3s">
                            Up to 30% Off
                        </h6>
                        <h1 class="wow fadeInUp" data-wow-delay=".5s">
                            Get Your New Book <br />
                            With The Best Price
                        </h1>
                        <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                           <a href="{{ route('front.shop') }}"> <button type="submit" class="theme-btn">
                            Shop Now
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-lg-6">
                <div class="girl-image">
                    <img class="float-bob-x" src="{{ asset('newFrontend') }}/img/hero/hero-girl.png" alt="img" />
                </div>
            </div> --}}


            {{-- <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('newFrontend') }}/img/hero/hero1.jpeg" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('newFrontend') }}/img/hero/hero2.jpg" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('newFrontend') }}/img/hero/hero3.jpeg" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> --}}


            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                {{-- sfasjkfhiashf --}}
                <div class="carousel-inner">

                    @foreach ($slider as $key => $slide)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset($slide->image) }}" class="d-block w-100" style="height: 280px;" alt="Slider">
                        </div>
                    @endforeach

                    {{-- <div class="carousel-item active">
                        <img src="{{ asset('newFrontend') }}/img/hero/hero1.jpeg" class="d-block w-100" style="height: 280px;" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('newFrontend') }}/img/hero/hero2.jpg" class="d-block w-100" style="height: 280px;" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('newFrontend') }}/img/hero/hero3.jpeg" class="d-block w-100" style="height: 280px;" alt="Slide 3">
                    </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
