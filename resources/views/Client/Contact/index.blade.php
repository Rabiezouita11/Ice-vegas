<<<<<<< HEAD
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Ice Vegas 2  </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
=======
@extends('Client.Layouts.index')
>>>>>>> 27a969314a458ade99f3cfc668bdd4fc19a15dc3

@section('content')
<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area pt-5 pb-5">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tp-breadcrumb__content">
                   <div class="tp-breadcrumb__list">
                      <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                      <span class="dvdr">/</span>
                      <span>Contact Us</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- contact-area-start -->
 
    <!-- contact-area-end -->

<<<<<<< HEAD

                                        <li class="has-dropdown">
                                            <a href="blog.html">Collection</a>

                                            <ul class="sub-menu">
                                                @foreach ($categoriesALL as $categorie)
                                                    <li><a
                                                            href="{{ route('categories.show', ['category' => $categorie->Nom]) }}">{{ $categorie->Nom }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                        </li>
                                        <li class="has-dropdown">
                                            <a href="about.html">Pages</a>
                                            <ul class="sub-menu">

                                                <li><a href="comming-soon.html">Coming soon</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="{{route('Apropos')}}">Ice vegas</a></li>
                                        <li><a href="about.html">Promo</a></li>
                                        <li><a href="about.html">Recette</a></li>

                                        <li><a href="{{ route('Contact') }}">Contact </a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="header__info d-flex align-items-center">
                                <div class="header__info-search tpcolor__purple ml-10">
                                    <button class="tp-search-toggle"><i class="icon-search"></i></button>
                                </div>

                                @guest
                                    <div class="header__info-user tpcolor__yellow ml-10">
                                        <a href="{{ route('login') }}"><i class="icon-user"></i></a>
                                    </div>
                                @else
                                    <div class="col-xl-6">
                                        <div class="header__menu main-menu text-center">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li class="has-dropdown">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="blog-single.html"
                                                                    style=" font-family: 'Anonymous Pro';">Profile</a></li>
                                                            <li><a href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                                                                    style=" font-family: 'Anonymous Pro';">Déconnexion</a>
                                                            </li>
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>


                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header-search -->
        <div class="tpsearchbar tp-sidebar-area">
            <button class="tpsearchbar__close"><i class="icon-x"></i></button>
            <div class="search-wrap text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6 pt-100 pb-100">
                            <h2 class="tpsearchbar__title">What Are You Looking For?</h2>
                            <div class="tpsearchbar__form">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search Product...">
                                    <button class="tpsearchbar__search-btn"><i class="icon-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-body-overlay"></div>
        <!-- header-search-end -->

        <!-- header-cart-start -->
        <div class="tpcartinfo tp-cart-info-area p-relative">
            <button class="tpcart__close"><i class="icon-x"></i></button>
            <div class="tpcart">
                <h4 class="tpcart__title">Your Cart</h4>
                <div class="tpcart__product">
                    <div class="tpcart__product-list">
                        <ul>
                            <li>
                                <div class="tpcart__item">
                                    <div class="tpcart__img">
                                        <img src="assets/img/product/products1-min.jpg" alt="">
                                        <div class="tpcart__del">
                                            <a href="#"><i class="icon-x-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="tpcart__content">
                                        <span class="tpcart__content-title"><a href="shop-details.html">Stacy's Pita
                                                Chips Parmesan Garlic & Herb From Nature</a>
                                        </span>
                                        <div class="tpcart__cart-price">
                                            <span class="quantity">1 x</span>
                                            <span class="new-price">$162.80</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tpcart__item">
                                    <div class="tpcart__img">
                                        <img src="assets/img/product/products12-min.jpg" alt="">
                                        <div class="tpcart__del">
                                            <a href="#"><i class="icon-x-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="tpcart__content">
                                        <span class="tpcart__content-title"><a href="shop-details.html">Banana,
                                                Beautiful Skin, Good For Health 1Kg</a>
                                        </span>
                                        <div class="tpcart__cart-price">
                                            <span class="quantity">1 x</span>
                                            <span class="new-price">$138.00</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tpcart__item">
                                    <div class="tpcart__img">
                                        <img src="assets/img/product/products3-min.jpg" alt="">
                                        <div class="tpcart__del">
                                            <a href="#"><i class="icon-x-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="tpcart__content">
                                        <span class="tpcart__content-title"><a href="shop-details.html">Quaker Popped
                                                Rice Crisps Snacks Chocolate</a>
                                        </span>
                                        <div class="tpcart__cart-price">
                                            <span class="quantity">1 x</span>
                                            <span class="new-price">$162.8</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tpcart__checkout">
                        <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                            <span> Subtotal:</span>
                            <span class="heilight-price"> $300.00</span>
                        </div>
                        <div class="tpcart__checkout-btn">
                            <a class="tpcart-btn mb-10" href="cart.html">View Cart</a>
                            <a class="tpcheck-btn" href="checkout.html">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="tpcart__free-shipping text-center">
                    <span>Free shipping for orders <b>under 10km</b></span>
                </div>
            </div>
        </div>
        <div class="cartbody-overlay"></div>
        <!-- header-cart-end -->

        <!-- mobile-menu-area -->
        <div id="header-sticky-2" class="tpmobile-menu d-xl-none">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-3 col-sm-3">
                        <div class="mobile-menu-icon">
                            <button class="tp-menu-toggle"><i class="icon-menu1"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                        <div class="header__logo text-center">
                            <a href="index.html"><img height="100px" width="100px" src="logo.png"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-3 col-sm-5">
                        <div class="header__info d-flex align-items-center">
                            <div class="header__info-search tpcolor__purple ml-10 d-none d-sm-block">
                                <button class="tp-search-toggle"><i class="icon-search"></i></button>
                            </div>
                            <div class="header__info-user tpcolor__yellow ml-10 d-none d-sm-block">
                                <a href="log-in.html"><i class="icon-user"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-overlay"></div>
        <!-- mobile-menu-area-end -->

        <!-- sidebar-menu-area -->
        <div class="tpsideinfo">
            <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
            <div class="tpsideinfo__search text-center pt-35">
                <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
                <form action="#">
                    <input type="text" placeholder="Search Products...">
                    <button><i class="icon-search"></i></button>
                </form>
            </div>
            <div class="tpsideinfo__nabtab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Menu</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Categories</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="tpsidebar-categories">
                            <ul>
                                <li><a href="shop-details.html">Dairy Farm</a></li>
                                <li><a href="shop-details.html">Healthy Foods</a></li>
                                <li><a href="shop-details.html">Lifestyle</a></li>
                                <li><a href="shop-details.html">Organics</a></li>
                                <li><a href="shop-details.html">Photography</a></li>
                                <li><a href="shop-details.html">Shopping</a></li>
                                <li><a href="shop-details.html">Tips & Tricks</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tpsideinfo__account-link">
                <a href="log-in.html"><i class="icon-user icons"></i> Login / Register</a>
            </div>
            <div class="tpsideinfo__wishlist-link">
                <a href="wishlist.html" target="_parent"><i class="icon-heart"></i> Wishlist</a>
            </div>
        </div>
        <!-- sidebar-menu-area-end -->
    </header>
      <!-- header-area-end -->

      <main>

         <!-- breadcrumb-area-start -->
         <div class="breadcrumb__area pt-5 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                           <span class="tp-breadcrumb__active"><a href="index.html">Acceuil</a></span>
                           <span class="dvdr">/</span>
                           <span style="color: black">Contact</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- breadcrumb-area-end -->

         <!-- contact-area-start -->
      
         <!-- contact-area-end -->

         <!-- map-area-start -->
         <section class="map-area tpmap__box">
            <div class="container">
               <div class="row gx-0">
                  <div class="col-lg-6 col-md-6 order-2 order-md-1">
          
                     <div class="tpmap__wrapper">
                     <iframe src="https://maps.google.com/maps?q=benarous&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		    allowfullscreen></iframe>                     
                        </div>
                  </div>
                  <div class="col-lg-6 col-md-6 order-1 order-md-2">
                     <div class="tpform__wrapper pt-120 pb-80 ml-60">
                        <h4 class="tpform__title" style="color: black">Contactez Nous </h4>
                        <p style="color: black">Vous avez une question, un commentaire ou une suggestion ? Contactez-nous et nous vous répondrons dans les plus brefs délais.
                            *</p>
                        <div class="tpform__box">
                           <form action="#" style="color: black">
                              <div class="row gx-7">
                                 <div class="col-lg-6">
                                   
                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-1">
                                            <input id="email"  placeholder=" prenom :"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                           
                                        </div>
                                        <br>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input id="email"  placeholder="Nom : "  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                       
                                    </div>
                                 </div>
                                 <div class="col-lg-6">

                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input id="email"  placeholder="Votre sujet"  type="Subject" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                       
                                    </div>
                                    <br>
                                    
                                 </div>
                                 <div class="col-lg-6">
                                   
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input id="email"  placeholder="Téléphone : "  type="Subject" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                       
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tpform__textarea">
                                       <textarea name="message" placeholder="Message"></textarea>
                                       <div class="tpform__textarea-check mt-20 mb-25">
                                          <div class="form-check">
                                             <label class="form-check-label" for="flexCheckDefault01">
                                             </label>
                                           </div>                                  
                                       </div>
                                       <button>Send message</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- map-area-end -->

         
         <!-- feature-area-start -->
=======
    <!-- map-area-start -->
    <section class="map-area tpmap__box">
       <div class="container">
          <div class="row gx-0">
             <div class="col-lg-6 col-md-6 order-2 order-md-1">
>>>>>>> 27a969314a458ade99f3cfc668bdd4fc19a15dc3
     
                <div class="tpmap__wrapper">
                <iframe src="https://maps.google.com/maps?q=benarous&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
       allowfullscreen></iframe>                     
                   </div>
             </div>
             <div class="col-lg-6 col-md-6 order-1 order-md-2">
                <div class="tpform__wrapper pt-120 pb-80 ml-60">
                   <h4 class="tpform__title">LEAVE A REPLY</h4>
                   <p>Your email address will not be published. Required fields are marked *</p>
                   <div class="tpform__box">
                      <form action="#">
                         <div class="row gx-7">
                            <div class="col-lg-6">
                              
                               <div class="form-group">
                                   <div class="fxt-transformY-50 fxt-transition-delay-1">
                                       <input id="email"  placeholder="Your Name *"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6">
                               
                               <div class="fxt-transformY-50 fxt-transition-delay-1">
                                   <input id="email"  placeholder="Your Email *"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  
                               </div>
                            </div>
                            <div class="col-lg-6">

                               <div class="fxt-transformY-50 fxt-transition-delay-1">
                                   <input id="email"  placeholder="Your Subject *"  type="Subject" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  
                               </div>
                               
                            </div>
                            <div class="col-lg-6">
                              
                               <div class="fxt-transformY-50 fxt-transition-delay-1">
                                   <input id="email"  placeholder="Your Phone *"  type="Subject" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  
                               </div>
                            </div>
                            <div class="col-lg-12">
                               <div class="tpform__textarea">
                                  <textarea name="message" placeholder="Message"></textarea>
                                  <div class="tpform__textarea-check mt-20 mb-25">
                                     <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault01">
                                        <label class="form-check-label" for="flexCheckDefault01">
                                           I am bound by the terms of the <a href="#">Service I accept Privacy Policy.</a>
                                        </label>
                                      </div>                                  
                                  </div>
                                  <button>Send message</button>
                               </div>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- map-area-end -->

    
    <!-- feature-area-start -->

    <!-- feature-area-end -->

 </main>
 @endsection