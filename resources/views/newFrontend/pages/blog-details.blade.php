@php
    $user = \App\Models\User::find($blog->admin_id);
@endphp
@extends('newFrontend.layouts.master')

@section('content')
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
                <h1>Blog Details</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{ route('front.home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Blog Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- News Details Section Start -->
    <section class="news-details fix section-padding">
        <div class="container">
            <div class="news-details-area">
                <div class="row g-5">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb bg-cover"
                                    style="background-image: url({{ asset($blog->image) }});"></div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center">
                                        <li>
                                            <i class="fa fa-user"></i> {{ $user->name }}
                                        </li>
                                        <li>
                                            <i class="fa fa-comment"></i> {{ $blog->comments->count() }} Comments
                                        </li>

                                    </ul>
                                    <h3>{{ $blog->title }}</h3>
                                    <p class="mb-3">
                                        {!! $blog->description !!}
                                    </p>

                                </div>
                            </div>
                            <div class="row tag-share-wrap mt-4 mb-5">
                                <div class="col-lg-8 col-12">
                                    <div class="tagcloud">
                                        <span class="me-3">Category:</span>
                                        <a>{{ $blog->category->name }}</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                    <div class="social-share">
                                        <span class="me-3">Share:</span>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('front.blogDetails', ['slug' => $blog->slug, 'id' => $blog->id]) }}"
                                            target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url={{ route('front.blogDetails', ['slug' => $blog->slug, 'id' => $blog->id]) }}"
                                            target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?url={{ route('front.blogDetails', ['slug' => $blog->slug, 'id' => $blog->id]) }}"
                                            target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text={{ route('front.blogDetails', ['slug' => $blog->slug, 'id' => $blog->id]) }}"
                                            target="_blank">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>



                                    </div>
                                </div>
                            </div>
                            @if ($blog->comments->count() > 0)
                                <div class="comments-area">
                                    <div class="comments-heading">
                                        <h3>{{ $blog->comments->count() }} Comments</h3>
                                    </div>
                                    @foreach ($blog->comments as $comment)
                                        <div class="blog-single-comment d-flex gap-4 pt-4 pb-5">
                                            <div class="image">
                                                <img src="https://ui-avatars.com/api/?name={{ $comment->name }}"
                                                    alt="image">
                                            </div>
                                            <div class="content">
                                                <div
                                                    class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                    <div class="con">
                                                        <h5><a href="news-details.html">{{ $comment->name }}</a></h5>
                                                        <span>{{ $comment->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </div>
                                                <p class="mt-30 mb-4">{{ $comment->comment }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endif
                            <div class="comment-form-wrap {{ $blog->comments->count() > 0 ? 'pt-5' : '' }}">
                                <h3>Leave a comments</h3>
                                <form id="contact-form">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Your Name*</span>
                                                <input type="hidden" name="blog_id" id="blog_id"
                                                    value="{{ $blog->id }}">
                                                <input type="text" name="comment_name" id="comment_name"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Your Email*</span>
                                                <input type="text" name="email" id="comment_email"
                                                    placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <span>Message*</span>
                                                <textarea name="message" id="comment" placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <a class="theme-btn text-white" onclick="comment()">Post Comment</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @include('newFrontend.components.common.blog-widgets')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        async function comment() {
            const blog_id = document.getElementById("blog_id").value
            const name = document.getElementById("comment_name").value
            const email = document.getElementById("comment_email").value
            const comment = document.getElementById("comment").value

            if (name == "" && email == "" && comment == "") {
                errorToast("All fields are required");
            } else if (name == "") {
                errorToast("Name is required");
            } else if (email == "") {
                errorToast("Email is required");
            } else if (comment == "") {
                errorToast("Comment is required");
            } else {
                showLoader();
                let response = await axios.post('/blog/comment', {
                    blog_id: blog_id,
                    name: name,
                    email: email,
                    comment: comment
                });
                hideLoader();
                if (response.data.status == "success") {
                    successToast(response.data.message);
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                } else {
                    errorToast(response.data.message);
                }
            }

        }
    </script>
@endsection
