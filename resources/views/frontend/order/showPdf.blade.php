@extends('frontend.app')
@section('title', 'Home')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/checkout.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
@endpush
@section('content')
<div class="container">
    <div class="row">
        <section>
            <div class="container mt-3">
                <div class="slider-box">
                    <div class="card p-4">
                        <h6 class="text-danger mb-0">আপনার পার্সোনাল লাইব্রেরী</h6>
                    </div>
                    <div class="product-sliders row">
                            @foreach($productArray as $key => $product)
                                <div class="product px-3 py-3 text-center col-lg-2 col-6">
                                    <a href="{{ route('front.product.show', [ $product->id ] ) }}" title="{{ $product->name }}" class="text-decoration-none">
                                        @if(!empty($product->offer_price))
                                        @php
                                            $discount = (($product->price - $product->offer_price) / $product->price) * 100;
                                        @endphp
                                        <div class="product_label" style="display: block !important;">
                                            <span class="onsale text_lebel product_label" style="display: block !important; text-transform: unset; "> {{ abs(number_format($discount, 0)) }}%
                                                <br>ছাড়
                                            </span>
                                        </div>
                                        @endif
                                        <div class="image">
                                            <img src="{{ asset('uploads/custom-images/'.$product->thumb_image) }}" alt="">
                                            </div>
                                            <div class="text-area pt-2 text-center">
                                            <p class="book-title mb-2 p-0 bold-7 font-12 text-dark">{{ $product->name }}</p>
                                            <p class="book-author mb-2 p-0 font-14 text-secondary">{{ $product->writer ? $product->writer->name : '' }}</p>
                                        </div>
                                        </a>
                                    <button 
                                    style="width: 100%;padding: 5px !important;"
                                    class="btn btn-warning me-3 mb-2 px-lg-4 px-2 py-lg-3 py-1 font-15" 
                                    data-bs-toggle="modal" data-bs-target="#read_more_{{ $product->id }}">
                                       <i style="margin-right: 10px;" class="fa fa-book"></i> পড়ুন
                                    </button>                        
                                </div>
                      
                        @endforeach  
                     </div>
                </div>
            </div>
        </section>
    </div>
    
</div>
@foreach($productArray as $key => $product)
    <div class="modal fade" id="read_more_{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PDF Pages</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul id="pdfImagesList" class="list-unstyled">
                        @foreach($product->pdf_file_images as $file)
                            <li>
                                <img src="{{ asset($file->image) }}">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach
    <style>
        #pdfImagesList > li > img{
            width: 100%;
        }
    </style>

@push('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.description-show .read-more').click(function(e) {
                e.preventDefault();
                var description = $('.description-show .description-content');
                var fullDescription = $(this).prev('.full-description');

                description.toggleClass('show-full-description');
                fullDescription.toggleClass('show-full-description');
                $(this).text(function(i, text) {
                    return text === "Read more" ? "Read less" : "Read more";
                });
            });
        });
    </script>    

<script>

    document.querySelectorAll('[id^="convertPdfButton_"]').forEach(button => {
        button.addEventListener('click', function () {
            const pdfUrl = this.getAttribute('href');
            
            pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
                const pdfImagesList = document.getElementById('pdfImagesList');
                pdfImagesList.innerHTML = '';

                // Loop through each page and convert to image
                for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                    pdf.getPage(pageNum).then(page => {
                        const scale = 2.5;
                        const viewport = page.getViewport({ scale });
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        page.render({
                            canvasContext: context,
                            viewport: viewport
                        }).promise.then(() => {
                            const img = document.createElement('img');
                            img.src = canvas.toDataURL();
                            const li = document.createElement('li');
                            li.appendChild(img);
                            pdfImagesList.appendChild(li);
                        });
                    });
                }
            }).catch(error => {
                console.error('Error loading PDF: ', error);
            });
        });
    });

</script>
@endpush

        @endsection