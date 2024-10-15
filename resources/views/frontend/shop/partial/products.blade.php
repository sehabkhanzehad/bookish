<div class="filter-nav d-flex justify-content-between align-items-center border border-muted border-end-0 border-top-0 border-start-0">
    <nav aria-label="breadcrumb" class="pt-2">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active bold-7 font-12" aria-current="page">{{ ($currentPage - 1) * $perPage + 1 }} থেকে
            {{ min($currentPage * $perPage, $totalProducts) }} দেখাচ্ছে।
            মোট {{ $totalProducts }} টি আইটেম পাওয়া গিয়েছে</li>
        </ol>
      </nav>
    <nav class="navbar">

    <div class="mb-3 d-flex align-items-center gap-2 d-none">
        <label for="" class="form-label bold-9 mb-0 font-12 text-nowrap">সর্ট করুন</label>
        <select class="form-control form-control-sm" id="sort-select" name="sort">
            <option value="sort_by_relevancy_desc" selected="">More relevant</option>
            <option value="discount_asc">Discount - Low to High</option>
            <option value="discount_desc">Discount - High to Low</option>
            <option value="price_asc">Price - Low to High</option>
            <option value="price_desc">Price - High to Low</option>
        </select>
    </div>

    </nav>
</div>
<!--dsgdsdsg-->
<!-- All Products  -->
<div class="all-products row">
    @forelse ($products as $key => $product)
        <div class="col-lg-3 col-md-4 col-6 mb-3">
            @include('frontend.product.single-product', ['product'=>$product, 'key' => $key] )
        </div>
    @empty
    <div align="center">
        <strong class="text-center text-danger">No products are available</strong>
    </div>
    @endforelse

</div>

@if ($products->lastPage() > 1)
<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item {{ ($products->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $products->url(1) }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        @for ($i = 1; $i <= $products->lastPage(); $i++)
            <li class="page-item {{ ($products->currentPage() == $i) ? ' active' : '' }}">
                <a class="page-link " href="{{ $products->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $products->url($products->lastPage()) }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
@endif
