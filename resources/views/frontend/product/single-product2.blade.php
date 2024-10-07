<div class="col-lg-3 col-md-4 mb-3 px-3">
    <div class="book_item">
        <div class="image">
            <a href="{{ route('front.product.show', [ $product->id ] ) }}">
                <img src="{{ asset('uploads/custom-images3/'.$product->thumb_image) }}" class="img-fluid" alt="">
            </a>
                <span class="badge bg-danger">{{ $key+1 }}</span>
        </div>
        <div class="content">
            <a href="{{ route('front.product.show', [ $product->id ] ) }}" class="d-block div_block bold-7 text-dark text-decoration-none mb-1">{{ $product->name }}</a>
            <a href="{{ route('front.product.show', [ $product->id ] ) }}" class="d-block div_block text-muted text-decoration-none mb-1">{{ $product->writer ? $product->writer->name : '' }}</a>
            <a href="{{ route('front.product.show', [ $product->id ] ) }}" class="d-block div_block text-muted text-decoration-none mb-1 d-lg-block d-none">{{ $product->publication ? $product->publication->title : '' }}</a>
        </div>
    </div>
</div>
