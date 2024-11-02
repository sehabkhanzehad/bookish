@extends('newFrontend.layouts.master')
@section('title', 'Thanks')

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
                <h1>Order Details</h1>
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
                            Order Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h4>Order Number: {{ $order->order_id }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product Image</th>
                                <th>Product Name</th>
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
                                    <td><img src="{{ asset('uploads/custom-images2/' . $item->product->thumb_image) }}"
                                            alt="" height="100"></td>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->unit_price }}</td>
                                    <td>{{ $item->unit_price * $item->qty }}</td>
                                </tr>
                                @php
                                    $totalAmount += $item->unit_price * $item->qty; // Calculate totalAmount
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
            </div>


        </div>
    </section>



@endsection
