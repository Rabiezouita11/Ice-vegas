
@extends('Client.Layouts.index')

@section('content')
<main>

   <!-- breadcrumb-area-start -->
   <div class="breadcrumb__area grey-bg pt-5 pb-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tp-breadcrumb__content">
                  <div class="tp-breadcrumb__list">
                     <span class="tp-breadcrumb__active"><a  style="color:black" href="index.html">Acceuil</a></span>
                     <span class="dvdr">/</span>
                     <span class="tp-breadcrumb__active"><a  style="color:black" href="index.html">{{ $product->categorie->Nom }}</a></span>
                     <span class="dvdr">/</span>
                     <span  style="color:black" >{{ $product->Nom }}</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb-area-end -->

   <!-- shop-details-area-start -->
   <section class="shopdetails-area grey-bg pb-50">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 col-md-12">
               <div class="tpdetails__area mr-60 pb-30">
                  <div class="tpdetails__product mb-30">
                     <div class="tpdetails__title-box">
                        <h3 class="tpdetails__title">{{ $product->Nom }}</h3>
                        <ul class="tpdetails__brand">
                           <li>
                              <i class="icon-star_outline1"></i>
                              <i class="icon-star_outline1"></i>
                              <i class="icon-star_outline1"></i>
                              <i class="icon-star_outline1"></i>
                              <i class="icon-star_outline1"></i>
                              <b>00 Reviews</b>
                           </li>
                           <li>
                           </li>
                        </ul>
                     </div>
                     <div class="tpdetails__box">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="tpproduct-details__nab">
                                 <div class="tpproduct-details__thumb-img mb-10">
                                    <img src="{{ $product->Image }}" alt="">
                                 </div>                
                                              
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-12">
                              <div class="tpproduct-feature p-relative pt-45 pb-40">
                                  <div class="tpsection tpfeature__content mb-35">
                                      <h4 class="tpsection__sub-title mb-0"></h4>
                                      <h4 class="tpsection__title tpfeature__title mb-25" style="color: black">Ice Vegas Saveur Vanille Light
                                       <br> <span></span> </h4>
                                      <p style="color: black">TL'Ice Vegas Saveur Vanille Light est une crème glacée délicieuse et légère, parfaite pour ceux qui souhaitent se faire plaisir sans culpabilité <br> doming quod mazim
                                          placerat facer possim assum.</p>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-6 col-md-6">
                                          <div class="tpfeature__box">
                                              <div class="tpfeature__product-item mb-25">
                                                  <h4 class="tpfeature__product-title" style="color: black">Fresh </h4>
                                                  <span class="tpfeature__product-info" style="color: black>chocolat , vanille</span>
                                              </div>
                                              <div class="tpfeature__product-item mb-45">
                                                  <h4 class="tpfeature__product-title" style="color: black"> 100% Organic</h4>
                                                  <span class="tpfeature__product-" style="color: black"></span>
                                              </div>
                                             
                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6">
                                          <div class="tpfeature__box">
                                              <div class="tpfeature__product-item mb-25">
                                                  <h4 class="tpfeature__product-title" style="color: black">Ingrédient</h4>
                                                  <span class="tpfeature__product-info" style="color: black">Énergie, Protéines, 0 % Sucres</span>
                                              </div>
                                              <div class="tpfeature__product-item mb-45">
                                                  <h4 class="tpfeature__product-title" style="color: black">Taille de la botte :</h4>
                                                  <span class="tpfeature__product-" style="color: black"> 100ml</span>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                  <div class="tpfeature__shape d-none d-md-block">
                                      <img class="tpfeature__shape-three" src=".jpg"
                                          alt="">
                                  </div>
                                  
                                    <a href="#"><i class="icon-share-2"></i> partager</a>
                                 
                              </div>
                          </div>
                         
                           {{-- <div class="col-lg-6">
                              <div class="product__details product__sticky">
                                 <div class="product__details-price-box">
                                    <ul class="product__details-info-list">
                                       <li>Delicious non - dairy cheese sauce</li>
                                       <li>Vegan & Allergy friendly</li>
                                       <li>Smooth, velvety dairy free cheese sauce</li>
                                    </ul>
                                 </div>
                            
                                 
                                 <div class="product__details-stock mb-25">
                                    <ul>
                                       <li>Categories: <span>Vegetables, Meat & Eggs, Fruit Drink </span></li>
                                       <li>Tags: <span>Chicken, Natural, Organic</span></li>
                                    </ul>
                                 </div>
                                 <div class="product__details-cart">
                                 
                                    <ul class="product__details-check">
                                       <li>
                                       </li>
                                       <li>
                                       </li>
                                       <li> 
                                          <a href="#"><i class="icon-share-2"></i> Share</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                             
                           </div> --}}
                        </div>
                     </div>
                  </div>
                  <div class="tpdescription__box">
                     <div class="tpdescription__box-center d-flex align-items-center justify-content-center">
                        <nav>
                           <div class="nav nav-tabs" id="nav-tab" role="tablist">
                             <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Product Description</button>
                             <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews (1)</button>
                           </div>
                         </nav>
                     </div>
                     <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                           <div class="tpdescription__content">
                              <p>{{ $product->Description }}</p>
                           </div>
                        
                          
                        </div>
                        <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
                           <div class="tpdescription__content">
                              <p>Designed by Puik in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique chinese armchairs. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia eserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, aque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                           </div>
                           <div class="tpdescription__product-wrapper mt-30 mb-30 d-flex justify-content-between align-items-center">
                              <div class="tpdescription__product-info">
                                 <h5 class="tpdescription__product-title">PRODUCT DETAILS</h5>
                                 <ul class="tpdescription__product-info">
                                    <li>Material: Plastic, Wood</li>
                                    <li>Legs: Lacquered oak and black painted oak</li>
                                    <li>Dimensions and Weight: Height: 80 cm, Weight: 5.3 kg</li>
                                    <li>Length: 48cm</li>
                                    <li>Depth: 52 cm</li>
                                 </ul>
                                 <p>Lemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut <br> fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem <br> sequi nesciunt.</p>
                              </div>
                              <div class="tpdescription__product-thumb">
                                 <img src="assets/img/product/product-single-1.png" alt="">
                              </div>
                           </div>
                           <div class="tpdescription__video">
                              <h5 class="tpdescription__product-title">PRODUCT DETAILS</h5>
                              <p> </p>
                           </div>
                        </div>




                        <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                           <div class="tpreview__wrapper">
                              <h4 class="tpreview__wrapper-title"></h4>
                              <div class="tpreview__comment">
                                 <div class="tpreview__comment-img mr-20">
                                    <img src="assets/img/testimonial/test-avata-1.png" alt="">
                                 </div>
                                 <div class="tpreview__comment-text">
                                    <div class="tpreview__comment-autor-info d-flex align-items-center justify-content-between">
                                       <div class="tpreview__comment-author">
                                          <span>admin</span>
                                       </div>
                                       <div class="tpreview__comment-star">
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                       </div>
                                    </div>
                                    <span class="date mb-20">--April 9, 2022: </span>
                                    <p>very good</p>
                                 </div>
                              </div>
                              <div class="tpreview__form">
                                 <h4 class="tpreview__form-title mb-25">Add a review </h4>
                                 <form action="#">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="tpreview__input mb-30">
                                             <input type="text" placeholder="Name">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="tpreview__input mb-30">
                                             <input type="email" placeholder="Email">
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tpreview__star mb-20">
                                             <h4 class="title">Your Rating</h4>
                                             <div class="tpreview__star-icon">
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                             </div>
                                          </div>
                                          <div class="tpreview__input mb-30">
                                             <textarea name="text" placeholder="Message"></textarea>
                                             <div class="tpreview__submit mt-30">
                                                <button class="tp-btn">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>




                     </div>   
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-12">
               <div class="tpsidebar pb-30">
               
               <div class="tpsidebar__banner mb-30">
    <a href="{{route('jeux')}}">
        <img src="quiz1.jpg" alt="Quiz Image">
    </a>
</div>

                  <div class="tpsidebar__banner mb-30">
                     <img src="quiz2.jpg" alt="">
                  </div>
               
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- shop-details-area-end -->

   <!-- product-area-start -->
   <section class="product-area whight-product pt-75 pb-80">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
            </div>
         </div>
         
                           
                 
                       
                          
                         
                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>  
         </div>
      </div>
   </section>
   <!-- product-area-end -->
   
   <!-- feature-area-start -->
  
   <!-- feature-area-end -->

</main>
@endsection