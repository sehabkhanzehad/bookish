@extends('frontend.app')
@section('title', 'Home')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/checkout.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
@endpush
@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-2">
            <h2>Order</h2>
            <p><strong>Order Number:</strong> {{ $order->order_id }}</p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-warning" href="{{ route('front.pdfBook') }}">Go To Library</a>
        </div>
        
    </div>
    

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Download</th>
                <th>Product Quantity</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
            $totalAmount = 0; // Initialize totalAmount
            @endphp
            @forelse($order->orderProducts as $item)
            <tr>
                <td><img src="{{ asset('uploads/custom-images2/'.$item->product->thumb_image) }}" alt="" height="100"></td>
                <td>{{ $item->product->name }}</td>
                
                    @if($item->product->product_type=='3')
                        <td class="text-center">
                           
                        <button 
                            style="width: 50%;padding: 5px !important;"
                            class="btn btn-warning me-3 mb-2 px-lg-4 px-2 py-lg-3 py-1 font-15" 
                            data-bs-toggle="modal" data-bs-target="#read_more_{{ $item->product->id }}">
                               <i style="margin-right: 10px;" class="fa fa-book"></i> পড়ুন
                        </button> 
                        
                        </td>
                    @else 
                        <td></td>
                    @endif 
               
                <td>{{ $item->qty }}</td>
                <td>{{ $item->unit_price }}</td>
                <td>{{ $item->unit_price * $item->qty }}</td>
            </tr>
            @php
            $totalAmount += ($item->unit_price * $item->qty); // Calculate totalAmount
            @endphp
            @empty
            <tr>
                <td colspan="4">No Order found</td>
            </tr>
            @endforelse
            <tr>
                <td colspan="4" class="text-end"><strong>Total Amount:</strong></td>
                <td>
                    <div class="total-amount">
                        <p class="main-color" id="total-amount">
                            {{ number_format($totalAmount, 2) }} ৳ <!-- Display total amount -->
                        </p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!--<div class="" role="">-->
<!--            <div class="">-->
<!--                    <div class="modal-header">-->
<!--                            <h5 class="" id="">Order Details</h5>-->
<!--                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                        </div>-->
<!--                <div class="container">-->
<!--                    <div class="container-fluid">-->
<!--                        <div class="table-responsive">-->
<!--                            <table class="table table-border">-->
<!--                                <tbody>-->
<!--                                    @forelse($order->orderProducts as $item)-->
<!--                                    <tr class="">-->
<!--                                        <td scope="row">Product Image</td>-->
<!--                                        <td><img src="{{ asset($item->product->thumb_image) }}" alt="" height="100"></td>-->
<!--                                    </tr>-->
<!--                                    <tr class="">-->
<!--                                        <td scope="row">Order ID</td>-->
<!--                                        <td>{{ $order->order_id }}</td>-->
<!--                                    </tr>-->
<!--                                    <tr class="">-->
<!--                                        <td scope="row">Product Name</td>-->
<!--                                        <td>{{ $item->product->name }}</td>-->
<!--                                    </tr>-->
<!--                                    <tr class="">-->
<!--                                        <td scope="row">Product Price</td>-->
<!--                                        <td>{{ $item->unit_price }}</td>-->
<!--                                    </tr>-->
<!--                                    <tr class="">-->
<!--                                        <td scope="row">Product Quantity</td>-->
<!--                                        <td>{{ $item->qty }}</td>-->
<!--                                    </tr>-->
<!--                                    <tr class="d-none">-->
<!--                                        <td scope="row">Action</td>-->
<!--                                        <td><button class="btn btn-danger border-0 rounded-0"><i class="fas fa-delete-left"></i> Remove Order</button></td>-->
<!--                                    </tr>-->
<!--                                    @empty-->
<!--                                    <div>-->
<!--                                        <strong class="text-danger text-center">-->
<!--                                            No products are available!-->
<!--                                        </strong>-->
<!--                                    </div>-->
<!--                                    @endforelse-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
                        
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

@foreach($order->orderProducts as $item)
    <div class="modal fade" id="read_more_{{ $item->product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PDF Pages</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul id="pdfImagesList" class="list-unstyled">
                        @foreach($item->product->pdf_file_images as $file)
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
    document.getElementById('convertPdfButton').addEventListener('click', function () {
            const pdfUrl = $(this).attr('href');
            // Load the PDF
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
</script>
@endpush

        @endsection