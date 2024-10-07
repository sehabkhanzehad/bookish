@extends('frontend.app')
@section('title', 'Home')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/profile.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
@endpush
@section('content')

<div class="container mt-3">
  
  <div class="mt-4 p-5 bg-success text-white rounded text-center" style="margin-bottom: 5%; box-shadow: 10px 10px 5px gray;">
    <h1>Thanks For order</h1> 
    <p>Your Order Has Been Received </p> 
    <p> Our Sales Representative Will contact you, to ensure this order </p> 
    @if(!empty($order_inv->order_id))
    <p> For Your Order. Invoice Number is : #{{$order_inv->order_id}} </p>
    @else
   
    @endif
    <a class="btn bg-dark" href="{{route('front.home')}}" style="color:white"> Back To Home  </a>
    @if(!empty($order_inv->order_phone))
    <a class="btn bg-dark" href="{{route('front.order-list',$order_inv->order_phone)}}" style="color:white"> See all Orders  </a>
    
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">File Download</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        <?php
            foreach($order_inv->orderProducts  as $orderProduct){
                ?>
                    <td>{{ $orderProduct->product->name }}</td>
                <?php
                if($orderProduct->product->product_type=='3'){
                    ?>
                        <td>
                            <!--<a id="convertPdfButton" href="{{ asset($orderProduct->product->pdf_file) }}" data-bs-toggle="modal" data-bs-target="#read_more" class="btn btn-warning">পড়ে দেখুন</a>-->
                        <button 
                                    style="width: 33%;padding: 5px !important;"
                                    class="btn btn-warning me-3 mb-2 px-lg-4 px-2 py-lg-3 py-1 font-15" 
                                    data-bs-toggle="modal" data-bs-target="#read_more_{{ $orderProduct->product->id }}">
                                       <i style="margin-right: 10px;" class="fa fa-book"></i> পড়ুন
                                    </button> 
                        </td>
                    <?php
                } else {
                    ?>
                        <td></td>
                    <?php
                }
            }
        ?>
    </tr>
  </tbody>
</table>
    
    
    @else
    @endif
  </div>
</div>
@foreach($order_inv->orderProducts  as $orderProduct)
<div class="modal fade" id="read_more_{{ $orderProduct->product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PDF Pages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="pdfImagesList" class="list-unstyled">
                    @foreach($orderProduct->product->pdf_file_images as $file)
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