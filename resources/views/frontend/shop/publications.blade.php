@extends('frontend.app')
@section('title', 'Shop Product List')
@section('content')
<style>
    .subjects .item{
        background-color: #f9f9f9;
        margin-right: 2%;
        margin-bottom: 12px;
        padding: 10px 15px;
        border-left: 3px solid #20a5fd;
        list-style: none;
    }
</style>
    <section>
        <div class="container">
            <h2 class="bold my-3">All Publications</h2>
            <form action="" class="d-lg-flex gap-2">
                <div class="mb-3">
                    <input type="text"  value="{{ request('search') }}" name="search" class="form-control col-lg-3 col-12 rounded-0 shadow-sm">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success bold-7" type="submit">Search</button>
                </div>
            </form>
            <div class="shop row subjects mt-4">
                @forelse ($subjects as $item)
                    <div class="col-lg-3 col-12 item">
                        <a href="{{ route('front.shop') }}?publication={{ $item->id }}" class="text-decoration-none font-16 bold-7 text-muted">
                            <h4>{{ $item->title }}</h4>
                        </a>
                    </div>
                @empty
                <div class="col-lg-3 col-12 item">
                    <h4 class="text-center text-danger bold-7">There Are No Publication</h4>
                </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
