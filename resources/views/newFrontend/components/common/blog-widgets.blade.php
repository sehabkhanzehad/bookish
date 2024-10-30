@php
    $categories = \App\Models\BlogCategory::with('blogs')->where('status', 1)->get();
    $popularPost = \App\Models\Blog::with('category')->where('status', 1)->orderBy('views', 'desc')->limit(5)->get();
@endphp

<div class="col-xl-4 col-lg-5">
    <div class="main-sidebar">
        {{-- <div class="single-sidebar-widget">
            <div class="wid-title">
                <h3>Search</h3>
            </div>
            <div class="search-widget">
                <form action="#">
                    <input type="text" placeholder="Search here">
                    <button type="submit"><i class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div> --}}
        <div class="single-sidebar-widget">
            <div class="wid-title">
                <h3>Categories</h3>
            </div>
            <div class="news-widget-categories">
                <ul>
                    @foreach ($categories as $category)
                        @if ($category->blogs->count() > 0)
                            <li><a style="cursor: default">{{ $category->name }} <span>({{ $category->blogs->count() }})</span></a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="single-sidebar-widget">
            <div class="wid-title">
                <h3>Popular Post</h3>
            </div>
            <div class="recent-post-area">
            @foreach ($popularPost as $post)
                <div class="recent-items">
                    <div class="recent-thumb">
                        <img style="height: 80pxpx; width: 100px;" src="{{ asset($post->image) }}" alt="img">
                    </div>
                    <div class="recent-content">
                        <ul>
                            <li>
                                <i class="fa-solid fa-calendar-days"></i> {{ $post->created_at->format('M d, Y') }}
                            </li>
                        </ul>
                        <h6>
                            <a href="{{ route("front.blogDetails", ["slug" => $post->slug, "id" => $post->id]) }}">{{ $post->title }}</a>
                        </h6>
                    </div>
                </div>
            @endforeach

                {{-- <div class="recent-items">
                    <div class="recent-thumb">
                        <img src="{{ asset('newFrontend') }}/img/news/pp4.jpg" alt="img">
                    </div>
                    <div class="recent-content">
                        <ul>
                            <li>
                                <i class="fa-solid fa-calendar-days"></i> Mar 20, 2024
                            </li>
                        </ul>
                        <h6>
                            <a href="news-details.html">
                                Eu Parturient Dictumst Fames Quam Tempor
                            </a>
                        </h6>
                    </div>
                </div>
                <div class="recent-items">
                    <div class="recent-thumb">
                        <img src="{{ asset('newFrontend') }}/img/news/pp5.jpg" alt="img">
                    </div>
                    <div class="recent-content">
                        <ul>
                            <li>
                                <i class="fa-solid fa-calendar-days"></i> Mar 10, 2024
                            </li>
                        </ul>
                        <h6>
                            <a href="news-details.html">
                                Students Intelligence in education in Building..
                            </a>
                        </h6>
                    </div>
                </div> --}}

            </div>
        </div>
        {{-- <div class="single-sidebar-widget">
            <div class="wid-title">
                <h3>Tags</h3>
            </div>
            <div class="news-widget-categories">
                <div class="tagcloud">
                    <a href="news-standard.html">Romance</a>
                    <a href="news-details.html">Books</a>
                    <a href="news-details.html">Tips & Tricks</a>
                    <a href="news-details.html">Adventure</a>
                    <a href="news-details.html">Education</a>
                    <a href="news-details.html">Store</a>
                </div>
            </div>
        </div> --}}
    </div>
</div>
