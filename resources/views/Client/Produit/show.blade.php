<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{ $product->Nom }}</title>
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
                                        <li><a href="about.html">Ice vegas</a></li>
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
         <div class="breadcrumb__area grey-bg pt-5 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                           <span class="tp-breadcrumb__active"><a  style="color:black" href="index.html">Home</a></span>
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
                                    <b>02 Reviews</b>
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
                                            <h4 class="tpsection__sub-title mb-0">~ The Best For Your ~</h4>
                                            <h4 class="tpsection__title tpfeature__title mb-25">Organic Drinks <br> <span>Easy
                                                    Healthy</span> - Happy Life</h4>
                                            <p>The liber tempor cum soluta nobis eleifend option congue <br> doming quod mazim
                                                placerat facer possim assum.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tpfeature__box">
                                                    <div class="tpfeature__product-item mb-25">
                                                        <h4 class="tpfeature__product-title">Fresh Fruits:</h4>
                                                        <span class="tpfeature__product-info">Apples, Berries & Cherries</span>
                                                    </div>
                                                    <div class="tpfeature__product-item mb-45">
                                                        <h4 class="tpfeature__product-title">Expiry Date:</h4>
                                                        <span class="tpfeature__product-">See on The Bottle Cap</span>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tpfeature__box">
                                                    <div class="tpfeature__product-item mb-25">
                                                        <h4 class="tpfeature__product-title">Ingredient:</h4>
                                                        <span class="tpfeature__product-info">Energy, Protein, Sugars</span>
                                                    </div>
                                                    <div class="tpfeature__product-item mb-45">
                                                        <h4 class="tpfeature__product-title">Bootle Size:</h4>
                                                        <span class="tpfeature__product-">500ml – 1000ml</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tpfeature__shape d-none d-md-block">
                                            <img class="tpfeature__shape-three" src=".jpg"
                                                alt="">
                                        </div>
                                        
                                          <a href="#"><i class="icon-share-2"></i> Share</a>
                                       
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
                                   <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false">ADDITIONAL INFORMATION</button>
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
                                    <p>Form is an armless modern chair with a minimalistic expression. With a simple and contemporary design Form Chair has a soft and welcoming ilhouette and a distinctly residential look. The legs appear almost as if they are growing out of the shell. This gives the design flexibility and makes it possible to vary the frame. Unika is a mouth blown series of small, glass pendant lamps, originally designed for the Restaurant Gronbech. Est eum itaque maiores qui blanditiis architecto. Eligendi saepe rem ut. Cumque quia earum eligendi. </p>
                                 </div>
                              </div>




                              <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                                 <div class="tpreview__wrapper">
                                    <h4 class="tpreview__wrapper-title">1 review for Cheap and delicious fresh chicken</h4>
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
                        <div class="tpsidebar__warning mb-30">
                           <ul>
                              <li>
                                 <div class="tpsidebar__warning-item">
                                    <div class="tpsidebar__warning-icon">
                                       <i class="icon-package"></i>
                                    </div>
                                    <div class="tpsidebar__warning-text">
                                       <p>Free shipping apply to all <br> orders over $90</p>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="tpsidebar__warning-item">
                                    <div class="tpsidebar__warning-icon">
                                       <i class="icon-shield"></i>
                                    </div>
                                    <div class="tpsidebar__warning-text">
                                       <p>Guaranteed 100% Organic <br>  from nature farms</p>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="tpsidebar__warning-item">
                                    <div class="tpsidebar__warning-icon">
                                       <i class="icon-package"></i>
                                    </div>
                                    <div class="tpsidebar__warning-text">
                                       <p>60 days returns if you change <br> your mind</p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="tpsidebar__banner mb-30">
                           <img src="assets/img/shape/sidebar-product-1.png" alt="">
                        </div>
                        <div class="tpsidebar__product">
                           <h4 class="tpsidebar__title mb-15">Recent Products</h4>
                           <div class="tpsidebar__product-item">
                              <div class="tpsidebar__product-thumb p-relative">
                                 <img src="assets/img/product/sidebar-pro-1.jpg" alt="">
                                 <div class="tpsidebar__info bage">
                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                 </div>
                              </div>
                              <div class="tpsidebar__product-content">
                                 <span class="tpproduct__product-category">
                                    <a href="shop-details-3.html">Fresh Fruits</a>
                                 </span>
                                 <h4 class="tpsidebar__product-title">
                                    <a href="shop-details-grid.html">Fresh Mangosteen 100% Organic From VietNamese</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                           </div>
                           <div class="tpsidebar__product-item">
                              <div class="tpsidebar__product-thumb p-relative">
                                 <img src="assets/img/product/sidebar-pro-2.jpg" alt="">
                                 <div class="tpsidebar__info bage">
                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                 </div>
                              </div>
                              <div class="tpsidebar__product-content">
                                 <span class="tpproduct__product-category">
                                    <a href="shop-details-3.html">Fresh Fruits</a>
                                 </span>
                                 <h4 class="tpsidebar__product-title">
                                    <a href="shop-details-4.html">Fresh Mangosteen 100% Organic From VietNamese</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                           </div>
                           <div class="tpsidebar__product-item">
                              <div class="tpsidebar__product-thumb p-relative">
                                 <img src="assets/img/product/sidebar-pro-3.jpg" alt="">
                                 <div class="tpsidebar__info bage">
                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                 </div>
                              </div>
                              <div class="tpsidebar__product-content">
                                 <span class="tpproduct__product-category">
                                    <a href="shop-details-3.html">Fresh Fruits</a>
                                 </span>
                                 <h4 class="tpsidebar__product-title">
                                    <a href="shop-details-3.html">Fresh Mangosteen 100% Organic From VietNamese</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                           </div>
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
                     <h5 class="tpdescription__product-title mb-20">Related Products</h5>
                  </div>
               </div>
               <div class="tpproduct__arrow double-product p-relative">
                  <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="tpproduct p-relative">
                              <div class="tpproduct__thumb p-relative text-center">
                                 <a href="#"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                 <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                 <div class="tpproduct__info bage">
                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                 </div>
                                 <div class="tpproduct__shopping">
                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                 </div>
                              </div>
                              <div class="tpproduct__content">
                                 <span class="tpproduct__content-weight">
                                    <a href="shop-details.html">Fresh Meat</a>
                                 </span>
                                 <h4 class="tpproduct__title">
                                    <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                              <div class="tpproduct__hover-text">
                                 <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                 </div>
                                 <div class="tpproduct__descrip">
                                    <ul>
                                       <li>Type: Organic</li>
                                       <li>MFG: August 4.2021</li>
                                       <li>LIFE: 60 days</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tpproduct p-relative">
                              <div class="tpproduct__thumb p-relative text-center">
                                 <a href="#"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                 <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                 <div class="tpproduct__info bage">
                                    <span class="tpproduct__info-discount bage__discount">-40%</span>
                                 </div>
                                 <div class="tpproduct__shopping">
                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                 </div>
                              </div>
                              <div class="tpproduct__content">
                                 <span class="tpproduct__content-weight">
                                    <a href="shop-details.html">Fresh Meat</a>
                                 </span>
                                 <h4 class="tpproduct__title">
                                    <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose Gold)</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                              <div class="tpproduct__hover-text">
                                 <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                 </div>
                                 <div class="tpproduct__descrip">
                                    <ul>
                                       <li>Type: Organic</li>
                                       <li>MFG: August 4.2021</li>
                                       <li>LIFE: 60 days</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tpproduct p-relative">
                              <div class="tpproduct__thumb p-relative text-center">
                                 <a href="#"><img src="assets/img/product/products13-min.jpg" alt=""></a>
                                 <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products35-min.jpg" alt=""></a>
                                 <div class="tpproduct__info bage">
                                    <span class="tpproduct__info-discount bage__discount">-10%</span>
                                 </div>
                                 <div class="tpproduct__shopping">
                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                 </div>
                              </div>
                              <div class="tpproduct__content">
                                 <span class="tpproduct__content-weight">
                                    <a href="shop-details-3.html">Fresh Fruits</a>
                                 </span>
                                 <h4 class="tpproduct__title">
                                    <a href="shop-details.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                              <div class="tpproduct__hover-text">
                                 <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                 </div>
                                 <div class="tpproduct__descrip">
                                    <ul>
                                       <li>Type: Organic</li>
                                       <li>MFG: August 4.2021</li>
                                       <li>LIFE: 60 days</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tpproduct p-relative">
                              <div class="tpproduct__thumb p-relative text-center">
                                 <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                 <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                 <div class="tpproduct__info bage">
                                    <span class="tpproduct__info-discount bage__discount">-90%</span>
                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                 </div>
                                 <div class="tpproduct__shopping">
                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                 </div>
                              </div>
                              <div class="tpproduct__content">
                                 <span class="tpproduct__content-weight">
                                    <a href="shop-details-3.html">Fresh Fruits</a>
                                 </span>
                                 <h4 class="tpproduct__title">
                                    <a href="shop-details-grid.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                              <div class="tpproduct__hover-text">
                                 <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                 </div>
                                 <div class="tpproduct__descrip">
                                    <ul>
                                       <li>Type: Organic</li>
                                       <li>MFG: August 4.2021</li>
                                       <li>LIFE: 60 days</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tpproduct p-relative">
                              <div class="tpproduct__thumb p-relative text-center">
                                 <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                 <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                 <div class="tpproduct__info bage">
                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                 </div>
                                 <div class="tpproduct__shopping">
                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                 </div>
                              </div>
                              <div class="tpproduct__content">
                                 <span class="tpproduct__content-weight">
                                    <a href="shop-details-3.html">Vagetables</a>
                                 </span>
                                 <h4 class="tpproduct__title">
                                    <a href="shop-details-3.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                              <div class="tpproduct__hover-text">
                                 <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                 </div>
                                 <div class="tpproduct__descrip">
                                    <ul>
                                       <li>Type: Organic</li>
                                       <li>MFG: August 4.2021</li>
                                       <li>LIFE: 60 days</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tpproduct p-relative">
                              <div class="tpproduct__thumb p-relative text-center">
                                 <a href="#"><img src="assets/img/product/products12-min.jpg" alt=""></a>
                                 <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products28-min.jpg" alt=""></a>
                                 <div class="tpproduct__info bage">
                                    <span class="tpproduct__info-discount bage__discount">-40%</span>
                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                 </div>
                                 <div class="tpproduct__shopping">
                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                 </div>
                              </div>
                              <div class="tpproduct__content">
                                 <span class="tpproduct__content-weight">
                                    <a href="shop-details-3.html">Fresh Fruits</a>
                                 </span>
                                 <h4 class="tpproduct__title">
                                    <a href="shop-details-grid.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                 </h4>
                                 <div class="tpproduct__rating mb-5">
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                 </div>
                                 <div class="tpproduct__price">
                                    <span>$56.00</span>
                                    <del>$19.00</del>
                                 </div>
                              </div>
                              <div class="tpproduct__hover-text">
                                 <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                 </div>
                                 <div class="tpproduct__descrip">
                                    <ul>
                                       <li>Type: Organic</li>
                                       <li>MFG: August 4.2021</li>
                                       <li>LIFE: 60 days</li>
                                    </ul>
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
