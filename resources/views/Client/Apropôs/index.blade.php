<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Orfarm - Multipurpose eCommerce HTML5 Template </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/spacing.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/css/icon-dukamarket.css">
      <link rel="stylesheet" href="assets/css/jquery-ui.css">
      <link rel="stylesheet" href="assets/css/main.css">
   </head>
   <body>


      <!-- Scroll-top -->
      <button class="scroll-top scroll-to-target" data-target="html">
         <i class="icon-chevrons-up"></i>
      </button>
      <!-- Scroll-top-end-->


      <!-- header-area-start -->
      <header>
        <div class="header__top theme-bg-1 d-none d-md-block" style="background-color: white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="header__top-left">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="header__top-right d-flex align-items-center">

                            <div class="header__lang">
                                <span class="header__lang-select" style="color: black">France <i
                                        class="far fa-angle-down"></i></span>
                                <ul class="header__lang-submenu">



                                    <li>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <a href="#">France</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header__main-area d-none d-xl-block" style="margin-bottom: 0;">
            <div class="container">
                <div class="header__for-megamenu p-relative">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <div class="header__logo">
                                <a href="index.html"><img height="100px" width="100px" src="logo.png"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="header__menu main-menu text-center">
                                <nav id="mobile-menu" style="color: black">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Accueil</a></li>

                                        {{-- <li class="has-dropdown has-megamenu">
                                            <a href="course-grid.html">Ca</a>
                                            <ul class="sub-menu mega-menu"
                                                data-background="assets/img/banner/mega-menu-shop-1.jpg">
                                                <li>
                                                    <a class="mega-menu-title">Shop layout</a>
                                                    <ul>
                                                        <li><a href="shop-left-sidebar.html">Shop With Banner </a></li>
                                                        <li><a href="shop-3.html">Shop Without Banner</a></li>
                                                        <li><a href="shop-2.html">Shop Version</a></li>
                                                        <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop Right sidebar</a>
                                                        </li>
                                                        <li><a href="shop-list-view.html">Shop List view</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="mega-menu-title">Product layout</a>
                                                    <ul>
                                                        <li><a href="shop-details-3.html">Image scroll</a></li>
                                                        <li><a href="shop-details-grid.html">Product grid</a></li>
                                                        <li><a href="shop-details-top.html">Top Thumb Product</a></li>
                                                        <li><a href="shop-details.html">Bottom Thumb Product</a></li>
                                                        <li><a href="shop-details-4.html">Simple Product</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="mega-menu-title">Product type</a>
                                                    <ul>
                                                        <li><a href="shop-details.html">Products Simple</a></li>
                                                        <li><a href="shop-details-grid.html">Products Group</a></li>
                                                        <li><a href="shop-details-3.html">Products Variable</a></li>
                                                        <li><a href="shop-details-3.html">Special</a></li>
                                                        <li><a href="shop-details-4.html">Decoration</a></li>
                                                        <li><a href="shop-details-top.html">Contruction</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="mega-menu-title">Product category</a>
                                                    <ul>
                                                        <li><a href="shop-details.html">Fresh bakery</a></li>
                                                        <li><a href="shop-details-3.html">Fresh fruits</a></li>
                                                        <li><a href="shop-details-4.html">Fresh meat</a></li>
                                                        <li><a href="shop-details.html">Fruit drink</a></li>
                                                        <li><a href="shop-details.html">Fresh bakery</a></li>
                                                        <li><a href="shop-details-grid.html">Biscuits snack</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}


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

         <!-- about-area-start -->
         <section class="about-area tpabout__inner-bg pt-175 pb-170 mb-50" data-background="img33.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tpabout__inner text-center">
                    
                        <h3 class="tpabout__inner-title mb-35"></h3>
                        <p>Over 25 years of experience, we have crafted thousands of strategic discovery process that <br> enables us to peel back the layers which enable us to understand, connect.</p>
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about-area-end -->

         <!-- about-area-start -->
         <section class="about-area pt-100 pb-60">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="tpabout__inner-thumb-2 p-relative mb-30">
                        <img src="logo.png" alt=""Height="500px" width="500px">
                        <div class="tpabout__inner-thumb-shape d-none d-md-block">
                           
                       
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="tpabout__inner-2 mb-30">
                        <div class="tpabout__inner-tag mb-10">
                           <span class="active"></span>
                           <span>Ice vegas</span>
                        </div>
                        <h3 class="tpabout__inner-title-2 mb-25">Savourez l'excellence glacée avec Ice Vegas
                           </h3>
                        <p>Plongez dans l'univers d'Ice Vegas et laissez-vous séduire par nos créations glacées. Que ce soit pour une pause gourmande, une célébration ou simplement pour le plaisir, Ice Vegas vous promet une expérience unique à chaque dégustation.

                            Merci de choisir Ice Vegas, où chaque glace est une aventure délicieuse.</p>
                       
                           <h3 class="tpabout__inner-title-2 mb-25">Nos Valeurs
                          </h3>
                           <div class="tpabout__inner-list">
                           <ul>
                              <li><i class="icon-check"></i> Qualité : Nous sélectionnons rigoureusement nos matières premières pour vous offrir des produits de la plus haute qualité.</li>
                              <li><i class="icon-check"></i>Innovation : Toujours à la recherche de nouvelles saveurs et de nouvelles textures pour surprendre et satisfaire nos clients.</li>
                              <li><i class="icon-check"></i> Éthique : Nous respectons des normes strictes de production durable et responsable, en minimisant notre impact environnemental.</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <style>
            .pb-50{
                padding-bottom: 29px;
            }
            .pt-80{
                padding-top: 0px;
            }

         </style>
         <!-- about-area-end -->

         <!-- about-area-start -->
        
         <!-- about-area-end -->

         <!-- img-box-area-start -->
      
         <!-- img-box-area-end -->

         <!-- video-area-start -->
         <section class="video-area pt-80 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 text-center">
                     <div class="tpsection mb-35">
                        <h4 class="tpsection__sub-title">~ Good Performance ~</h4>
                        <h4 class="tpsection__title">Our Working Ability</h4>
                        <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-lg-12">
                    <div class="tpvideo__bg p-relative mb-25">
                        <img src="assets/img/banner/video-bg-1.jpg" alt="Video Background">
                        <div class="tpvideo__video-btn">
                            <video width="100%" controls>
                                <source src="{{ asset('ICE VEGAS FLOWER-1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            
            <style>
            .tpvideo__video-btn video {
                width: 76%;
                border-radius: 10px; /* Add border radius if needed */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow if needed */
            }
            </style>
            
               </div>
             
            </div>
         </section>
         <!-- video-area-end -->

         <!-- choose-area-start -->
         <section class="choose-area tpchoose__bg pb-80 grey-bg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 text-center">
                     <div class="tpsection mb-35 pt-75">
                        <h4 class="tpsection__sub-title">~ Why choose us? ~</h4>
                        <h4 class="tpsection__title">What makes us different</h4>
                        <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="tpchoose__item text-center mb-30">
                        <div class="tpchoose__icon mb-20">
                           <img src="assets/img/icon/choose-icon1.svg" alt="">
                        </div>
                        <div class="tpchoose__content">
                           <h4 class="tpchoose__title">100% Fresh Food</h4>
                           <p>Adjust global theme options and see design changes in real-time.</p>
                           <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center">learn more<i class="icon-chevrons-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="tpchoose__item text-center mb-30">
                        <div class="tpchoose__icon mb-20">
                           <img src="assets/img/icon/choose-icon2.svg" alt="">
                        </div>
                        <div class="tpchoose__content">
                           <h4 class="tpchoose__title">Premium Quality</h4>
                           <p>Adjust global theme options and see design changes in real-time.</p>
                           <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center">learn more<i class="icon-chevrons-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="tpchoose__item text-center mb-30">
                        <div class="tpchoose__icon mb-20">
                           <img src="assets/img/icon/choose-icon3.svg" alt="">
                        </div>
                        <div class="tpchoose__content">
                           <h4 class="tpchoose__title">100% Natural</h4>
                           <p>Adjust global theme options and see design changes in real-time.</p>
                           <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center">learn more<i class="icon-chevrons-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="tpchoose__item text-center mb-30">
                        <div class="tpchoose__icon mb-20">
                           <img src="assets/img/icon/choose-icon4.svg" alt="">
                        </div>
                        <div class="tpchoose__content">
                           <h4 class="tpchoose__title">100% Organic Goods</h4>
                           <p>Adjust global theme options and see design changes in real-time.</p>
                           <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center">learn more<i class="icon-chevrons-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tpproduct__all-item text-center pt-15">
                        <span>Our nearly 1.4K committed staff members are ready to help. 
                           <a href="#">Help Center <i class="icon-chevrons-right"></i></a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- choose-area-end -->

         <!-- testimonial-area-start -->
      
         <!-- testimonial-area-end -->

         <!-- feature-area-start -->
        
         <!-- feature-area-end -->

      </main>

      <!-- footer-area-start -->
      <footer>
        <section class="section-less-padding-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-centered text-center"> <img src="images/logo/logo.png"
                            alt="" /> </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-7">
                        <div class="tpfooter__widget footer-col-4 mb-50">
                            <h4 class="tpfooter__widget-title">Our newsletter</h4>
                            <div class="tpfooter__widget-newsletter">
                                <p>Subscribe to the Orfarm mailing list to receive updates <br> on new arrivals & other
                                    information.</p>
                                <form action="index.html">
                                    <span><i><img src="assets/img/shape/message-1.svg" alt=""></i></span>
                                    <input type="email" placeholder="Your email address...">
                                    <button class="tpfooter__widget-newsletter-submit tp-news-btn">Subscribe</button>
                                </form>
                                <div class="tpfooter__widget-newsletter-check mt-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I accept terms & conditions & privacy policy.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tpfooter__widget-social mt-45">
                        <span class="tpfooter__widget-social-title mb-5">Social Media:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                    </div>
                    <br />
                    <div class="col-md-12 col-centered text-center">
                        <p class="text-gray">Copyright © 2019 <br />
                            Design & Developed by Codelayers</p>
                    </div>

                </div>
            </div>
        </section>
    </footer>
      <!-- footer-area-end -->
      

      <!-- JS here -->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/waypoints.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/counterup.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/countdown.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/jquery-ui.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
