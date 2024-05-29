@extends('Client.Layouts.index')

<<<<<<< HEAD
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
                            <h2 class="tpsearchbar__title"> Que cherchez-vous ?
                            </h2>
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
=======
@section('content')
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
>>>>>>> 27a969314a458ade99f3cfc668bdd4fc19a15dc3
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
    {{-- @if (session('success'))
            <div class="alert alert-success mt-2 text-center">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mt-2 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    <!-- category-area-start -->
    <section class="category-area grey-bg pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="tpsection mb-35">

                        <h4 class="tpsection__title" style="color: black">Produits Ice Vegas </h4>
                        <p style="color: black">"Découvrez notre sélection exclusive de produits pour répondre à
                            tous vos besoins"</p>
                    </div>
                </div>
            </div>
            <div class="swiper-container category-active">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div class="category__item mb-30">
                                <div class="category__thumb fix mb-15">
                                    <a href="{{ route('products.show', $product->id) }}"><img src="{{ $product->Image }}"
                                            alt="{{ $product->Nom }}"></a>
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
                                Un plaisir insatiable à chaque dégustation
                            </h4>
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
                            <img class="tpcoundown__shape-one" src="assets/img/shape/tree-leaf-1.svg" alt="">
                            <img class="tpcoundown__shape-two" src="assets/img/shape/tree-leaf-2.svg" alt="">
                            <img class="tpcoundown__shape-three" src="assets/img/shape/tree-leaf-3.svg" alt="">
                            <img class="tpcoundown__shape-four" src="assets/img/shape/fresh-shape-1.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-coundown-area-end -->

 
    <!-- blog-area-end -->

    <!-- feature-area-start -->

    <!-- feature-area-end -->
@endsection
