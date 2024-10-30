@extends('frontend.app')
{{-- @extends('newFrontend.layouts.master') --}}
@section('title', 'Shop Product List')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
<section>
    <div class="container">
        <div class="shop row">
            <div class="filter-nav d-flex justify-content-end align-items-center border border-muted border-end-0 border-top-0 border-start-0 ">
                <div class="align-items-center gap-2 d-none d-lg-flex"  style="margin-bottom: -46px; z-index: 10;">
                    <label for="" class="form-label bold-9 mb-0 font-12 text-nowrap">সর্ট করুন</label>
                    <select class="form-control form-control-sm sort-select" name="sort" >
                        <option value="sort_by_relevancy_desc" selected="">More relevant</option>
                        <option value="discount_asc">Discount - Low to High</option>
                        <option value="discount_desc">Discount - High to Low</option>
                        <option value="price_asc">Price - Low to High</option>
                        <option value="price_desc">Price - High to Low</option>
                    </select>
                </div>
            </div>
            @include('frontend.shop.side_filter')

            <div class="col-lg-9 col-md-7 col-12 all-products-widget" id="shop_products">

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
