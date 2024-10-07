<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.head')

<body>
    <div class="main-wrapper">
    @include('frontend.partials.header')
    @php $cart = session()->get('cart', []); @endphp
    <a href="{{ route('front.checkout.index') }}"
    class="btn pmd-btn-fab pmd-ripple-effect btn-primary fixed-cart-bottom1 d-none"
    type="button"> @if($cart !== null) <span style="color: white;position: absolute;top: 4px;right: 17px;">{{ count($cart) }}</span>  @endif<i class="fas fa-shopping-cart"></i></a>

    <!-- Common Modal -->
        
    <div class="modal fade" id="commonModal" tabindex="-1" aria-labelledby="commonModalLabel" aria-hidden="true">

    </div>

    <!-- Common Modal -->

    @yield('content')
    </div>
    @include('frontend.partials.footer')

