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
                <h1>Order List</h1>
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
                            Order List
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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            @if ($orders->count() > 0)
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Order Date</th>
                                    <th>Total Amount</th>

                                    <th>Status</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            @endif
                            <tbody>
                                @forelse($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_id }}</td>
                                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('j M Y / H:i:s') }}</td>
                                        <td>{{ $order->total_amount }}</td>


                                        <td> @php $s = $order->order_status; @endphp
                                            @if ($s == 0)
                                                <p
                                                    style="color:yellow;background:black; text-align:center; border-radius:10%; font-weight:bold">
                                                    Pending</p>
                                            @elseif($s == 1)
                                                <p
                                                    style="color:white;background:black; text-align:center; border-radius:10%; font-weight:bold">
                                                    Progress </p>
                                            @elseif($s == 2)
                                                <p
                                                    style="color:Gray; background:black; text-align:center; border-radius:10%; font-weight:bold">
                                                    Delivered </p>
                                            @elseif($s == 3)
                                                <p
                                                    style="color:greenyellow; background:black; text-align:center; border-radius:10%; font-weight:bold">
                                                    Completed </p>
                                            @elseif($s == 4)
                                                <p
                                                    style="color:red; background:black; text-align:center; border-radius:10%; font-weight:bold">
                                                    Declined </p>
                                            @endif
                                        </td>
                                        <td> <a href="{{ route('front.order.show', [$order->id]) }}"
                                                class="view-details-btn btn btn-success">
                                                <span class="text">View Details</span>
                                                <span class="icon arrow-down">
                                                    <svg width="10px" height="10px"
                                                        style="fill:#000000;stroke:#000000;display:inline-block;vertical-align:middle;"
                                                        viewBox="0 0 100 100">
                                                        <path transform="translate(0 -952.36)"
                                                            d="m31.918 1045.4l36.164-31.684 12.918-11.316-12.918-11.316-36.164-31.684-12.918 11.316 36.168 31.684-36.168 31.684zm0 0"
                                                            stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                    </svg>
                                                </span>
                                            </a></td>
                                    </tr>
                                @empty
                                    <div>
                                        <h1 class="text-danger text-center">No orders are available!</j>
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
