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
                <h1>Publications</h1>
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
                            Publications
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Section End -->
    {{-- make a search box --}}
    <style>
        .custom-card {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}

.custom-card img {
    width: 100%;
    height: 150px; /* Set a fixed height for images */
    object-fit: cover; /* Ensure image fits within the specified dimensions */
}

.custom-card .card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('front.publications') }}" method="GET">
                    <div class="input-group m-3">
                        <input type="text" value="{{ request('search') }}" class="form-control" placeholder="Search Publication" name="search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Author Section Start -->
    <section class="author-section">
        <div class="container">
            <div class="row">
                @foreach ($subjects as $item)
                    <div class="col-lg-2 col-md-6 col-sm-6 mb-4">
                        <div class="card custom-card">
                            {{-- <img style="max-width: none" class="rounded-circle"
                                    src="https://ui-avatars.com/api/?name={{ \App\Models\User::find($blog->admin_id)->name }}&background=random"
                                    alt="User Avatar"> --}}
                            {{-- auto generate random iamge with third party api with title --}}
                            <img src="https://ui-avatars.com/api/?name={{ $item->title }}&background=random" alt="User Avatar">

                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('front.shop') }}?publication={{ $item->id }}">{{ $item->title }}</a></h5>
                                {{-- <p class="card-text">{{ $author->description }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
