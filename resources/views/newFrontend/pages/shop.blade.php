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
                <h1>Shop</h1>
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
                            Shop
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Section Start -->
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-notices-wrapper wow fadeInUp" data-wow-delay=".3s">
                            <p>Filter By</p>
                            <div class="form-clt">
                                <select class="form-control form-control-sm sort-select nice-select" name="sort" tabindex="0">
                                    <option value="sort_by_relevancy_desc" selected="">More relevant</option>
                                    <option value="discount_asc">Discount - Low to High</option>
                                    <option value="discount_desc">Discount - High to Low</option>
                                    <option value="price_asc">Price - Low to High</option>
                                    <option value="price_desc">Price - High to Low</option>
                                </select>
                                {{-- <div class="nice-select" tabindex="0">
                                    <span class="current">
                                        Default Sorting
                                    </span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected focus">
                                            Default sorting
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by popularity
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by average rating
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by latest
                                        </li>
                                    </ul>
                                </div> --}}
                                {{-- <div class="icon">
                                    <a href="shop-list.html"><i class="fas fa-list"></i></a>
                                </div>
                                <div class="icon-2 active">
                                    <a href="shop.html"><i class="fa-sharp fa-regular fa-grid-2"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <button type="button"  style="text-align: left; border: 2px solid rgb(214, 207, 207); width: 100%; border-radius: 10px; padding: 10px;"
                                    class="collapsible">Publication <i class="fa-solid fa-angle-down"></i></button>

                                <div class="content mt-2" style="display: none;">
                                    <div class="categories-list">
                                        @foreach ($publications as $item)
                                        <label class="checkbox-single d-flex align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox" name="publication[]"
                                                    {{ request('publication') == $item->id ? 'checked' : '' }}
                                                    value="{{ $item->id }}" class="me-2 publication">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    {{ $item->title }} ({{ count($item->products) }})
                                                </span>
                                            </span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <button type="button"  style="text-align: left; border: 2px solid rgb(214, 207, 207); width: 100%; border-radius: 10px; padding: 10px;"
                                    class="collapsible">Categories <i class="fa-solid fa-angle-down"></i></button>

                                <div class="content mt-2" style="display: none;">
                                    <div class="categories-list">
                                        @foreach ($categories as $item)
                                        <label class="checkbox-single d-flex align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox" name="category[]"
                                                    {{ request('category') == $item->id ? 'checked' : '' }}
                                                    value="{{ $item->id }}" class="me-2 category">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    {{ $item->name }} ({{ count($item->products) }})
                                                </span>
                                            </span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <button type="button"  style="text-align: left; border: 2px solid rgb(214, 207, 207); width: 100%; border-radius: 10px; padding: 10px;"
                                    class="collapsible">Subjects <i class="fa-solid fa-angle-down"></i></button>

                                <div class="content mt-2" style="display: none;">
                                    <div class="categories-list">
                                        @foreach ($subjects as $item)
                                        <label class="checkbox-single d-flex align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox" name="subject[]"
                                                    {{ request('subject') == $item->id ? 'checked' : '' }}
                                                    value="{{ $item->id }}" class="me-2 subject">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    {{ $item->title }} ({{ count($item->products) }})
                                                </span>
                                            </span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <button type="button"  style="text-align: left; border: 2px solid rgb(214, 207, 207); width: 100%; border-radius: 10px; padding: 10px;"
                                    class="collapsible">Writers <i class="fa-solid fa-angle-down"></i></button>

                                <div class="content mt-2" style="display: none;">
                                    <div class="categories-list">
                                        @foreach ($writers as $item)
                                        <label class="checkbox-single d-flex align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox" name="writer[]"
                                                    {{ request('writer') == $item->id ? 'checked' : '' }}
                                                    value="{{ $item->id }}" class="me-2 writer">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    {{ $item->name }} ({{ count($item->products) }})
                                                </span>
                                            </span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <button type="button"  style="text-align: left; border: 2px solid rgb(214, 207, 207); width: 100%; border-radius: 10px; padding: 10px;"
                                    class="collapsible">Packages <i class="fa-solid fa-angle-down"></i></button>

                                <div class="content mt-2" style="display: none;">
                                    <div class="categories-list">
                                        @foreach ($packages as $item)
                                        <label class="checkbox-single d-flex align-items-center">
                                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                                <span class="checkbox-area d-center">
                                                    <input type="checkbox" name="package[]"
                                                    {{ request('package') == $item->id ? 'checked' : '' }}
                                                    value="{{ $item->id }}" class="me-2 package">
                                                    <span class="checkmark d-center"></span>
                                                </span>
                                                <span class="text-color">
                                                    {{ $item->title }} ({{ count($item->products) }})
                                                </span>
                                            </span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="product-status">


                                    <!-- Packages Section -->
                                    <button type="button" class="collapsible">Packages</button>
                                    <div class="content" style="display: none;">
                                        <div class="product-status_stock gap-6 d-flex align-items-center">
                                            <div class="nice-select category" tabindex="0">
                                                <ul class="list">
                                                    @foreach ($packages as $item)
                                                        <li class="option">{{ $item->title }} ({{ count($item->products) }})</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Categories Section -->
                                    <button type="button" class="collapsible">Categories</button>
                                    <div class="content" style="display: none;">
                                        <div class="product-status_stock gap-6 d-flex align-items-center">
                                            <div class="nice-select category" tabindex="0">
                                                <ul class="list">
                                                    @foreach ($categories as $item)
                                                        @if (count($item->subcategories) <= 0)
                                                            <li class="option">{{ $item->name }} ({{ count($item->products) }})</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <script>
                                var coll = document.getElementsByClassName("collapsible");
                                var i;

                                for (i = 0; i < coll.length; i++) {
                                    coll[i].addEventListener("click", function() {
                                        this.classList.toggle("active");
                                        var content = this.nextElementSibling;
                                        if (content.style.display === "block") {
                                            content.style.display = "none";
                                        } else {
                                            content.style.display = "block";
                                        }
                                    });
                                }
                            </script> --}}

                            <script>
                                var coll = document.getElementsByClassName("collapsible");

                                for (let i = 0; i < coll.length; i++) {
                                    coll[i].addEventListener("click", function() {
                                        // Hide all other sections except the clicked one
                                        for (let j = 0; j < coll.length; j++) {
                                            if (coll[j] !== this) {
                                                coll[j].nextElementSibling.style.display = "none";
                                                coll[j].classList.remove("active");
                                            }
                                        }
                                        // Toggle the display of the clicked section
                                        this.classList.toggle("active");
                                        var content = this.nextElementSibling;
                                        if (content.style.display === "block") {
                                            content.style.display = "none";
                                        } else {
                                            content.style.display = "block";
                                        }
                                    });
                                }
                            </script>






                            {{-- <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Product Status</h5>
                                </div>
                                <div class="product-status">
                                    <div class="product-status_stock  gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0"><span
                                                class="current">Publication</span>
                                            <ul class="list">
                                                @foreach ($publications as $item)
                                                    <li class="option">{{ $item->title }} ({{ count($item->products) }})
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-status_stock  gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0"><span
                                                class="current">Subjects</span>
                                            <ul class="list">
                                                @foreach ($subjects as $item)
                                                    <li class="option">{{ $item->title }} ({{ count($item->products) }})
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-status_stock  gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0"><span
                                                class="current">Writers</span>
                                            <ul class="list">
                                                @foreach ($writers as $item)
                                                    <li class="option">{{ $item->name }} ({{ count($item->products) }})
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-status_stock  gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0"><span
                                                class="current">Packages</span>
                                            <ul class="list">
                                                @foreach ($packages as $item)
                                                    <li class="option">{{ $item->title }} ({{ count($item->products) }})
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-status_stock  gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0"><span
                                                class="current">Categoriries</span>
                                            <ul class="list">
                                                @foreach ($categories as $item)
                                                    @if (count($item->subcategories) <= 0)
                                                        <li class="option">{{ $item->name }}
                                                            ({{ count($item->products) }})
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Search</h5>
                                </div>
                                <form action="#" class="search-toggle-box">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" placeholder="Search here">
                                        <button class="cmn-btn search-icon">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Categories</h5>
                                </div>
                                <div class="categories-list">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-arts-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-arts" type="button" role="tab"
                                                aria-controls="pills-arts" aria-selected="true">Arts &
                                                Photography</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-Biographies-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Biographies" type="button" role="tab"
                                                aria-controls="pills-Biographies" aria-selected="false">Biographies &
                                                Memoirs</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-ChristianBooks-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-ChristianBooks" type="button" role="tab"
                                                aria-controls="pills-ChristianBooks" aria-selected="false">Christian
                                                Books & Bibles</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-ResearchPublishing-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-ResearchPublishing"
                                                type="button" role="tab" aria-controls="pills-ResearchPublishing"
                                                aria-selected="false">Research &
                                                Publishing Guides</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-SportsOutdoors-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-SportsOutdoors" type="button" role="tab"
                                                aria-controls="pills-SportsOutdoors" aria-selected="false">Sports &
                                                Outdoors</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-FoodDrink-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-FoodDrink" type="button" role="tab"
                                                aria-controls="pills-FoodDrink" aria-selected="false">Food &
                                                Drink</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Product Status</h5>
                                </div>
                                <div class="product-status">
                                    <div class="product-status_stock  gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0"><span class="current">
                                                In Stock
                                            </span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">
                                                    In Stock
                                                </li>
                                                <li data-value="1" class="option">
                                                    Castle In The Sky
                                                </li>
                                                <li data-value="1" class="option">
                                                    The Hidden Mystery Behind
                                                </li>
                                                <li data-value="1" class="option">
                                                    Flovely And Unicom Erna
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-status_sale gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0">
                                            <span class="current">
                                                On Sale
                                            </span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">
                                                    On Sale
                                                </li>
                                                <li data-value="1" class="option">
                                                    Flovely And Unicom Erna
                                                </li>
                                                <li data-value="1" class="option">
                                                    Castle In The Sky
                                                </li>
                                                <li data-value="1" class="option">
                                                    How Deal With Very Bad BOOK
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="single-sidebar-widget mb-50">
                                <div class="wid-title">
                                    <h5>Filter By Price</h5>
                                </div>
                                <div class="range__barcustom">
                                    <div class="slider">
                                        <div class="progress" style="left: 15.29%; right: 58.9%;"></div>
                                    </div>
                                    <div class="range-input">
                                        <input type="range" class="range-min" min="0" max="10000"
                                            value="2500">
                                        <input type="range" class="range-max" min="100" max="10000"
                                            value="7500">
                                    </div>
                                    <div class="range-items">
                                        <div class="price-input">
                                            <div class="d-flex align-items-center">
                                                <a href="shop-left-sidebar.html" class="filter-btn mt-2 me-3">Filter</a>
                                                <div class="field">
                                                    <span>Price:</span>
                                                </div>
                                                <div class="field">
                                                    <span>$</span>
                                                    <input type="number" class="input-min" value="100">
                                                </div>
                                                <div class="separators">-</div>
                                                <div class="field">
                                                    <span>$</span>
                                                    <input type="number" class="input-max" value="1000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget mb-0">
                                <div class="wid-title">
                                    <h5>By Review</h5>
                                </div>
                                <div class="categories-list">
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                                35
                                            </span>
                                        </span>
                                    </label>
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </span>
                                                24
                                            </span>
                                        </span>
                                    </label>
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </span>
                                                15
                                            </span>
                                        </span>
                                    </label>
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </span>
                                                2
                                            </span>
                                        </span>
                                    </label>
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </span>
                                                1
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-8 order-1 order-md-2" id="shop_products">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="routeData" data-route="{{ route('front.ajax.shop') }}"></div>
<div id="search_value2" data-route="{{ request('search') }}"></div>
@endsection
@push('js')
<script>
$(document).ready(function () {
    $(".subcategory, .writer, .subject, .publication, .category, .sort-select, .package, .ebook").change(function () {
        updateProducts();
    });
    updateProducts();

    function updateProducts(page = 1) {
        var subcategory = [];
        var writer = [];
        var package = [];
        var subject = [];
        var publication = [];
        var category = [];
        var ebook = [];
        var sort = $(".sort-select").val();

        $(".subcategory:checked").each(function () {
            subcategory.push($(this).val());
        });
        $(".writer:checked").each(function () {
            writer.push($(this).val());
        });
        $(".subject:checked").each(function () {
            subject.push($(this).val());
        });
        $(".publication:checked").each(function () {
            publication.push($(this).val());
        });
        $(".package:checked").each(function () {
            package.push($(this).val());
        });
        $(".category:checked").each(function () {
            category.push($(this).val());
        });
        $(".ebook:checked").each(function () {
            ebook.push($(this).val());
        });

        var routeUrl = $('#routeData').data('route');
        var search = $('#search_value2').data('route');

        $.ajax({
            type: "GET",
            url: routeUrl,
            data: {
                subcategory: subcategory,
                writer: writer,
                package: package,
                subject: subject,
                publication: publication,
                category: category,
                ebook: ebook,
                page: page,
                sort: sort,
                search: search
            },
            success: function (response) {
                $("#shop_products").html(response);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        updateProducts(page);
    });
});

</script>


@endpush
