<section class="news-section fix section-padding section-bg">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                Our Latest News
            </h2>

        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{ asset($blog->image) }}" alt="img" />
                        <img src="{{ asset($blog->image) }}" alt="img" />
                        <div class="post-box">{{ $blog->category->name }}</div>
                    </div>
                    <div class="news-content">
                        <ul>
                            <li>
                                {{ $blog->created_at->format('d, M') }}
                            </li>
                            <li>
                                    @php
                                        $user = \App\Models\User::find($blog->admin_id);
                                    @endphp
                                   {{ $user->name }}
                            </li>
                        </ul>
                        <h5>
                            <a href="{{ route("front.blogDetails", ["slug" => $blog->slug, "id" => $blog->id]) }}">
                                {{-- show limited charater --}}
                                {{ Str::limit($blog->title, 28) }}
                            </a>
                        </h5>
                        <a href="{{ route("front.blogDetails", ["slug" => $blog->slug, "id" => $blog->id]) }}" class="theme-btn-2">Read More
                            </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
