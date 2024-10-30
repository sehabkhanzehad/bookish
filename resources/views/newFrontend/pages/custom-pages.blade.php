@extends('newFrontend.layouts.master')
@section('title')
    {{ $customPage->page_name }}
@endsection
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
                <h1>{{ $customPage->page_name }}</h1>
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
                        {{ $customPage->page_name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align:justify">{!! $customPage->description !!}</p>
                </div>
            </div>
        </div>
    </section>
 @endsection
