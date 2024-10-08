 <!-- New Publish Section start  -->
 <section class="shop-section section-padding fix">
     <div class="container">
         <div class="section-title-area">
             <div class="section-title wow fadeInUp" data-wow-delay=".3s">
                 <h2>Pre-Order Books</h2>
             </div>
             <a href="{{ route('front.shop') }}" class="theme-btn transparent-btn wow fadeInUp"
                 data-wow-delay=".5s">Explore
                 More
                 <i class="fa-solid fa-arrow-right-long"></i></a>
         </div>
         <div class="swiper book-slider">
             <div class="swiper-wrapper">
                 @foreach ($pre_orders as $key => $product)
                     @include('newFrontend.components.common.single-product')
                 @endforeach
             </div>
         </div>
     </div>
 </section>
