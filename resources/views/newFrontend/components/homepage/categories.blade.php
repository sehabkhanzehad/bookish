 <!-- Book Catagories Section start  -->
 <section class="book-catagories-section fix section-padding">
     <div class="container">
         <div class="book-catagories-wrapper">
             <div class="section-title text-center">
                 <h2 class="wow fadeInUp" data-wow-delay=".3s">
                     Featured Categories
                 </h2>
             </div>
             <div class="array-button">
                 <button class="array-prev">
                     <i class="fal fa-arrow-left"></i>
                 </button>
                 <button class="array-next">
                     <i class="fal fa-arrow-right"></i>
                 </button>
             </div>
             <div class="swiper book-catagories-slider">
                 <div class="swiper-wrapper">

                    @foreach ($categories as $key => $category)

                     <div class="swiper-slide">
                         <div class="book-catagories-items">

                             <div class="book-thumb">
                                 <img src="{{ asset('uploads/custom-images2/' . $category->image) }}" alt="img" />
                                 <div class="circle-shape">
                                     <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                         alt="shape-img" />
                                 </div>
                             </div>
                             <div class="number">{{ $key + 1 }}</div>
                             <h3>
                                 <a href="shop-details.html">{{ $category->name }} ({{ $category->products->count() }})</a>
                             </h3>
                         </div>
                     </div>
                     @endforeach


                    {{--  <div class="swiper-slide">
                         <div class="book-catagories-items">
                             <div class="book-thumb">
                                 <img src="{{ asset('newFrontend') }}/img/book-categori/02.png" alt="img" />
                                 <div class="circle-shape">
                                     <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                         alt="shape-img" />
                                 </div>
                             </div>
                             <div class="number">02</div>
                             <h3>
                                 <a href="shop-details.html">Design Low Book (6)</a>
                             </h3>
                         </div>
                     </div>
                     <div class="swiper-slide">
                         <div class="book-catagories-items">
                             <div class="book-thumb">
                                 <img src="{{ asset('newFrontend') }}/img/book-categori/03.png" alt="img" />
                                 <div class="circle-shape">
                                     <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                         alt="shape-img" />
                                 </div>
                             </div>
                             <div class="number">03</div>
                             <h3>
                                 <a href="shop-details.html">safe Home (5)</a>
                             </h3>
                         </div>
                     </div>
                     <div class="swiper-slide">
                         <div class="book-catagories-items">
                             <div class="book-thumb">
                                 <img src="{{ asset('newFrontend') }}/img/book-categori/04.png" alt="img" />
                                 <div class="circle-shape">
                                     <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                         alt="shape-img" />
                                 </div>
                             </div>
                             <div class="number">04</div>
                             <h3>
                                 <a href="shop-details.html">Grow flower (7)</a>
                             </h3>
                         </div>
                     </div>
                     <div class="swiper-slide">
                         <div class="book-catagories-items">
                             <div class="book-thumb">
                                 <img src="{{ asset('newFrontend') }}/img/book-categori/05.png" alt="img" />
                                 <div class="circle-shape">
                                     <img src="{{ asset('newFrontend') }}/img/book-categori/circle-shape.png"
                                         alt="shape-img" />
                                 </div>
                             </div>
                             <div class="number">05</div>
                             <h3>
                                 <a href="shop-details.html">Adventure book (4)</a>
                             </h3>
                         </div>
                     </div> --}}
                 </div>
             </div>
         </div>
     </div>
 </section>
