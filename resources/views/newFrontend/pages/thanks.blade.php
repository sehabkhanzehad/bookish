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
                <h1>Thank you</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a class="theme-btn" href="{{ route('front.home') }}">
                                Back to Home
                               </a>
                               <br>
                        </li>
                        <li>
                            <a class="theme-btn" href="{{ route('front.order-list', $order_inv->order_phone) }}">
                                See all Orders
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <h4>Your order has been placed successfully</h4>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
