<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ice Vegas </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" height="50px" width="50px" href="image.png">

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
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css"
        media="screen" />
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
        <style>
            .pt-20 {
                margin-left: 114px;
            }

            .pt-90 {
                padding-top: 0px;
            }

            .pt-45 {
                padding-top: 145px;
            }
        </style>
        <!-- slider-area-start -->
        <section class="slider-area tpslider-delay">
            <div class="swiper-container slider-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="tpslider pt-90 pb-0 grey-bg" data-background="mongue.png">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xxl-5 col-lg-6 col-md-6 col-12 col-sm-6">
                                        <div class="tpslider__content pt-20">
                                            <span class="tpslider__sub-title mb-35"></span>
                                            <h2 class="tpslider__title mb-30" style="color: black">Savourez
                                                l'excellence glacée avec Ice Vegas.</h2>
                                            <p style="color: black">Un duel de saveurs délicieusement intense :
                                                pistache vs chocolat !<br> Quel sera votre coup de cœur?</p>
                                            <div class="tpslider__btn">
                                                <a class="tp-btn" href="shop-2.html">Nos Collection</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-7 col-lg-6 col-md-6 col-12 col-sm-6">
                                        <div class="tpslider__thumb p-relative pt-15">
                                            <img class="tpslider__thumb-img" src="3.png" alt="slider-bg">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tpslider__arrow d-none  d-xxl-block">
                    <button class="tpsliderarrow tpslider__arrow-prv"><i class="icon-chevron-left"></i></button>
                    <button class="tpsliderarrow tpslider__arrow-nxt"><i class="icon-chevron-right"></i></button>
                </div>
                <div class="slider-pagination d-xxl-none"></div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- category-area-start -->
        <section class="category-area grey-bg pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                           
                            <h4 class="tpsection__title" style="color: black">Produits Ice Vegas</h4>
                            <p style="color: black">"Découvrez notre sélection exclusive de produits pour répondre à tous vos besoins"</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container category-active">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="category__item mb-30">
                                    <div class="category__thumb fix mb-15">
                                        <a href="{{ route('products.show', $product->id) }}"><img
                                                src="{{ $product->Image }}" alt="{{ $product->Nom }}"></a>
                                    </div>
                                    <div class="category__content">
                                        <h5 class="category__title"><a
                                                href="{{ route('products.show', $product->id) }}">{{ $product->Nom }}</a>
                                        </h5>
                                        <span class="category__count">
                                            <p>Categorie: {{ $product->categorie->Nom }}</p>
                                            <!-- Display category name -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>







        <!-- category-area-end -->

        <!-- product-area-start -->
        <section class="product-area grey-bg pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                            <h4 class="tpsection__sub-title">~Qui sommes nous~</h4>
                            <h4 class="tpsection__title tpfeature__title mb-25" style="color: black;">Ice Vegas</h4>
                            <p style="color: black;font-size: 20px">Un plaisir insatiable à chaque dégustation</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- product-area-end -->

        <!-- product-feature-area-start -->
        <section class="product-feature-area product-feature grey-bg pt-80 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="tpfeature__thumb p-relative pb-40">
                            <img src="image3.jpg" alt="">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="tpproduct-feature p-relative pt-45 pb-40">
                            <div class="tpsection tpfeature__content mb-35">
                                <h4 class="tpsection__sub-title mb-0"></h4>
                                <h4 style="color: black;" class="tpsection__title tpfeature__title mb-25">Ice Vegas
                                    <br>
                                    Un plaisir insatiable à chaque dégustation</h4>
                                <p>Bienvenue chez Ice Vegas, votre destination ultime pour une expérience glacée
                                    incomparable. Nous sommes une marque premium de glaces industrielles, dédiés à
                                    offrir des moments de plaisir et de fraîcheur inégalés à chaque bouchée.</p>
                            </div>
                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="tpfeature__box">


                                        <div class="tpfeature__btn">
                                            <a class="tp-btn-3" href="{{ route('Apropos') }}">Ice vegas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tpfeature__shape d-none d-md-block">
                                <img class="tpfeature__shape-three" src=".jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-feature-area-end -->

        <!-- banner-area-start -->
        <section class="category-area grey-bg pb-40">
            <div class="container">
                <div class="swiper-container category-active">
                    <div class="swiper-wrapper">
                    @foreach ($categoriesALL as $categorie)
                            <div class="swiper-slide">
                                <div class="category__item mb-30">
                                    <div class="category__thumb fix mb-15">
                                        <a href="{{ route('categories.show', ['category' => $categorie->Nom]) }}"><img
                                                src="{{ asset($categorie->Image) }}" alt="{{ $categorie->Nom }}"></a>
                                    </div>
                                    <div class="category__content">
                                        <h5 class="category__title"><a
                                                href="{{ route('categories.show', ['category' => $categorie->Nom]) }}">{{ $categorie->Nom }}</a>
                                        </h5>
                                    
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

       
        <!-- banner-area-end -->

        <!-- product-area-start -->

        <!-- product-area-end -->

        <!-- product-coundown-area-start -->
        <section class="product-coundown-area tpcoundown__bg grey-bg pb-25"
            data-background="assets/img/banner/coundpwn-bg-1.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpcoundown p-relative ml-175">
                            <div class="section__content mb-35">
                                <span class="section__sub-title mb-10">~ Deals Of The Day ~</span>
                                <h2 class="section__title mb-25">Premium Drinks <br> Fresh Farm Product</h2>
                                <p>The liber tempor cum soluta nobis eleifend option congue <br>
                                    doming quod mazim placerat facere possum assam going through.</p>
                            </div>
                            <div class="tpcoundown__count">
                                <h4 class="tpcoundown__count-title">hurry up! Offer End In:</h4>
                                <div class="tpcoundown__countdown" data-countdown="2022/11/11"></div>
                                <div class="tpcoundown__btn mt-50">
                                    <a class="whight-btn" href="shop-details-grid.html">Shop Now</a>
                                    <a class="whight-btn border-btn ml-15" href="shop-list-view.html">View Menu</a>
                                </div>
                            </div>
                            <div class="tpcoundown__shape d-none d-lg-block">
                                <img class="tpcoundown__shape-one" src="assets/img/shape/tree-leaf-1.svg"
                                    alt="">
                                <img class="tpcoundown__shape-two" src="assets/img/shape/tree-leaf-2.svg"
                                    alt="">
                                <img class="tpcoundown__shape-three" src="assets/img/shape/tree-leaf-3.svg"
                                    alt="">
                                <img class="tpcoundown__shape-four" src="assets/img/shape/fresh-shape-1.svg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-coundown-area-end -->

        <!-- blog-area-start -->
        <section class="blog-area pt-100 pb-100 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                            <h4 class="tpsection__sub-title">~ Read Our Blog ~</h4>
                            <h4 class="tpsection__title">Our Latest Post</h4>
                            <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="swiper-container category-active">
                        <div class="swiper-wrapper">
                            @foreach ($players as $player)
                                <div class="swiper-slide">
                                    <div class="category__item mb-30">
                                        <div class="category__thumb fix mb-15">
                                            <!-- Assuming $player->Image is the field for player image -->
                                            <a href="#"><img src="{{ $player->Image }}"
                                                    alt="{{ $player->name }}"></a>
                                        </div>
                                        <div class="category__content">
                                            <!-- Assuming $player->name is the field for player's name -->
                                            <h5 class="category__title"><a href="#">{{ $player->name }}</a>
                                            </h5>
                                            <!-- You can display other player information here -->
                                            <span class="category__count">
                                                <!-- Display player category or any other relevant info -->
                                                <p>Points Gained: {{ $player->points_gained }}</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

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
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
