@extends("newFrontend.layouts.master")
@section("content")
 <!-- Breadcumb Section Start -->
 <div class="breadcrumb-wrapper">
    <div class="book1">
        <img src="{{ asset('newFrontend') }}/img/hero/book1.png" alt="book">
    </div>
    <div class="book2">
        <img src="{{ asset('newFrontend') }}/img/hero/book2.png" alt="book">
    </div>
    <div class="container">
        <div class="page-heading">
            <h1>Blog List</h1>
            <div class="page-header">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                    <li>
                        <a href="{{ route("front.home") }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        Blog List
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- News Standard Section Start -->
<section class="news-standard fix section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-8 col-lg-7">
                <div class="news-standard-wrapper">
                    @foreach ($blogs as $blog)
                    <div class="news-standard-items">
                        <div class="news-thumb">
                            <img src="{{ asset($blog->image) }}" alt="img">
                            <div class="post">
                                <span>{{ $blog->category->name }}</span>
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('d M, Y') }}
                                </li>
                                <li>
                                    @php
                                        $user = \App\Models\User::find($blog->admin_id);
                                    @endphp
                                    <i class="far fa-user"></i> {{ $user->name }}
                                </li>
                            </ul>
                            <h3>
                                <a href="{{ route("front.blogDetails", ["slug" => $blog->slug, "id" => $blog->id]) }}">{{ $blog->title }}</a>
                            </h3>
                            {{-- <p>{!! $blog->description !!}</p> --}}
                            <a href="{{ route("front.blogDetails", ["slug" => $blog->slug, "id" => $blog->id]) }}" class="theme-btn mt-4">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
{{--
                    <div class="news-standard-items">
                        <div class="news-thumb">
                            <img src="{{ asset('newFrontend') }}/img/news/post-2.jpg" alt="img">
                            <div class="post">
                                <span>Books Store</span>
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fas fa-calendar-alt"></i> Feb 10, 2024
                                </li>
                                <li>
                                    <i class="far fa-user"></i> By admin
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">Eu parturient dictumst fames quam tempor</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et ipsum ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem facilisis, quis viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                dui lacus, tempor a metus vel, varius rhoncus nunc. Suspendisse luctus feugiat dictum. Curabitur ipsum velit, viverra in pretium eget, molestie maximus magna.
                            </p>
                            <a href="news-details.html" class="theme-btn mt-4">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="news-standard-items">
                        <div class="news-thumb">
                            <img src="{{ asset('newFrontend') }}/img/news/post-3.jpg" alt="img">
                            <div class="post">
                                <span>Activities</span>
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fas fa-calendar-alt"></i> Feb 10, 2024
                                </li>
                                <li>
                                    <i class="far fa-user"></i> By admin
                                </li>
                            </ul>
                            <h3>
                                <a href="news-details.html">All Inclusive Ultimate Circle Island Day with Lunch </a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et ipsum ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem facilisis, quis viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                dui lacus, tempor a metus vel, varius rhoncus nunc. Suspendisse luctus feugiat dictum. Curabitur ipsum velit, viverra in pretium eget, molestie maximus magna.
                            </p>
                            <a href="news-details.html" class="theme-btn mt-4">
                                Read More
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div> --}}
                    <div class="page-nav-wrap text-center">
                        <ul>
                            {{-- <li><a class="previous" href="news.html">Previous</a></li>
                            <li><a class="page-numbers" href="news.html">1</a></li>
                            <li><a class="page-numbers" href="news.html">2</a></li>
                            <li><a class="page-numbers" href="news.html">3</a></li>
                            <li><a class="page-numbers" href="news.html">...</a></li>
                            <li><a class="next" href="news.html">Next</a></li> --}}
                            {{ $blogs->links() }}
                        </ul>
                    </div>
                </div>
            </div>
           @include('newFrontend.components.common.blog-widgets')
        </div>
    </div>
</section>
@endsection
