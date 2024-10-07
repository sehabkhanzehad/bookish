<div class="col-lg-3 col-md-5 col-12 shop-filter-sidebar">
    <div class="card">
        <div class="card-body">
            <div class="accordion" id="accordionExample">
        <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button side_cat_header" type="button" data-bs-toggle="collapse" data-bs-target="#cat1" aria-expanded="true" aria-controls="cat1">
                    প্রকাশক
                </button>
            </h2>
            <div id="cat1" class="accordion-collapse collapse {{ request('publication') ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body pb-0">
                    <ul class="list-group-flush list-unstyled">
                        @foreach ($publications as $item)
                        <li class="nav-item mb-2">
                            <label class="font-12 bold-7 ">
                                <input type="checkbox" name="publication[]" {{ request('publication') == $item->id ? 'checked' : '' }} value="{{ $item->id }}" class="me-2 publication"> {{ $item->title }} ({{ count($item->products) }})
                            </label>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button side_cat_header" type="button" data-bs-toggle="collapse" data-bs-target="#cat2" aria-expanded="true" aria-controls="cat2">
                    বিষয় সমূহ
                </button>
            </h2>
            <div id="cat2" class="accordion-collapse collapse {{ request('subject') ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body pb-0">
                    <ul class="list-group-flush list-unstyled">
                        @foreach ($subjects as $item)
                        <li class="nav-item mb-2">
                            <label class="font-12 bold-7 ">
                                <input type="checkbox" name="subject[]" {{ request('subject') == $item->id ? 'checked' : '' }} value="{{ $item->id }}" class="me-2 subject"> {{ $item->title }} ({{ count($item->products) }})
                            </label>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button side_cat_header" type="button" data-bs-toggle="collapse" data-bs-target="#cat3" aria-expanded="true" aria-controls="cat3">
                    লেখক
                </button>
            </h2>
            <div id="cat3" class="accordion-collapse collapse {{ request('writer') ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body pb-0">
                    <ul class="list-group-flush list-unstyled">
                        @foreach ($writers as $item)
                        <li class="nav-item mb-2">
                            <label class="font-12 bold-7 ">
                                <input type="checkbox" name="writer[]" {{ request('writer') == $item->id ? 'checked' : '' }} value="{{ $item->id }}" class="me-2 writer"> {{ $item->name }} ({{ count($item->products) }})
                            </label>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button side_cat_header" type="button" data-bs-toggle="collapse" data-bs-target="#cat5" aria-expanded="true" aria-controls="cat5">
                    প্যাকেজ সমূহ
                </button>
            </h2>
            <div id="cat5" class="accordion-collapse collapse {{ request('package') ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body pb-0">
                    <ul class="list-group-flush list-unstyled">
                        @foreach ($packages as $item)
                        <li class="nav-item mb-2">
                            <label class="font-12 bold-7 ">
                                <input type="checkbox" name="package[]" {{ request('package') == $item->id ? 'checked' : '' }} value="{{ $item->id }}" class="me-2 package"> {{ $item->title }} ({{ count($item->products) }})
                            </label>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        
        <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button side_cat_header" type="button" data-bs-toggle="collapse" data-bs-target="#cat4" aria-expanded="true" aria-controls="cat4">
                    Categories
                </button>
            </h2>
            <div id="cat4" class="accordion-collapse collapse {{ request('publication') ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body pb-0">
                    <ul class="list-group-flush list-unstyled">
                        @foreach ($categories as $item)
                            @if (count($item->subcategories) <= 0)
                            <li class="nav-item mb-2">
                                <label class="font-12 bold-7 ">
                                    <input type="checkbox" name="category[]" {{ request('category') == $item->id ? 'checked' : '' }} value="{{ $item->id }}" class="me-2 category"> {{ $item->name }} ({{ count($item->products) }})
                                </label>
                            </li>
                            @endif
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        @foreach ($categories as $key=>$category)
        @if (count($category->subCategories))
        <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button side_cat_header" type="button" data-bs-toggle="collapse" data-bs-target="#cat{{ $key+1 }}_cat" aria-expanded="true" aria-controls="cat{{ $key+1 }}_cat">
                    {{ $category->name }}
                </button>
            </h2>
            <div id="cat{{ $key+1 }}_cat" class="accordion-collapse collapse {{ request('publication') ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body pb-0">
                    <ul class="list-group-flush list-unstyled">
                            @foreach ($category->subCategories as $item)
                            <li class="nav-item mb-2">
                                <label class="font-12 bold-7 ">
                                    <input type="checkbox" name="subcategory[]" value="{{ $item->id }}" class="me-2"> {{ $item->name }} ({{ count($item->products) }})
                                </label>
                            </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        
        <div class="accordion-item mb-2">
            <h2 class="accordion-header" id="headingothers">
                <button class="accordion-button side_cat_header" type="button" data-bs-toggle="collapse" data-bs-target="#catother" aria-expanded="true" aria-controls="catother">
                  অন্যান্য
                </button>
            </h2>
            <div id="catother" class="accordion-collapse collapse {{ request('topic') ? 'show' : '' }}" aria-labelledby="headingothers" data-bs-parent="#accordionExample">
                <div class="accordion-body pb-0">
                    <ul class="list-group-flush list-unstyled">
                        
                        <li class="nav-item mb-2">
                            <label class="font-12 bold-7 ">
                                <input type="checkbox" name="ebook[]" {{ request('topic') == 'ebook' ? 'checked' : '' }} value="3" class="me-2 ebook"> E-book
                            </label>
                        </li>
                        
                        <li class="nav-item mb-2">
                            <label class="font-12 bold-7 ">
                                <input type="checkbox" name="best_seller[]" {{ request('topic') == 'best_seller' ? 'checked' : '' }} value="1" class="me-2 ebook"> Best Seller
                            </label>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </div>
        
        
    </div>
        </div>
    </div>
    
    
    <div class="filter-nav d-none justify-content-end align-items-center border border-muted border-end-0 border-top-0 border-start-0">
        <div class="d-flex align-items-center gap-2 d-lg-none"  style="margin-bottom: 0; z-index: 10;">
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
</div>
